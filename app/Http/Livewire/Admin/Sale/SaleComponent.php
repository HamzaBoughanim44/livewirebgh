<?php

namespace App\Http\Livewire\Admin\Sale;

use App\Models\Sale;
use Livewire\Component;

class SaleComponent extends Component
{
    public $sale_date;
    public $status;

    public function mount(){
        $sale = Sale::find(1);
        $this->sale_date = $sale->sale_date;
        $this->status = $sale->status;
    }

    public function updateSale(){
        $sale = Sale::find(1);
        $sale->sale_date = $this->sale_date ;
        $sale->status = $this->status ;
        $sale->save();
        session()->flash('message','this sale is updated succses');
    }
    
    public function render()
    {
        return view('livewire.admin.sale.sale-component')->layout('layouts.admin');
    }
}
