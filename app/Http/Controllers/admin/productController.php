<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Categories_Products;
use App\Models\Color;
use App\Models\Colors_Products;
use App\Models\Image;
use App\Models\Size;
use App\Models\Sizes_Products;
use Illuminate\Support\Facades\File;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

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
            $products = Product::all();
           // return View::make('admin/category/listCategory')->with('categories', $categories);
           //dd($products[0]->id_product);
            return view('admin/product/listProduct')->with('products', $products);
            
        //return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function getAllData()
    {   
            $categories = Categories::all();
            $sizes = Size::all();
            $colors = Color::all();
            $data = array('categories'=>$categories, 'sizes'=>$sizes, 'colors'=>$colors);
           // return View::make('admin/category/listCategory')->with('categories', $categories);
           //dd($data['categories']);
            return view('admin/product/createProduct')->with('data', $data);
            
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
            'id_category' => 'required',
            'id_color' => 'required',
            'id_size' => 'required'

        ]);
        //thêm vào bảng category_product
        $categories_products = new Categories_Products();
        foreach($request['id_category'] as $id_category){
            //dd($category);
            $categories_products::create([
                'id_category' => $id_category,
                'id_product' => $validates['id_product']
            ]);
        }
        //thêm vào bảng size_product
        $sizes_products = new Sizes_Products();
        foreach($request['id_size'] as $id_size){
            //dd($id_size);
            $sizes_products::create([
                'id_size' => $id_size,
                'id_product' => $validates['id_product']
            ]);
        }
        //thêm vào bảng products
        $colors_products = new Colors_Products();
        foreach($request['id_color'] as $id_color){
            $colors_products::create([
                'id_color' => $id_color,
                'id_product' => $validates['id_product']
            ]);
        }
        
        //thêm vào bảng color
        //dd($request['id_category']);
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
      
        $products = new Product();
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
        $product = Product::find($id_product);
        $img = Image::where('name_img', $product->img_product)->first();
        //dd($img);
        $img->delete();
        Product::destroy($id_product);
        return redirect(route('list-product'))->withSuccess("Xóa thành công!");
    }
    public function viewUpdateProduct($id_product){
        $product = Product::find($id_product);
        $categories = Categories::all();
        $colors = Color::all();
        $sizes = Size::all();
        //$arrayData = ['product', 'category'];
        $data = array('product'=> $product,
                     'categories'=> $categories,
                     'colors' => $colors,
                     'sizes'=> $sizes);

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
        
        $product = Product::find($id);
        $img_path = public_path('uploads/') . $product->img_product;
        if(File::exists($img_path)){
            File::delete($img_path);
        }
        $sizeproduct = new Sizes_Products();
        $sizeproduct->where('id_product',$id)->delete();
        
        $colorproduct = new Colors_Products();
        $colorproduct->where('id_product',$id)->delete();

        $categoriesproduct = new Categories_Products();
        $categoriesproduct->where('id_product',$id)->delete();

        $categories_products = new Categories_Products();
        foreach($request['id_category'] as $id_category){
            //dd($category);
            $categories_products::create([
                'id_category' => $id_category,
                'id_product' => $request['id_product']
            ]);
        }
        //thêm vào bảng size_product
        // $sizes_products = new Sizes_Products();
        // foreach($request['id_size'] as $id_size){
        //     //dd($id_size);
        //     $sizes_products::create([
        //         'id_size' => $id_size,
        //         'id_product' => $request['id_product']
        //     ]);
        // }
        // //thêm vào bảng products
        // $colors_products = new Colors_Products();
        // foreach($request['id_color'] as $id_color){
        //     $colors_products::create([
        //         'id_color' => $id_color,
        //         'id_product' => $request['id_product']
        //     ]);
        // }
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
