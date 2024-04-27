<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class imagesController extends Controller
{
    //
    public function getAll()
    {
        $images = Image::all();
        return view('admin/images/listImages')->with('images', $images);
    }
    public function viewCreateImg()
    {
        $products = Product::all();
        return view('admin/images/createImages')->with('products', $products);
    }
    public function createImg(Request $request)
    {
        $request->validate([
            'file_upload' => 'required|image'
        ]);
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            // $ten_file = $file->getClientoriginalName();

            $ext = $file->extension();
            $ten_file = time() . '-' . 'id-' . $request['id_product'] . '.' . $ext;
            //dd($ten_file);
            //dd($ext);
            //dd($ten_file);
            $file->move(public_path('uploads'), $ten_file);
            //$request->merge(['img_product' => $ten_file]); 
            //truong cua ten file sau khi ep kieu la image
            //dd($img_product);
        }
        Image::create([
            'name_img' => $ten_file,
            'id_product' => $request['id_product'],
        ]);
        return redirect(route('list-images'))->withSuccess('Thêm thành công!');
    }
    //deleteImage
    public function deleteImage($id)
    {
        $image = Image::find($id);
        Image::destroy($id);
        $img_path = public_path('uploads/') . $image->name_img;
        if (File::exists($img_path)) {
            File::delete($img_path);
        }
        return redirect(route('list-images'))->withSuccess('Xóa thành công!');
    }
    public function viewUpdateImage($id)
    {
        $products = Product::all();
        $image = Image::find($id);
        //dd($image);
        $data = array(
            'products' => $products,
            'image' => $image
        );
       
        return view('admin/images/editImage')->with('data', $data);
    }
    public function updateImage(Request $request, $id)
    {
        $request->validate([
            'file_upload' => 'image'
        ]);
        $image = Image::find($id);
        //khi có chọn file
        if ($request->has('file_upload')) {
            //dd('324');
            $img_path = public_path('uploads/') . $image->name_img;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }
            $file = $request->file_upload;
            // $ten_file = $file->getClientoriginalName();
            $ext = $file->extension();
            $ten_file = time() . '-' . 'id-' . $request['id_product'] . '.' . $ext;
            //dd($ten_file);
            //dd($ext);
            //dd($ten_file);
            $file->move(public_path('uploads'), $ten_file);
            //$request->merge(['img_product' => $ten_file]); 
            //truong cua ten file sau khi ep kieu la image
            //dd($img_product);
            $image->update([
                'id_product' => $request['id_product'],
                'name_img' => $ten_file
            ]);
        }
        //khi không chọn file
        else {
            //dd('123');
            $image->update([
                'id_product' => $request['id_product'],
            ]);
        }
        return redirect(route('list-images'))->withSuccess('Cập nhật thành công!');
    }
}
