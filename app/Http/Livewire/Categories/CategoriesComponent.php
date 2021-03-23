<?php
namespace App\Http\Livewire\Categories;


use Livewire\Component;
use App\Models\Category;

class CategoriesComponent extends Component
{
    public $categories, $category, $name, $description;

    public $isOpen = false;

    public function render()
    {
        $this->categories = Category::all();

        return view('livewire.categories.categories-component');
    }

    public function create()
    {
        $this->resetInputFields();

        $this->openModal();
    }
    
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->decription = '';
        $this->category_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => ['required', 'max:100'],
            'description' => ['nullable', 'max:255'],
        ]);

        Category::Create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        session()->flash('flash.banner', $this->category_id ? 'Category Updated Successfully.' : 'Category created Successfully.');

        session()->flash('flash.bannerStyle', 'success');

        $this->closeModal();

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        $this->category_id = $id;

        $this->name = $category->name;

        $this->description = $category->description;

        $this->openModal();

    }

    public function delete($id)
    {
        category::find($id)->delete();
        session()->flash('message', 'category Deleted Successfully.');
    }
}
