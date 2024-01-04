<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create()
    {
        $brands = Brand::all();
        $models = CarModel::all();
        $features = Feature::all();

        return view('admin.cars.create', compact('brands', 'models', 'features'));
    }

    public function store(Request $request)
    {
        // Lógica para armazenar os dados no banco de dados
        // Certifique-se de validar os dados antes de armazenar

        return redirect()->route('dashboard')->with('success', 'Dados inseridos com sucesso.');
    }
}