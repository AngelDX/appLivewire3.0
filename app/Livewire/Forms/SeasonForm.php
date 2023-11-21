<?php

namespace App\Livewire\Forms;

use App\Models\Season;
use Livewire\Attributes\Rule;
use Livewire\Form;

class SeasonForm extends Form{
    public ?Season $season;

    #[Rule('required|min:5')]
    public $name;

    #[Rule('required|min:4')]
    public $year;

    public function setForm(Season $season){
        $this->season = $season;
        $this->name = $season->name;
        $this->year = $season->year;
    }

    public function resetForm(){
        $this->reset();
    }
}
