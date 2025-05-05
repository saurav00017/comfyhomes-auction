<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Category;
use Hash;
use Auth;


class CategoryController extends Controller
{
    public function all()
    {
        return view('admin.category.all');
    }

    public function allData(Request $request)
    {
        $categoey=Category::all();

        return DataTables::of($categoey)->make(true);
    }

    public function getAddCategory(Request $request)
    {
        return view('admin.category.add');
    }

    public function postAddCategory(Request $request)
    {
        $input=$request->all();

        $category=new Category();
        $category->name=$input['name'];
        $category->save();
        $notification = array(
                'message' => 'Category Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/category-management')->with($notification);
    }

    public function getEditCategory(Request $request)
    {
        $id=$request->id;
        $category=Category::where('id',$id)->first();

        return view('admin.category.edit')->with('category',$category);
    }

    public function postEditCategory(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $category=Category::where('id',$id)->first();
        $category->name=$input['name'];
        $category->save();
        $notification = array(
                'message' => 'Category Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/category-management')->with($notification);

    }

    public function activeCategory(Request $request)
    {
        $id=$request->id;

        $category=Category::where('id',$id)->first();
        $category->is_active=1;
        $category->save();

         $notification = array(
                'message' => 'Category Active successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/category-management')->with($notification);

    }

     public function inactiveCategory(Request $request)
    {
        $id=$request->id;

        $category=Category::where('id',$id)->first();
        $category->is_active=0;
        $category->save();

         $notification = array(
                'message' => 'Category InActive successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/category-management')->with($notification);

    }

    public function delete(Request $request)
    {
        $id=$request->id;

        $category=Category::where('id',$id)->delete();

        $notification = array(
                'message' => 'Category Delete successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/category-management')->with($notification);



    }

}

