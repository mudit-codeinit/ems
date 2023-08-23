<?php

namespace App\Http\Controllers;

use App\Models\Brand as AppBrand;
use Auth;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Support\Facades\App;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role==1){
        $brand =  \App\Models\Brand::get();
        return view('admin.brand.index')->with('brand',$brand);
        }
        else{
            //Auth::logout();
         return redirect('/admin-blog');
        }
    }
    public function login()
    {
        return view('auth.login');
    }
    public function error()
    {
        echo "dsfsd";
    }
}
