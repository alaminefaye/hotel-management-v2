<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Room;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class RoomManagement extends Component
{
    use WithFileUploads, WithPagination;

    public $name;
    public $number;
    public $image;
    public $price_per_night;
    public $size_feet;
    public $max_capacity;
    public $bed_type;
    public $services;
    public $description;
    public $status = 'available';
    public $isEditing = false;
    public $editingRoomId;

    protected $rules = [
        'name' => 'required|min:3',
        'number' => 'required|unique:rooms,number',
        'price_per_night' => 'required|numeric|min:0',
        'size_feet' => 'required|integer|min:1',
        'max_capacity' => 'required|integer|min:1',
        'bed_type' => 'required',
        'services' => 'required',
        'description' => 'nullable',
        'status' => 'required|in:available,occupied,maintenance',
    ];

    public function render()
    {
        return view('livewire.room-management', [
            'rooms' => Room::paginate(10)
        ]);
    }

    public function save()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'number' => $this->number,
            'price_per_night' => $this->price_per_night,
            'size_feet' => $this->size_feet,
            'max_capacity' => $this->max_capacity,
            'bed_type' => $this->bed_type,
            'services' => $this->services,
            'description' => $this->description,
            'status' => $this->status,
        ];

        if ($this->image) {
            $data['image_path'] = $this->image->store('rooms', 'public');
        }

        if ($this->isEditing) {
            $room = Room::find($this->editingRoomId);
            $room->update($data);
            $this->isEditing = false;
        } else {
            Room::create($data);
        }

        $this->reset();
        session()->flash('message', 'Room saved successfully.');
    }

    public function edit(Room $room)
    {
        $this->isEditing = true;
        $this->editingRoomId = $room->id;
        $this->name = $room->name;
        $this->number = $room->number;
        $this->price_per_night = $room->price_per_night;
        $this->size_feet = $room->size_feet;
        $this->max_capacity = $room->max_capacity;
        $this->bed_type = $room->bed_type;
        $this->services = $room->services;
        $this->description = $room->description;
        $this->status = $room->status;
    }

    public function delete(Room $room)
    {
        $room->delete();
        session()->flash('message', 'Room deleted successfully.');
    }

    public function cancel()
    {
        $this->reset();
        $this->isEditing = false;
    }
}
