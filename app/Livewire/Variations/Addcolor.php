<?php

namespace App\Livewire\Variations;

use App\Models\Color;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Addcolor extends Component
{
    public $color_name;
    public $color_code;
    function color_insert()
    {
        Color::insert([
            'color_name' => $this->color_name,
            'color_code' => $this->color_code,
            'created_at' => Carbon::now(),

        ]);
        $this->reset();

        session()->flash('success', 'Color successfully Adding.');
    }
    public function render()
    {
        $colors=Color::all();
        return view('livewire.variations.addcolor',['colors'=>$colors]);
    }
    public function delete_color($id)
    {
Color::find($id)->delete();
session()->flash('delete', 'Color successfully Delete.');

    }

}
