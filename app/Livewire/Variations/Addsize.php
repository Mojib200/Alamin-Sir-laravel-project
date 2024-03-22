<?php

namespace App\Livewire\Variations;

use App\Models\Size;
use Carbon\Carbon;
use Livewire\Component;

class Addsize extends Component
{
   public $size;

    public function size_insert()
    {
        Size::insert([
            'size'=>$this->size,
          'user_id'=>auth()->id(),
            'created_at' => Carbon::now(),
           ]);
           $this->reset();

           session()->flash('success', 'Size successfully Adding.');

    }
    public function render()
    {
        $sizes = Size::where('user_id',auth()->id())->latest()->get();
        return view('livewire.variations.addsize',compact('sizes'));
    }
    public function delete_size($id)
    {
Size::find($id)->delete();
session()->flash('delete', 'Size successfully Delete.');

    }



}
