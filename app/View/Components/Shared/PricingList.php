<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class PricingList extends Component
{
    public $model;
    public $prices;
    
    public $price1;
    public $price2;
    public $price3;
    public $price4;

    public $label1;
    public $label2;
    public $label3;
    public $label4;

    public $deadline1;
    public $deadline2;
    public $deadline3;
    public $deadline4;

    public $type;

    public function __construct($model)
    {
        $this->model = $model;
        $this->type = class_basename($model);
        $this->prices = $this->model->prices;
        $this->setDeadlines();
    }

    protected function setDeadlines()
    {
        foreach ($this->prices as $price) {
            if ($price->amount2) {
                $this->price1 = $price->amount2;
            }
            if ($price->amount3) {
                $this->price2 = $price->amount3;
            }
            if ($price->amount4) {
                $this->price3 = $price->amount4;
            }
            if ($price->amount5) {
                $this->price4 = $price->amount5;
            }

            if ($price->label2) {
                $this->label1 = $price->label2;
            }
            if ($price->label3) {
                $this->label2 = $price->label3;
            }
            if ($price->label4) {
                $this->label3 = $price->label4;
            }
            if ($price->label5) {
                $this->label4 = $price->label5;
            }

            if ($price->deadline2) {
                $this->deadline1 = $price->deadline2;
            }
            if ($price->deadline3) {
                $this->deadline2 = $price->deadline3;
            }
            if ($price->deadline4) {
                $this->deadline3 = $price->deadline4;
            }
            if ($price->deadline5) {
                $this->deadline4 = $price->deadline5;
            }
        }
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.pricing-list');
    }
}
