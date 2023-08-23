<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Branches;
use App\Models\Blogscat;
use Session;
class AdminBlogCatController extends Controller
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
        $brand = Blogscat::get();
        return view('admin.blogcat.index')->with('brand',$brand);
    }
    public function add()
    {
        $brands = Blogscat::get();
        return view('admin.blogcat.add')->with('brand',$brands);
    }
     public function blogsave(Request $request)
    {
       if( $request->hasFile('file') ){
        	$request->file->move( public_path('/uploadedimages'),$request->file('file')->getClientOriginalName());
        	$path = url("uploadedimages/".$request->file('file')->getClientOriginalName());
        }else{
        	$path = '';
        }
        $brands = Blogscat::insert([
				'title' => $request->name,
				'slug' => $request->slug,
				'seo_title' => $request->seo_title,
				'seo_dis' => $request->seo_description,
				'created_at'=> date("Y-m-d H:i:s"),
				'updated_at'=> date("Y-m-d H:i:s")
			]);
		Session::flash('success', 'Blogs created successfully !');
		return redirect('admin-blog-cat');
    }
    public function edit($id)
    {
         $brands = Blogscat::where('id',$id)->first();
        return view('admin.blogcat.edit')->with('brand',$brands);
    }
    public function update(Request $request)
    {
        
        if( $request->hasFile('file') ){
        	$request->file->move( public_path('/uploadedimages'),$request->file('file')->getClientOriginalName());
        	$path = url("uploadedimages/".$request->file('file')->getClientOriginalName());
        }else{
        	$path = '';
        }
        $brands = Blogscat::where('id',$request->id)->update([
				'title' => $request->name,
				'slug' => $request->slug,
				'seo_title' => $request->seo_title,
				'seo_dis' => $request->seo_description,
				'updated_at'=> date("Y-m-d H:i:s")
			]);
			Session::flash('success', 'Blog Updated successfully !');
		return redirect('admin-blog-cat');
    }
    public function delete($id)
    {
       Blogscat::where("id",$id)->delete();
			Session::flash('success', 'Blog deleted successfully !');
		return redirect('admin-blog-cat');
    }
}