<?php

namespace App\Http\Controllers\Categories; // Namespace should match the folder structure

use App\Http\Controllers\Controller;
use App\Models\Categories\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all(); // Suponiendo que tienes un modelo User que representa la tabla de usuarios.

        return view('admin.categories.index', compact('categories'));
    }

    public function category_store(Request $request)
    {

        // Validar el campo 'Category' antes de asignarlo a '$Category->name'
        $validator = Validator::make($request->all(), [
            'Category' => 'required|string|max:255', // Puedes personalizar las reglas de validación aquí
        ]);

        // Comprobar si la validación ha fallado
        if ($validator->fails()) {
            session()->flash('error', 'No se pudo crear, abre el modal para ver tus errores.');

            return redirect()->route('categories_index')->withErrors($validator)->withInput();
        }

        // Si la validación es exitosa, asigna el valor a '$Category->name'
        $Category = new Categories();
        $Category->name = $request->input('Category');

        // Ahora puedes continuar con la lógica de guardar la categoría

        // Si la categoría se guarda exitosamente
        if ($Category->save()) {
            session()->flash('success', 'Registro Creado satisfactoriamente');
        } else {
            session()->flash('error', 'No se pudo crear');
        }

        // Redirigir de nuevo a la vista
        return redirect()->route('categories_index');
    }


}
