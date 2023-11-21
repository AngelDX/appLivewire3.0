<?php

namespace App\Livewire\Forms;

use App\Models\Period;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PeriodForm extends Form{
    public ?Period $period;

    #[Rule('required|min:5')]
    public $name;

    #[Rule('required|min:5')]
    public $datein;

    #[Rule('required|min:5')]
    public $dateout;

    public function setPost(Period $period){
        $this->period = $period;
        $this->name = $period->name;
        $this->datein = $period->datein;
        $this->dateout = $period->dateout;
    }

    public function resetPost(){
        //$this->name = '';
        //$this->datein = '';
        //$this->dateout = '';
        $this->reset();
    }
}
