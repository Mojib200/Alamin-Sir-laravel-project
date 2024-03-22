<?php

namespace App\Http\Controllers;
use App\Models\categorie;
use App\Models\product;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;
use app\Models\User;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts\deshboard\product\index',[ 'product' => product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts\deshboard\product\create',[
            'categorie' => categorie::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $new_name = Auth::user()->id . hexdec(uniqid()). "." . $request->file('thumbnail')->getClientOriginalExtension();
        $img = Image::make($request->file('thumbnail'))->resize(300, 300);
        $img->save(base_path('public/uploads/product/' . $new_name), 80);

        //product::create($request->except('_token'));
       // or
      product::insert([

        'name' => $request->name,
        'product_categorie' => $request->product_categorie,
        'purchase_price' => $request->purchase_price,
        'regular_price' => $request->regular_price,
        'discount_price' => $request->discount_price,
        'description' => $request->description,
        'long_description' => $request->long_description,
        'additonal_information' => $request->additonal_information,
        'thumbnail' => $new_name,

        'created_at' => Carbon::now(),
    ]);
    return redirect('product');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product= product::find($id);
        return view('layouts\deshboard\product\show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product= product::find($id);
        return view('layouts\deshboard\product\edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {  product::find($id)->update([
                'name' => $request->name,
                'product_categorie' => $request->product_categorie,
                'purchase_price' => $request->purchase_price,
                'regular_price' => $request->regular_price,
                'discount_price' => $request->discount_price,
                'description' => $request->description,
                'long_description' => $request->long_description,
                'additonal_information' => $request->additonal_information,
 ]);
            if($request->hasFile('thumbnail'))
            {
                unlink(base_path('public/uploads/product/'.product::find($id)->thumbnail));
                $new_name = Auth::user()->id .  hexdec(uniqid()).".".$request->file('thumbnail')->getClientOriginalExtension();
                $img = Image::make($request->file('thumbnail'))->resize(300, 300);
                $img->save(base_path('public/uploads/product/' . $new_name), 80);
                product::find($id)->update([
                    'thumbnail' => $new_name,
                ]);
            }
            return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();

        return back();

    }
}
