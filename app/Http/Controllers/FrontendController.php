<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\product;
use App\Models\categorie;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;


class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index',[
            'product'=>product::latest()->get(),
            'products'=>product::all(),
            'categorie' => categorie::all(),
        ]);
    }

    public function product_deatiles($id)
    {
        $product=product::findOrFail($id);
        $products=product::where('product_categorie',$product->product_categorie)->where('id','!=',$id)->get();
        return view('frontend.product_deatiles',compact('product','products'));
    }
    public function about_us()
    {
        return view('frontend.about_us');
    }
    public function accounts()
    {
        return view('frontend.accounts');
    }
    public function coustomer_reg(Request $request)
    {
        // $validate = Validator::make(Input::all(), [
        //     'g-recaptcha-response' => 'required|captcha'
        // ]);
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'coustomer',
            'created_at' => Carbon::now(),
        ]);
        return back()->with('reg_success', 'Your Registation  Successfully Done');
    }
    public function coustomer_login(Request $request)
    {
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {

            return redirect(route('coustomer'));
        }

    }
    //github start
    public function github_redirect(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }
    public function github_callback(Request $request)
    {
        $githubUser = Socialite::driver('github')->user();
        // return  dd($githubUser);

        $user=User::updateOrCreate([
        'email' => $githubUser->email,
        ],

        [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password'=>bcrypt(123456789),
            'role' => 'coustomer',
            'created_at' => Carbon::now(),

        ]);

       Auth::login($user);

      return redirect(route('coustomer'));

    }
    //github stop
}
