<?php

namespace App\Http\Livewire;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Testimonials extends Component
{
    use WithPagination, WithFileUploads;

    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $name,$image,$position,$text;

    public function renderData()
    {
        return view('home', [
            "data" => $this->read()
        ]);
    }

    public function render()
    {
        return view('livewire.testimonials',[
            "data" => $this->read(),
            "table_columns" => [
                [
                    'name' => 'Image',
                    'key' => 'image_name'
                ],[
                    'name' => 'Name',
                    'key' => 'name'
                ],[
                    'name' => 'Position',
                    'key' => 'position'
                ],[
                    'name' => 'Testimonials',
                    'key' => 'text'
                ]
            ]
        ]);
    }

    public function rules()
    {
        return [
            "name" => 'required|string',
            "text" => 'required|string',
            "image" => 'required|image|mimes:jpg,jpeg,png|max:5012',
            "position" => 'required|string',
        ];
    }

    public function mount()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->validate();
        Testimonial::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();
        session()->flash('message','Testimonial successfully created.');
    }

    public function read()
    {
        return Testimonial::paginate(5);
    }

    public function update()
    {
        $this->validate();
        Testimonial::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        session()->flash('message','Testimonial successfully updated.');
    }

    public function delete()
    {
        Testimonial::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
        session()->flash('message','Testimonial successfully deleted.');
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
        $data = Testimonial::find($this->modelId);
        $this->name = $data->name;
        $this->text = $data->text;
        $this->position = $data->position;
        $this->image = asset('storage/'.$data->image_name);
    }

    public function modelData()
    {
        $imageName = $this->image->store('upload/service', 'public');
        return [
            'name' => $this->name,
            'text' => $this->text,
            'image_name' => $imageName,
            'position' => $this->position,
        ];
    }
}
