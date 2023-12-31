<?php 

namespace App\Services;

class PriceCalculation {

    private $amount;
    private $tax;
    private $discount;

    public function setAmount($amount = 0){
        $this->amount = $amount;
        return $this;
    }

    public function setTax($tax = 0){
        $this->tax = $tax;
        return $this;
    }

    public function setDiscount($discount = 0){
        $this->discount = $discount;
        return $this;
    }

    public function calculatePrice(){

        $taxAmount = ($this->amount * $this->tax) / 100;
        $discountAmount = ($this->amount * $this->discount) / 100;

        return ceil($this->amount + $taxAmount - $discountAmount);
    }
}