<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PagosDpi as pagos;

class PagosDpi extends Component
{
    public $pago;
    public $modal = false;
    public $idpagos,$dpi,$nombre,$fechaPago,$monto,$estado,$ornato_id,$user_id;
    public function render()
    {
        $this->pago = pagos::all();
        return view('livewire.pagos-dpi');
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
        pagos::updateOrCreate(['id'=>$this->idpagos],
        [
            'dpi' => $this->dpi, 
            'nombre' => $this->nombre,
            'fechaPago' => $this->fechaPago,
            'monto' => $this->monto, 
            'estado' => $this->estado,
            'ornato_id' => $this->ornato_id,
            'user_id' => auth()->id(),
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
        
    }
    public function limpiarCampos(){
        $this->dpi = '';
        $this->nombre = '';
        $this->fechaPago = '';
        $this->monto = '';
        $this->estado = '';
        $this->ornato_id = '';
        $this->user_id = '';
    }
    public function editar($id){
        $dpi_pagos= pagos::findOrFail($id);
        $this->idpagos=$id;
        $this->dpi=$dpi_pagos->dpi;
        $this->nombre=$dpi_pagos->nombre;
        $this->fechaPago=$dpi_pagos->fechaPago;
        $this->monto=$dpi_pagos->monto;
        $this->estado=$dpi_pagos->estado;
        $this->ornato_id=$dpi_pagos->ornato_id;
        $this->user_id=$dpi_pagos->user_id;
        $this->abrirModal();
    }
    public function borrar($id){
        pagos::find($id)->delete();
        
    }
}
