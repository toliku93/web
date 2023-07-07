<?php

namespace App\Http\Livewire;

use App\Models\People;
use Livewire\Component;


class CreatePeople extends Component
{

    public $open = false;
    public $name;

    protected $rules = [
        'name' => ['required' , 'max:20'],
    ];

/////////validacion tiempo real
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function save(){

        $this->validate ();

        People::create([
            'name' => $this->name,
        ]);

        $this->reset (['open', 'name']);

//nomas para que escuche 1 componente no todos
//        $this->emitTo ('show-posts','render');
        $this->emit ('render');
        $this->emit ('Success');

    }

    public function close()
    {
        $this->reset (['open', 'name']);
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updatingopen()
    {
        if ($this->open === false) {
            $this->reset(['name']);
        }
    }


    public function render()
    {
        return view('catalogos.score.create-people');
    }
}

