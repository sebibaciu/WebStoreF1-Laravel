<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Product::validate($request);
    //validarea e mutata in models
    //   $request->validate([
    //       "name" => "required|max:255",
    //       "description" => "required",
    //"price" => "required|numeric|gt:0",
    //      'image' => 'image',
    //    ]);

        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage("game.png");
        $newProduct->save();

        if ($request->hasFile('image')) {
            $imageName = $newProduct->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

//edit care cauta un produs dupa id si il trimite in view-ul admin.product.edit
    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["product"] = Product::find($id);
        return view('admin.product.edit')->with("viewData", $viewData);
    }

//colectam requestul si id-ul produsului / cautam produsul dupa id si il actualizam
//cu datele din request / setam si imaginea noua, salvam produsul si redirectionam la
//admin.product.index
    public function update(Request $request, $id)
    {
        Product::validate($request);
    //am mutat validarea in models
    //    $request->validate([
    //        "name" => "required|max:255",
    //        "description" => "required",
    //        "price" => "required|numeric|gt:0",
    //        'image' => 'image',
    //    ]);
        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));
        if ($request->hasFile('image')) {
            $imageName = $product->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImage($imageName);
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }
}
