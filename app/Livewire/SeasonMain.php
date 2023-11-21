<?php

namespace App\Livewire;

use App\Livewire\Forms\SeasonForm;
use App\Models\Season;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use WireUi\Traits\Actions;

class SeasonMain extends Component{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public SeasonForm $form;
    use Actions;

    public function render(){
        $periods=Season::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);
        return view('livewire.season-main',compact('periods'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->season->id)){
            Season::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $season=Season::find($this->form->season->id);
            $season->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Season $season){
        //$this->form=$period->toArray();
        $this->form->setForm($season);
        $this->isOpen=true;
    }

    public function destroy(Season $season){
        $season->delete();
    }
}
