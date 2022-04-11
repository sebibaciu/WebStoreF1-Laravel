<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //defineste variabila total cu  0 si array productsInCart gol
    //verificam daca requestul are produse stocate in sesiune, daca sunt, folosind findMany
    //pe urma invocam Product::sumPricesByQuantities si trimitem totalul si produsele la cart.index
    public function index(Request $request)
    {
        $total = 0;
        $productsInCart = [];

        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $viewData = [];
        $viewData["title"] = "Cart - Online Store";
        $viewData["subtitle"] =  "Shopping Cart";
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('cart.index')->with("viewData", $viewData);
    }

    // metoda add primeste requestul si idul produsului ce urmeaza sa fie introdus in cos
    //includem in variablia product idul si cantitatea apoi actualizam produsuele stocate
    //in sesiune si in final redirectionam userul la cart.index
    public function add(Request $request, $id)
    {
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);

        return redirect()->route('cart.index');
    }

    //metoda delete primeste requestul si sterge produsele stocate in sesiune
    public function delete(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }
}
