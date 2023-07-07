<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
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

        Category::create([
            'name' => $this->name,
        ]);

        $this->reset (['open', 'name']);
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
        return view('livewire.create-category');
    }
}
