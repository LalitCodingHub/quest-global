<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Category;
use App\Models\Productimage;
use Illuminate\Http\Request;

class AddproductController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('products.addproducts',compact('categories'));
    }
    public function store(request $request){
        $request->validate([
            'name'=>"required",
            'description'=>'required',
            'category'=>'required',
            'units'=>'required'
        ]);
        $products = new Addproduct([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'units' => $request->units,
            'price' => $request->price

        ]);
        $products->save();
        if($request->hasfile('fileToUpload'))
        {
            foreach($request->file('fileToUpload') as $image)
            {
                $name=$image->getClientOriginalName();
                $target_dir = public_path().'/images/';
                $target_file = $target_dir . basename($name);
                $without_extension = pathinfo($target_file, PATHINFO_FILENAME); //gettig filename without extension
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //carries image extension in lower case
                $i = 1;
                if(file_exists($target_file))
                {
                    $tmp_name =  $without_extension.'-'.$i.'.'.$imageFileType;
                    while(file_exists($target_dir.$tmp_name)){
                        $tmp_name =  $without_extension.'-'.$i.'.'.$imageFileType;
                        $i++;
                    }
                }else{
                    $tmp_name =$name;
                    
                }
                $imagename = $tmp_name;
                $image->move($target_dir,$imagename);
                $data[] = $tmp_name;
            }
            foreach($data as $image)
            {
                $productimage= new Productimage();
                $productimage->product_id = $products->id;
                $productimage->image=$image;
                $productimage->save();
            }
        }
        return back()->with('success', 'Your product has been successfully submitted');
    }
    public function productDetail($id){
        $product_detail = Addproduct::where('id',$id)->with('Productimage','category')->first()->toArray();
        return view('products.showproductdetail',compact('product_detail'));
    }
    
}
