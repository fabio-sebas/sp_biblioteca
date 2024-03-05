<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    // Método para mostrar una lista de libros
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', ['libros' => $libros]);
    }

    // Método para mostrar el formulario de creación de un nuevo libro
    public function create()
    {
        return view('libros.create');
    }

    // Método para almacenar un nuevo libro en la base de datos
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
         
        ]);

        // Crear un nuevo libro en la base de datos
        Libro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            
        ]);

        // Redirigir a la lista de libros
        return redirect()->route('libros.index');
    }

    // Método para mostrar los detalles de un libro específico
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', ['libro' => $libro]);
    }

}
