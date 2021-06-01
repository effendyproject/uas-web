<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination, WithFileUploads;

    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $name,$description,$image,$price,$day_min,$day_max;

    public function render()
    {

        return view('livewire.services',[
            "data" => $this->read(),
            "table_columns" => [
                [
                    'name' => 'Image',
                    'key' => 'image_name'
                ],[
                    'name' => 'Name',
                    'key' => 'name'
                ],[
                    'name' => 'Price',
                    'key' => 'format_price'
                ],[
                    'name' => 'Day',
                    'key' => 'format_day'
                ]
            ]
        ]);
    }

    public function rules()
    {
        return [
            "name" => 'required|unique:services,name,'.$this->modelId,
            "description" => 'nullable',
            "image" => 'required|image|mimes:jpg,jpeg,png|max:5012',
            "price" => 'required|numeric',
            "day_min" => 'required|integer',
            "day_max" => 'required|integer'
        ];
    }

    public function mount()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->validate();
        Service::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();
        session()->flash('message','Service successfully created.');
    }

    public function read()
    {
        return Service::paginate(5);
    }

    public function update()
    {
        $this->validate();
        Service::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        session()->flash('message','Service successfully updated.');
    }

    public function delete()
    {
        Service::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
        session()->flash('message','Service successfully deleted.');
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
        $data = Service::find($this->modelId);
        $this->name = $data->name;
        $this->description = $data->description;
        $this->price = $data->price;
        $this->day_min = $data->day_min;
        $this->day_max = $data->day_max;
        $this->image = asset('storage/'.$data->image_name);
    }

    public function modelData()
    {
        $imageName = $this->image->store('upload/service', 'public');
        return [
            'name' => $this->name,
            'description' => $this->description,
            'image_name' => $imageName,
            'price' => $this->price,
            'day_min' => $this->day_min,
            'day_max' => $this->day_max
        ];
    }
}
