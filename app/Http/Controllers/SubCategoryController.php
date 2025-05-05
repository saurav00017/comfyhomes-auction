<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use DataTables;
use App\Service;
use Hash;

class SubCategoryController extends Controller
{

    public function all()
    {
        return view('admin.subcategory.all');
    }

    public function allData(Request $request)
    {
        $subCategory=SubCategory::with('category')->get();

        return DataTables::of($subCategory)->make(true);
    }
    public function getAddSubCategory(Request $request)
    {
        $category=Category::where('is_active',1)->get();

        return view('admin.subcategory.add')->with('category',$category);
    }

    public function postAddSubCategory(Request $request)
    {
        $input=$request->all();

        $subcategory=new SubCategory();
        $subcategory->category=$input['category'];
        $subcategory->subcategory=$input['subcategory'];
        $subcategory->save();

        $notification = array(
                'message' => 'Subcategory Form Submitted successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/sub-category-management')->with($notification);

    }

    public function getEditSubCategory(Request $request)
    {
        $id=$request->id;
        $subcategory=SubCategory::where('id',$id)->first();
        $category=Category::where('is_active',1)->get();

        return view('admin.subcategory.edit')->with('subcategory', $subcategory)->with('category',$category);
    }

    public function postEditSubCategory(Request $request)
    {

        $input=$request->all();

        $subcategory=SubCategory::where('id',$id)->first();
        $subcategory->category=$input['category'];
        $subcategory->subcategory=$input['subcategory'];
        $subcategory->save();

        $notification = array(
                'message' => 'Subcategory Form Updated successfully', 
                'alert-type' => 'success'
             );

        return redirect('admin/sub-category-management')->with($notification);

    }

    public function activeSubCategory(Request $request)
    {
        $id=$request->id;
        
        $subcategory=SubCategory::where('id',$id)->first();
        $subcategory->is_active=1;
        $subcategory->save();

         $notification = array(
                'message' => 'Sub Category Active successfully', 
                'alert-type' => 'success'
             );

      return redirect('admin/sub-category-management')->with($notification);

    }

    public function inactiveSubCategory(Request $request)
    {
        $id=$request->id;
        
        $subcategory=SubCategory::where('id',$id)->first();
        $subcategory->is_active=0;
        $subcategory->save();

         $notification = array(
                'message' => 'Sub Category InActive successfully', 
                'alert-type' => 'success'
             );

      return redirect('admin/sub-category-management')->with($notification);

    }

    public function delete(Request $request)
    {
        $id=$request->id;

        $subcategory=SubCategory::where('id',$id)->delete();

         $notification = array(
                'message' => 'Sub Category Delete successfully', 
                'alert-type' => 'success'
             );

      return redirect('admin/sub-category-management')->with($notification);



    }


}
