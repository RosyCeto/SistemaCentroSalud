<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctors.index'); // Asegúrate de que apunte a la vista correcta
    }
}