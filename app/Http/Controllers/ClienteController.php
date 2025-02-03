<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function store(ClienteRequest $request){

        //Validaciones
        Cliente::create($request->validated());

         return redirect()->back()->with("success", "Cliente registrado exitosamente");

    }

}
