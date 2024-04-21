<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class sizeController extends Controller
{
    //
    public function getAll(){
        $size = Size::all();
        return view('admin/size/listSize')->with('sizes', $size);
    }
    public function deleteSize($id){
        Size::destroy($id);
        return redirect(route('list-size'))->withSuccess('Xóa thành công!');
    }
    public function createSize(Request $request){
      
            $request->validate([
                'name_size' => 'required|unique:sizes',
            ]);
            $size = new Size();
            $size::create([
                'name_size' => $request['name_size'],
            ]);
            return redirect(route('list-size'))->withSuccess('Thêm thành công!');
        
    }
    public function viewUpdateSize($id){
        $size = Size::find($id);
        return view('admin/size/editSize')->with('size', $size);
    }
    public function updateSize(Request $request, $id){
        $request->validate([
            'name_size' => 'required|unique:sizes',
        ]);
        $color = Size::find($id);
        $color->update([
            'name_size' => $request['name_size'],
        ]);
        //return view('admin/color/editColor')->with('color', $color);
        return redirect(route('list-size'))->withSuccess('Cập nhật thành công!');
    }
}
