<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'nome' => 'Matheus',
            'idade' => 28,
            'profissao' => 'Programador',
            'arr' => [1,2,3,4,5],
            'names' => ['Mathues', 'Maria', 'João', 'Saulo', 'Lucas']
        ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
