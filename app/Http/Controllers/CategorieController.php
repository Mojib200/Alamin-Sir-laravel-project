<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\categorie;
use Carbon\Carbon;
use app\Models\User;
use Intervention\Image\ImageManagerStatic as Image;
use illuminate\Support\Facades\Auth;
use File;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts\deshboard\categorie\index', ['categorie' => categorie::all(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts\deshboard\categorie\create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_name = Auth::user()->id . hexdec(uniqid()). "." . $request->file('categorie_photo')->getClientOriginalExtension();
        $img = Image::make($request->file('categorie_photo'))->resize(300, 300);
        $img->save(base_path('public/uploads/categorie_photo/' . $new_name), 80);

        $slug = Str::slug($request->categorie_slug);
        //return $request;
        categorie::insert([

            'categorie_name' => $request->categorie_name,
            'categorie_slug' => $slug,
            'categorie_photo' => $new_name,
            'created_at' => Carbon::now(),
        ]);
        //return back()->with('categorie_success', 'Your Categorie Data Upload Done Successfully');
        return redirect('categorie');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categorie= categorie::find($id);
        return view('layouts\deshboard\categorie\show',compact('categorie'));
    }


    // or
    //public function show(categorie $categorie)
    // {
    //     return view('layouts\deshboard\categorie\show',compact('categorie'));
    // }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorie= categorie::find($id);
        return view('layouts\deshboard\categorie\edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        categorie::find($id)->update([
                'categorie_name' => $request->categorie_name,
                'categorie_slug' => $request->categorie_slug,
               // 'categorie_photo' => new_name,

            ]);
            if($request->hasFile('categorie_photo'))
            {
                unlink(base_path('public/uploads/categorie_photo/'.categorie::find($id)->categorie_photo));
                $new_name = Auth::user()->id . Carbon::now()->format('Y-m-d'). "." . $request->file('categorie_photo')->getClientOriginalExtension();
                $img = Image::make($request->file('categorie_photo'))->resize(300, 300);
                $img->save(base_path('public/uploads/categorie_photo/' . $new_name), 80);
                categorie::find($id)->update([
                    'categorie_photo' => $new_name,
                ]);


            }
            return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categorie $categorie)
    {
        $categorie->delete();


    //     $image_name  = Auth::user()->id . Carbon::now()->format('Y-m-d'). "." . $categorie->file('categorie_photo');
    //   $image_path = public_path('public/uploads/categorie_photo/'.$image_name);
    //     if(file::exists($image_path)) {
    //         file::delete($image_path);
    //       }

        return back();
    }
}
