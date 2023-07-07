<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class IndexCategory extends Component
{
    use WithPagination;

    public $search, $category;

    public $sort = 'id';

    public $open_editar = false;

    protected $rules = [
        'categories.name' => 'required',

    ];
    public $direction = 'desc';
    public $cantidad = 10;
    public $readyToLoad = false;

    protected $listeners = ['render', 'borrar'];


    protected $queryString = [
        'cantidad', 'search'
    ];

    public function updatingSearch()
    {
        $this -> resetPage();

    }

    public function render()
    {

        if ($this -> readyToLoad)
        {

            $categories = Category ::where('name', 'like', '%' . $this -> search . '%')
                -> orderBy($this -> sort, $this -> direction)
                -> paginate($this -> cantidad);

        } else
        {
            $categories = [];

        }

        return view('livewire.index-category', compact('categories'));
    }

    public function loadCategory()
    {
        $this -> readyToLoad = true;
    }

    public function order($sort)
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

    public function borrar(Category $category)
    {
        $category -> delete();
    }
}
