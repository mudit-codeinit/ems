<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Branches;
use Session;
class BranchController extends Controller
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
        $brand = Branches::get();
        return view('admin.branches.index')->with('brand',$brand);
    }
    public function add()
    {
        $brands = Brand::get();
        return view('admin.branches.add')->with('brand',$brands);
    }
     public function branchsave(Request $request)
    {
        $brands = Branches::insert([
				'name' => $request->name,
				'location' => $request->location,
				'created_at'=> date("Y-m-d H:i:s"),
				'updated_at'=> date("Y-m-d H:i:s")
			]);
		Session::flash('success', 'Branch created successfully !');
		return redirect('branches');
    }
    public function edit($id)
    {
         $brands = Brand::get();
         $model = Branches::where('id',$id)->first();
        return view('admin.branches.edit')->with('brand',$brands)->with('model',$model);
    }
    public function update(Request $request)
    {
        $brands = Branches::where('id',$request->id)->update([
				'name' => $request->name,
				'location' => $request->location,
				'updated_at'=> date("Y-m-d H:i:s")
			]);
			Session::flash('success', 'Branch Updated successfully !');
		return redirect('branches');
    }
    public function delete($id)
    {
       Branches::where("id",$id)->delete();
			Session::flash('success', 'Branch deleted successfully !');
		return redirect('branches');
    }
}