<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarModel;
use Session;
class ModelController extends Controller
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
        $brand = CarModel::get();
        return view('admin.model.index')->with('brand',$brand);
    }
    public function add()
    {
        $brands = Brand::get();
        return view('admin.model.add')->with('brand',$brands);
    }
     public function brandsave(Request $request)
    {
        $brands = CarModel::insert([
				'name' => $request->name,
				'brand' => $request->brand,
				'top' => isset($request->top)?$request->top:'0',
				'created_at'=> date("Y-m-d H:i:s"),
				'updated_at'=> date("Y-m-d H:i:s")
			]);
		Session::flash('success', 'Model created successfully !');
		return redirect('model');
    }
    public function edit($id)
    {
         $brands = Brand::get();
         $model = CarModel::where('id',$id)->first();
        return view('admin.model.edit')->with('brand',$brands)->with('model',$model);
    }
    public function update(Request $request)
    {
        $brands = CarModel::where('id',$request->id)->update([
				'name' => $request->name,
				'brand' => $request->brand,
				'top' => isset($request->top)?$request->top:'0',
				'updated_at'=> date("Y-m-d H:i:s")
			]);
			Session::flash('success', 'Model Updated successfully !');
		return redirect('model');
    }
    public function delete($id)
    {
       CarModel::where("id",$id)->delete();
			Session::flash('success', 'Model deleted successfully !');
		return redirect('model');
    }
}