<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarModel;
use Session;
class BrandController extends Controller
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
        $brand = Brand::get();
        return view('admin.brand.index')->with('brand',$brand);
    }
    public function add()
    {
        return view('admin.brand.add');
    }
     public function brandsave(Request $request)
    {
        
        if($request->slug){
				$count_slug = Brand::where('slug','=',$request->slug)->count();
				if($count_slug > 0){
					return redirect('brand')->with('error','Slug already used either in Products Brands')->withInput($request->input());
				}else{
					$pro_slug = $request->slug;
				}
			}else{
				$pro_slug = '';
			}
        $brands = Brand::insert([
				'name' => $request->name,
				'slug' => $pro_slug,
				'discripition' => $request->description,
				'top' => isset($request->top)?$request->top:'0',
				'seo_title' => $request->seo_title,
				'seo_keywords' => $request->seo_keywords,
				'seo_description' => $request->seo_description,
				'created_at'=> date("Y-m-d H:i:s"),
				'updated_at'=> date("Y-m-d H:i:s")
			]);
		Session::flash('success', 'Brand created successfully !');
		return redirect('brand');
    }
    public function edit($id)
    {
         $brand = Brand::where('id',$id)->first();
        return view('admin.brand.edit')->with('brand',$brand);
    }
    public function update(Request $request)
    {
        
         /*if($request->slug){
				$count_slug = Brand::where('slug','=',$request->slug)->count();
				if($count_slug > 0){
					return redirect('brand')->with('error','Slug already used either in Products Brands')->withInput($request->input());
				}else{
					$pro_slug = $request->slug;
				}
			}else{
				$pro_slug = '';
			}*/
        $brands = Brand::where('id',$request->id)->update([
				'name' => $request->name,
				'slug' => $request->slug,
				'discripition' => $request->description,
				'top' => isset($request->top)?$request->top:'0',
				'seo_title' => $request->seo_title,
				'seo_keywords' => $request->seo_keywords,
				'seo_description' => $request->seo_description,
				'updated_at'=> date("Y-m-d H:i:s")
			]);
			
			Session::flash('success', 'Brand Updated successfully !');
		return redirect('brand');
    }
    public function delete($id)
    {
        $brand = Brand::where("id",$id)->first();
       Brand::where("id",$id)->delete();
       carModel::where("brand",$brand->name)->delete();
			Session::flash('success', 'Brand and related model deleted successfully !');
		return redirect('brand');
    }
}