<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [
            'title' => 'About us - Online Store',
            'subtitle' => 'About us',
            'description' => 'This is an about page ...',
            'author' => 'Developed by: Emanuel',
        ];

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [
            'title' => 'Contact us - Online Store',
            'subtitle' => 'Contact us',
            'email' => 'online@store.com',
            'address' => '123 Main St',
            'phone' => '123-456-7890',
        ];

        return view('home.contact')->with('viewData', $viewData);
    }
}
