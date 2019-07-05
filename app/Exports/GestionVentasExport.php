<?php

namespace App\Exports;

use App\Gestion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GestionVentasExport implements FromView
{

    public function view(): View
    {
      return view('gestion.excel', [
            'ventas' => Gestion::all()
        ]);
    }
}
