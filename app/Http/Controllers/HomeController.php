<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            return view('admin.home'); // Redirige a la página del panel de control si el usuario está autenticado.
        }

        // Opcionalmente, puedes mostrar un mensaje de error o redirigir a otra página si el usuario no está autenticado.
        return redirect('/login');
    }
}
