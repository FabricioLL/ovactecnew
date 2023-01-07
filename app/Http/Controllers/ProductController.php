<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

use  App\Http\Requests\Product\StoreRequest;
use  App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Provider;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.product.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::get();
        return view('admin.product.create', compact('categories'));
    }


    public function store(StoreRequest $request)
    {
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalExtension();
            $file->move(public_path("/image"), $image_name);
        }

        $product = Product::create($request->all()+[
            'image'=>$image_name,
        ]);

        $product->update(['code'=>$product->id]);

        //Product::create($request->all());
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('admin.product.edit', compact('product', 'categories'));
    }



    public function update(UpdateRequest $request, Product $product)
    {
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalExtension();
            $file->move(public_path("/image"), $image_name);
        }

        $product->update($request->all()+[
            'image'=>$image_name,
        ]);

        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function change_status(Product $product)
    {
        if ($product->status == 'ACTIVE') {
            $product->update(['status'=>'DEACTIVATED']);
            return redirect()->back();
        } else {
            $product->update(['status'=>'ACTIVE']);
            return redirect()->back();
        }
    }
}
