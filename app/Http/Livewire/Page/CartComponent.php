<?php

namespace App\Http\Livewire\Page;

use Cart;
use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Coupon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{

    public $haveCouponCode;
    public $CouponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;



    public function increaseQuantity($rowId){

        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty +1 ;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('page.cart-count.cart-count','refreshComponent');
    }

    public function decreaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty -1 ;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('page.cart-count.cart-count','refreshComponent');
    }

    public function destory($rowId){

        Cart::instance('cart')->remove($rowId);
        $this->emitTo('page.cart-count.cart-count','refreshComponent');
        session()->flash('success_message','Item has benn remove');
        
    }


    public function destroyAll(){

        Cart::destroy();
        $this->emitTo('page.cart-count.cart-count','refreshComponent');
    }


    public function applyCouponCode(){
        $coupon = Coupon::where('code',$this->CouponCode)->where('expiry_date','>=',Carbon::today())->where('cart_value','<=',Cart::instance('cart')->subtotal())->first();
        if(!$coupon){
            session()->flash('coupon_message','Coupon code is invalide');
            return;
        }
        session()->put('coupon',[
            'code'=> $coupon->code,
            'type'=> $coupon->type,
            'value'=>$coupon->value,
            'cart_value'=>$coupon->cart_value
        ]);
    }   


    public function calculateDiscounts(){
        if(session()->has('coupon')){
             if(session()->get('coupon')['type'] == 'fexed'){
                $this->discount = session()->get('coupon')['value'];
                 
             }
             else{
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
             }
             $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
             $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax'))/100;
             $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }


    public function removeCoupon(){
        session()->forget('coupon');
    }


    public function checkout(){
        if(Auth::check()){
            return redirect()->route('checkout');
        }
        else{

            return redirect()->route('login');
        }
    }


    public function setAmountForCheckout(){
       if(!Cart::instance('cart')->count() >0){
             session()->forget('checkout');
             return;
       } 
        if(session()->has('coupon')){
            session()->put('checkout',[
                'discount'=> $this->discount,
                'subtotal'=> $this->subtotalAfterDiscount,
                'tax'=>$this->taxAfterDiscount,
                'total'=>$this->totalAfterDiscount
            ]);
        }
        else{
            session()->put('checkout',[
                'discount'=> 0,
                'subtotal'=> Cart::instance('cart')->subtotal(),
                'tax'=> Cart::instance('cart')->tax(),
                'total'=> Cart::instance('cart')->total()
            ]);
        }
    }



    public function render()
    {
        if(session()->has('coupon')){
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']){
                session()->forget('coupon');
            }
            else{
                $this->calculateDiscounts();
            }
        }
        $this->setAmountForCheckout();

        if(Auth::check()){
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        $sale = Sale::find(1);
        
        return view('livewire.page.cart',['sale'=>$sale])->layout('layouts.site');
    }
}
