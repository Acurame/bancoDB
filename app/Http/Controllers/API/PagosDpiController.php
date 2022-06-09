<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ornato;
use Illuminate\Http\Request;
use App\Models\PagosDpi;

class PagosDpiController extends Controller
{
    public function index()
    {
        return PagosDpi::all();
    }
 
    public function show($id)
    {
        return PagosDpi::find($id);
    }

    public function store(Request $request)
    {
        return PagosDpi::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = PagosDpi::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = PagosDpi::findOrFail($id);
        $article->delete();

        return 204;
    }
}
