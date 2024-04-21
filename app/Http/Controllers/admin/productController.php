<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Categories_Products;
use App\Models\Image;
use Illuminate\Support\Facades\File; 
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/product/index');
    }
    public function getAll()
    {   
            $products = Products::all();
           // return View::make('admin/category/listCategory')->with('categories', $categories);
           //dd($products[0]->id_product);
            return view('admin/product/listProduct')->with('products', $products);
            
        //return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function getAllCategory()
    {   
            $categories = Categories::all();
           // return View::make('admin/category/listCategory')->with('categories', $categories);
            return view('admin/product/createProduct')->with('categories', $categories);
            
        //return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function createProduct(Request $request){
        //dd(1123);
        $validates = $request->validate([
            'id_category' => 'required',
            'id_product' => 'required|numeric|unique:products',
            'name_product' => 'required',
            'price_product' => 'required|numeric',
            'des_product' => 'required',
            'file_upload' => 'required|image',     
        ]);
        //doi ten file nguoi dung
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            // $ten_file = $file->getClientoriginalName();
            
            $ext = $file->extension();
            $ten_file = time() . '-' . 'PosterProduct' . '.' . $ext;
            //dd($ten_file);
            //dd($ext);
            //dd($ten_file);
            $file->move(public_path('uploads'), $ten_file);
            //$request->merge(['img_product' => $ten_file]); 
            //truong cua ten file sau khi ep kieu la image
            //dd($img_product);
        }
        //$categories = new Categories();
        // Products::create([
        //     'name_category' => $validates['name_category'],
        //     'type' => $validates['type'],
        // ]
        // );
        $categories_products = new Categories_Products();
        $categories_products::create([
            'id_category' => $validates['id_category'],
            'id_product' => $validates['id_product']
        ]);
        $products = new Products();
        $products::create([
            'id_product' => $validates['id_product'],
            'name_product' => $validates['name_product'],
            'price_product' => $validates['price_product'],
            'des_product' => $validates['des_product'],
            'img_product' => $ten_file,
        ]);
        //them vào bảng ảnh với tên ảnh là ...POSTER
        $images = new Image();
        $images::create([
            'name_img' => $ten_file,
            'id_product' => $validates['id_product'],
        ]);
        return redirect(route('list-product'))->withSuccess('Thêm thành công!');

    }
    public function deleteProduct($id_product){
        //--xóa
        $product = Products::find($id_product);
        $img = Image::where('name_img', $product->img_product)->first();
        //dd($img);
        $img->delete();
        Products::destroy($id_product);
        return redirect(route('list-product'))->withSuccess("Xóa thành công!");
    }
    public function viewUpdateProduct($id_product){
        $product = Products::find($id_product);
        $categories = Categories::all();
        //$arrayData = ['product', 'category'];
        $data = array('product'=>$product, 'categories'=>$categories);

        //dd($product->des_product);
        return view('admin/product/editProduct')->with('data',$data);
    }
    public function updateProduct(Request $request, $id){
        $request->validate([
            'name_product' => 'required',
            'price_product' => 'required|numeric',
            'des_product' => 'required',
            'file_upload' => 'required|image',     
        ]);
        
        $product = Products::find($id);
        $img_path = public_path('uploads/') . $product->img_product;
        if(File::exists($img_path)){
            File::delete($img_path);
            }
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            // $ten_file = $file->getClientoriginalName();
            
            $ext = $file->extension();
            $ten_file = time() . '-' . 'PosterProduct' . '.' . $ext;
            //dd($ten_file);
            //dd($ext);
            //dd($ten_file);
            $file->move(public_path('uploads'), $ten_file);
            //$request->merge(['img_product' => $ten_file]); 
            //truong cua ten file sau khi ep kieu la image
            //dd($img_product);
        
        }
        //cập nhật lại table img
        //--xóa
        $img = Image::where('name_img', $product->img_product)->first();
        //dd($img);
        $img->delete();
        //--thêm mới
        $images = new Image();
        $images::create([
            'name_img' => $ten_file,
            'id_product' => $product->id_product,
        ]);
       
        $product->update([
            'name_product' => $request['name_product'],
            'price_product' => $request['price_product'],
            'des_product' => $request['des_product'],
            'img_product' => $ten_file,
        ]);
        return redirect(route('list-product'))->withSuccess("Cập nhật thành công!");
    }
 
}
