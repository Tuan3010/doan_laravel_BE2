<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function createCategory(Request $request)
    {
        //return view('admin/product/index');
        //dd('1234');
        $validates = $request->validate([
            'name_category' => 'required|unique:categories',
            'type' => 'required|numeric'        
        ]);
        //$categories = new Categories();
        Categories::create([
            'name_category' => $validates['name_category'],
            'type' => $validates['type'],
        ]
        );
        // $categories->name_category = $request->input('name_category');
        // $categories->type = $request->input('type');
        //$categories->save();
        return redirect(route('createCategory'))->withSuccess('Thêm thành công!');
        // return redirect()->intended(route('admin.createCategory'))
        //         ->withSuccess('Thêm thành công thành công!!');
    }
    public function getAll()
    {   
            $categories = Categories::all();
           // return View::make('admin/category/listCategory')->with('categories', $categories);
            return view('admin/category/listCategory')->with('categories', $categories);
            
        //return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function deleteCategory($id){
        //dd('123');
        Categories::destroy($id);
        return redirect(route('listCategory'))->withSuccess("Xóa thành công!");
    }
    public function viewUppdateCategory($id){
        $category = Categories::find($id);
        //dd($category);
        return view('admin/category/uppdateCategory')->with('category',$category);
        //return View::make("admin/category/listCategory")->with('categories', $categories);
    }
    //sua
    public function uppdateCategory(Request $request , $id){
        // $user = User::find($id);
        // $input = $request->all();
        // $user->update($input);
        //dd('123');
        $request->validate([
            'name_category' => 'required|unique:categories',
            'type' => 'required|numeric'        
        ]);
        $category = Categories::find($id);
        //dd($category);
        $category->update($request->all());
        return redirect(route('listCategory'))->withSuccess('Sửa đổi thành công');
        //return View::make("admin/category/listCategory")->with('categories', $categories);
    }
    public function demo(){
        return view('product/index');
    }

}
