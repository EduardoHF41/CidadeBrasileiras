<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = $this->lerCidades();
        return view('cidades.index', compact('cidades'));
    }

    public function show($id)
    {
        $cidade = collect($this->lerCidades())->firstWhere('id', $id);
        return view('cidades.show', compact('cidade'));
    }

    private function lerCidades()
    {
        $file = storage_path('app/cidades.json');
        if (file_exists($file)) {
            $json = file_get_contents($file);
            return json_decode($json, true);
        }

        return [];
    }
}
