<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;


class ProductController extends Controller
{
     public function index()
    {
        return view('admin.products.index');
    }
    
    public function create()
    {
        $catigories= Category::all();
        return view('admin.products.create',compact('catigories'));
    }
    public function store(ProductFormRequest $request)
    {
        $validatedData = $request->validated();
    }
}
