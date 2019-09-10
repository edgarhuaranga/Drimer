<?php

namespace App\Exports;

use App\Gestion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GestionVentasExport implements FromView
{
    public $view;
    public $data;

    public function __construct($view, $data=""){
      $this->view = $view;
      $this->data = $data;
    }

    public function view(): View
    {
      //return view('gestion.excel', [
          //  'ventas' => Gestion::all()
        //]);
        return view($this->view, ['ventas'=>$this->data]);
    }
}
