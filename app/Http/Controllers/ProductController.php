<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function addProduct(Request $request)
    {
        $new_product = new Product;
        $new_product->name = $request->input('name');
        $new_product->description = $request->input('description');
        $new_product->price = $request->input('price');
        $new_product->file_path = $request->file('file')->store('products');

        $new_product->save();

        return $new_product;
    }

    function getProducts()
    {
        return Product::all();
    }

    function delete($id)
    {
        $result = Product::find($id);
        if ($result) {
            $result->delete();
            return ['result' => 'Product deleted successfully'];
        } else {
            return ['result' => 'Product not found'];
        }
    }

    function getSingleProduct($id){
        $product = Product::find($id);
        if ($product) {
            return $product;
        } else {
            return ['error' => 'Product not found'];
        }
    }

    function updateProduct(Request $request, $id){
        $product = Product::find($id);
        if ($product){
            if($request->has('name')) {
                $product->name = $request->input('name');
            }
            if($request->has('description')) {
                $product->description = $request->input('description'); 
            }
            if($request->has('price')) {
                $product->price = $request->input('price');
            }
            if($request->hasFile('file')) {
                $product->file_path = $request->file('file')->store('products');
            }
            $product->save();
            return  $product;
        }
        else {
            return ['error' => 'Product not found'];
        }
    }

    function searchProduct($key){
        return Product::where('name', 'like', '%' . $key . '%')
                      ->orWhere('description', 'like', '%' . $key . '%')
                      ->get();
    }
}
