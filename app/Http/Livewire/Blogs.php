<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $title,$sub_title,$slug,$is_active = true,$content;

    public function render()
    {

        return view('livewire.blogs',[
            "data" => $this->read(),
            "table_columns" => [
                [
                    'name' => 'Title',
                    'key' => 'title'
                ],[
                    'name' => 'Slug',
                    'key' => 'slug'
                ],[
                    'name' => 'Date',
                    'key' => 'date'
                ],[
                    'name' => 'Active',
                    'key' => 'is_active'
                ]
            ]
        ]);
    }

    public function rules()
    {
        return [
            "title" => 'required|string',
            "sub_title" => 'nullable|string',
            "is_active" => 'required|boolean',
            "slug" => 'required|alpha_dash|unique:blogs,slug,'.$this->modelId,
            "content" => 'required|string'
        ];
    }

    public function mount()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->validate();
        Blog::create(array_merge($this->modelData(),['date' => now()]));
        $this->modalFormVisible = false;
        $this->reset();
        session()->flash('message','Blog successfully created.');
    }

    public function read()
    {
        return Blog::paginate(5);
    }

    public function update()
    {
        $this->validate();
        Blog::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        session()->flash('message','Blog successfully updated.');
    }

    public function delete()
    {
        Blog::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
        session()->flash('message','Blog successfully deleted.');
    }

    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }

    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->reset();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }

    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function loadModel()
    {
        $data = Blog::find($this->modelId);
        $this->title = $data->title;
        $this->sub_title = $data->sub_title;
        $this->is_active = $data->is_active;
        $this->slug = $data->slug;
        $this->content = $data->content;
    }

    public function modelData()
    {
        return [
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'is_active' => $this->is_active,
            'slug' => $this->slug,
            'content' => $this->content
        ];
    }
}
