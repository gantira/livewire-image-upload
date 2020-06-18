<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Image;

class ImageForm extends Component
{
    use WithFileUploads;

    public $title;
    public $image;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',
        ]);

        $imageName = $this->image->store("images", 'public');

        $validatedData['name'] = $imageName;

        Image::create($validatedData);

        session()->flash('message', 'Image successfully Uploaded.');

        return redirect()->to('/image');
    }

    public function render()
    {
        return view('livewire.image-form');
    }
}
