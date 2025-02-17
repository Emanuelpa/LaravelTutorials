<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $viewData = [
            "title" => "Contact us - Online Store",
            "subtitle" => "Contact us",
            "email" => "online@store.com",
            "address" => "123 Main St",
            "phone" => "123-456-7890"
        ];
        return view('home.contact')->with("viewData", $viewData);
    }
}
