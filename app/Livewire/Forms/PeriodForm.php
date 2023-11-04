<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PeriodForm extends Form{
    #[Rule('required|min:5')]
    public $name;

    #[Rule('required|min:5')]
    public $datein;

    #[Rule('required|min:5')]
    public $dateout;
}
