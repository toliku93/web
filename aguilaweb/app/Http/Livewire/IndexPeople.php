<?php

namespace App\Http\Livewire;

use App\Models\People;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPeople extends Component

{
    use WithPagination;

    public $search, $people;

    public $sort = 'id';

    public $open_editar = false;

    protected $rules = [
        'people.name' => 'required',

    ];
    public $direction = 'desc';
    public $cantidad = 10;
    public $readyToLoad = false;

    protected $listeners = ['render'];


    protected $queryString = [
        'cantidad', 'search'
    ];

    public function updatingSearch (){
        $this -> resetPage ();

    }

    public function render(){

        if ($this->readyToLoad){

            $peoples = People::where ( 'name', 'like', '%' . $this -> search . '%' )
                ->orwhere('created_at', 'like', '%' . $this->search . '%')
                -> orderBy ( $this -> sort, $this -> direction )
                -> paginate ( $this->cantidad );

        }else{
            $peoples = [];

        }

        return view('livewire.index-people', compact ( 'peoples' ) );
    }

    public function loadPeople(){
        $this->readyToLoad = true;
    }

    public function order ( $sort )
    {
        if ($this -> sort == $sort)
        {

            if ($this -> direction === 'desc')
            {
                $this -> direction = 'asc';
            } else
            {
                $this -> direction = 'desc';
            }
        } else
        {
            $this -> sort = $sort;
            $this -> direction = 'asc';
        }

    }

}
