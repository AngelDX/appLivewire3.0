<?php

namespace App\Livewire;

use App\Livewire\Forms\PeriodForm;
use App\Models\Period;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class PeriodMain extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    //protected $listeners=['render','delete'=>'delete'];

    public PeriodForm $form;

    public function render(){
        $periods=Period::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);
        return view('livewire.period-main',compact('periods'));
    }

    public function create(){
        $this->isOpen=true;
        //$this->reset();
        $this->form->resetPost();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        //dd($this->form->period);
        if(!isset($this->form->period->id)){
            Period::create($this->form->all());
        }else{
            $period=Period::find($this->form->period->id);
            $period->update($this->form->all());
        }
        //$this->reset(['isOpen','period']);
        $this->reset(['isOpen']);
        //$this->emitTo('PeriodMain','render');
        //$this->dispatch('render')->to('PeriodMain');
        //$this->emit('alert','Registro creado satisfactoriamente');
        $this->dispatch('sweetalert',message:'Registro creado satisfactoriamente');

    }

    public function edit(Period $period){
        //$this->form=$period->toArray();
        $this->form->setPost($period);
        $this->isOpen=true;
    }

    #[On('delItem')]
    public function delete(Period $period){
        $period->delete();
    }
}
