<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::Paginate();
        $products->each(function($products){
            $products->category;
        });
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->lists('name', 'id');
        return view('admin.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        if ($request->file()) {
            $file = $request->file('image');
            $name = 'tiendus_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/products';
            $file->move($path, $name);
        }
        $product = new Product($request->all());
        $product->image = $name;
        $product->save();
        $message = $product ? 'Producto agregado correctamente' : 'El producto NO pudo agregase';
        return redirect()->route('admin.products.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all()->lists('name', 'id');
        return view('admin.products.edit')
            ->with('product', $product)
            ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request = $request->all();
        $product->fill($request)->save();
        $message = $product ? 'Producto actualizado correctamente' : 'El producto NO pudo actualizarse';
        return redirect()->route('admin.products.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        $message = $product ? 'Producto eliminado correctamente' : 'El producto NO pudo eliminarse';
        return redirect()->route('admin.products.index')->with('message', $message);
    }
}
