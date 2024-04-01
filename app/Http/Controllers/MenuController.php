<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menu()
    {
        $categories = Menu::pluck('kategori')->unique();
        $menus = Menu::all();
        $sort = 'null';
        return view('menu', compact('menus', 'categories', 'sort'));
    }
    public function searchMenu( Request $request){
        $query = $request->input('query');
        $categories = Menu::pluck('kategori')->unique();
        $menus = Menu::where('nama', 'like', "%$query%")->get();
        $sort = 'null';
        return view('menu', compact('menus', 'categories', 'sort'));
    }
    public function searchMenuByCategory($kategori,Request $request){
        $query = $request->input('query');
        $categorynow = $kategori;
        $categories = Menu::pluck('kategori')->unique();
        $menus = Menu::where('kategori', $kategori)->where('nama', 'like', "%$query%")->paginate(4);
        $sort = 'null';
        return view('showmenubycategory', compact('menus', 'categories', 'categorynow', 'sort'));
    }
    public function sortmenu($option)
    {
        $categories = Menu::pluck('kategori')->unique();
        $sort = $option;
        switch ($option) {
            case 'termurah':
                $menus = Menu::orderBy('harga')->get();
                break;
            case 'termahal':
                $menus = Menu::orderByDesc('harga')->get();
                break;
        }
        return view('menu', compact('menus', 'categories', 'sort'));
    }

    public function showMenuByCategory($kategori)
    {
        $categories = Menu::pluck('kategori')->unique();
        $menus = Menu::where('kategori', $kategori)->paginate(4);
        $categorynow = $kategori;
        $sort = "null";
        return view('showmenubycategory', compact('menus', 'categories', 'categorynow', 'sort'));
    }
    public function sortShowMenuByCategory($kategori, $option)
    {
        $categories = Menu::pluck('kategori')->unique();
        $categorynow = strtolower($kategori); // Ubah ke huruf kecil
        $sort = $option;
        switch ($option) {
            case 'termurah':
                $menus = Menu::where('kategori', $kategori)->orderBy('harga')->paginate(4);
                break;
            case 'termahal':
                $menus = Menu::where('kategori', $kategori)->orderByDesc('harga')->paginate(4);
                break;
        }

        return view('showmenubycategory', compact('menus', 'categories', 'categorynow', 'sort'));
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
    public function store(StoreMenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}