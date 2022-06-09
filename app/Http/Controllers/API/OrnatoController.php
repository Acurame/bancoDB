<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ornato;
use Illuminate\Http\Request;
class OrnatoController extends Controller
{
    public function index()
    {
        return Ornato::all();
    }
 
    public function show($id)
    {
        return Ornato::find($id);
    }

    public function store(Request $request)
    {
        return Ornato::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Ornato::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Ornato::findOrFail($id);
        $article->delete();

        return 204;
    }
}
