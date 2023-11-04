<?php

namespace App\Livewire;

use App\Livewire\Forms\PeriodForm;
use App\Models\Period;
use Livewire\Component;
use Livewire\WithPagination;

class PeriodMain extends Component{

    use WithPagination;
    public $isOpen=false;
    public $period,$search;
    protected $listeners=['render','delete'=>'delete'];
    public PeriodForm $form;

    public function render(){
        $periods=Period::where('name','like','%'.$this->search.'%')->latest()->paginate();
        return view('livewire.period-main',compact('periods'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['period']);
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->period->id)){
            Period::create($this->period);
        }else{
            $this->period->save();
        }
        $this->reset(['isOpen','period']);
        $this->emitTo('PeriodMain','render');
        $this->emit('alert','Registro creado satisfactoriamente');

    }

    public function edit(Period $period){
        $this->period=$period;
        $this->isOpen=true;
    }

    public function delete(Period $category){
        $category->delete();
    }
}
