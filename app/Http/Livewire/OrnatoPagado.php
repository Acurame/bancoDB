<?php

namespace App\Http\Livewire;

use App\Models\Ornato;
use Livewire\Component;

class OrnatoPagado extends Component
{
    public $ornatos;
    public $modal = false;
    public $ornatos_id,$numero_ornato,$monto;
    public function render()
    {
        $this->ornatos = Ornato::all();
        return view('livewire.ornato-pagado');
    }
    public function abrirModal(){
        $this->modal = true;
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function crear(){
        $this->abrirModal();
    }
    public function guardar()
    {
        Ornato::updateOrCreate(['id'=>$this->ornatos_id],
        [
            'numero_ornato' => $this->numero_ornato, 
            'monto' => $this->monto,

        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
        
    }
    public function limpiarCampos(){
        $this->numero_ornato = '';
        $this->monto = '';
    }
    public function editar($id){
        $ornatov= Ornato::findOrFail($id);
        $this->ornatos_id=$id;
        $this->numero_ornato=$ornatov->numero_ornato;
        $this->monto=$ornatov->monto;
        $this->abrirModal();
    }
    public function borrar($id){
        Ornato::find($id)->delete();
        
    }
}
