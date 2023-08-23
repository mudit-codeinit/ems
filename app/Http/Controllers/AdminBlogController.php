<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Branches;
use App\Models\Blogs;
use App\Models\Blogscat;
use Session;
class AdminBlogController extends Controller
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
        $brand = Blogs::get();
        return view('admin.blog.index')->with('brand',$brand);
    }
    public function add()
    {
         $brandscat = Blogscat::get();
        $brands = Blogs::get();
        return view('admin.blog.add')->with('brand',$brands)->with('cat',$brandscat);
    }
     public function blogsave(Request $request)
    {
       if( $request->hasFile('file') ){
        	$request->file->move( public_path('/uploadedimages'),$request->file('file')->getClientOriginalName());
        	$path = url("uploadedimages/".$request->file('file')->getClientOriginalName());
        }else{
        	$path = '';
        }
        $brands = Blogs::insert([
				'title' => $request->name,
				'slug' => $request->slug,
				'short_description' => $request->short_description,
				'discription' => $request->description,
				'cat' => json_encode($request->cat),
				'image' => $path,
				'seo_title' => $request->seo_title,
				'seo_dis' => $request->seo_description,
				'created_at'=> date("Y-m-d H:i:s"),
				'updated_at'=> date("Y-m-d H:i:s")
			]);
		Session::flash('success', 'Blogs created successfully !');
		return redirect('admin-blog');
    }
    public function edit($id)
    {
        $brandscat = Blogscat::get();
         $brands = Blogs::where('id',$id)->first();
        return view('admin.blog.edit')->with('brand',$brands)->with('cat',$brandscat);
    }
    public function update(Request $request)
    {
        
        if( $request->hasFile('file') ){
        	$request->file->move( public_path('/uploadedimages'),$request->file('file')->getClientOriginalName());
        	$path = url("uploadedimages/".$request->file('file')->getClientOriginalName());
        }else{
        	$path = '';
        }
        $updateArr = [
            'title' => $request->name,
            'slug' => $request->slug,
            'short_description' => $request->short_description,
            'discription' => $request->description,
            'cat' => json_encode($request->cat),
            'seo_title' => $request->seo_title,
            'seo_dis' => $request->seo_description,
            'updated_at'=> date("Y-m-d H:i:s")
        ];
        if($path != ''){
            $updateArr['image'] = $path;
        }
        $brands = Blogs::where('id',$request->id)->update($updateArr);
			Session::flash('success', 'Blog Updated successfully !');
		return redirect('admin-blog');
    }
    public function delete($id)
    {
       Blogs::where("id",$id)->delete();
			Session::flash('success', 'Blog deleted successfully !');
		return redirect('admin-blog');
    }
}