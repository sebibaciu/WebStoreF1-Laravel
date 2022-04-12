<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //produse dummy pentru baza de date
    //    public static $products = [
    //        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "image" => "game.png", "price"=>"1000"],
    //        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "image" => "safe.png", "price"=>"999"],
    //        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "image" => "submarine.png", "price"=>"30"],
    //       ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "image" => "game.png", "price"=>"100"]
    //   ];

    //ia arrayul si il trimite la product.index pentru display
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "Products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    //ia un id ca un parametru, luam produsul si trimitem datele la product.show
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] =  $product->getName()." - Details";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
