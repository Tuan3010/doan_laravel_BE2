<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class colorController extends Controller
{
    //
    public function getAll(){
        $colors = Color::all();
        return view('admin/color/listColor')->with('colors', $colors);
    }
    public function createColor(Request $request){
        $request->validate([
            'name_color' => 'required|unique:colors',
        ]);
        $colors = new Color();
        $colors::create([
            'name_color' => $request['name_color'],
        ]);
        return redirect(route('create-color'))->withSuccess('Thêm thành công!');
    }
    public function deleteColor($id_color){
        Color::destroy($id_color);
        return redirect(route('list-color'))->withSuccess('Xóa thành công!');
    }
    public function viewUpdateColor($id){
        $color = Color::find($id);
        return view('admin/color/editColor')->with('color', $color);
    }
    public function updateColor(Request $request, $id){
        $request->validate([
            'name_color' => 'required|unique:colors',
        ]);
        $color = Color::find($id);
        $color->update([
            'name_color' => $request['name_color'],
        ]);
        //return view('admin/color/editColor')->with('color', $color);
        return redirect(route('list-color'))->withSuccess('Cập nhật thành công!');
    }
    
}
