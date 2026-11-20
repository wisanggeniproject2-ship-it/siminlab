<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller

{
        // Variabel untuk data umum
 protected $title = 'Category';
 protected $menu = 'category';
 protected $directory = 'admin.category'; // Diubah ke folder view category

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Menyiapkan array untuk dikirim ke view
 $data['title'] = $this->title;
 $data['menu'] = $this->menu;
 // Mengambil data dari database
 $data['categories'] = Category::latest()->get();
 // Me-return view beserta data
 return view($this->directory . '.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
