<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'=>'string',
            'descripcion'=>'text',
            'precio'=>'numeric',
            'stock'=>'numeric',
            'categoria_id'=>'required'
        ]);

        Producto::create($datos);
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->validate([
            'nombre'=>'string',
            'descripcion'=>'text',
            'precio'=>'numeric',
            'stock'=>'numeric',
            'categoria_id'=>'required'
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($datos);
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
