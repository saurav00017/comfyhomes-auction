<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Blog;
use App\Models\Category;

use Hash;
use Auth;

class BlogController extends Controller
{
    public function getCreateBlog()
    {
        return view('admin.blog.add');
    }

    public function all()
    {
        return view('admin.blog.all');
    }

    public function allData(Request $request)
    {
        $blog=Blog::all();

        return DataTables::of($blog)->make(true);
    }

    public function postCreateBlog(Request $request)
    {
        $input=$request->all();

        $blog=new Blog();
        $blog->title=$input['title'];
        $blog->description=$input['description'];

        if(Input::hasFile('image')){
                  $image = $request->image;
                  $path = $image->store('blog');
                  $blog->image=$path;
                 }  
        $blog->save();

        $notification = array(
                'message' => 'Blog Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/blog-management')->with($notification);

    }

    public function getEditBlog(Request $request)
    {
        $id=$request->id;
        $blog=Blog::where('id',$id)->first();

        return view('admin.blog.edit')->with('blog',$blog);
    }

    public function postEditBlog(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $blog=Blog::where('id',$id)->first();
        $blog->title=$input['title'];
        $blog->description=$input['description'];

        if(Input::hasFile('image')){
                  $image = $request->image;
                  $path = $image->store('blog');
                  $blog->image=$path;
                 }  
        $blog->save();

        $notification = array(
                'message' => 'Blog Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/blog-management')->with($notification);
    }

    public function activeBlog(Request $request)
    {
        $id=$request->id;

        $blog=Blog::where('id',$id)->first();
        $blog->is_active=1;

        $blog->save();

        $notification = array(
                'message' => 'Blog Active successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/blog-management')->with($notification);


    }

     public function inactiveBlog(Request $request)
    {
        $id=$request->id;

        $blog=Blog::where('id',$id)->first();
        $blog->is_active=0;

        $blog->save();

        $notification = array(
                'message' => 'Blog InActive successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/blog-management')->with($notification);


    }

    public function delete(Request $request)
    {
        $id=$request->id;

        $blog=Blog::where('id',$id)->delete();

        $notification = array(
                'message' => 'Blog Delete successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/blog-management')->with($notification);
    }


   
}
