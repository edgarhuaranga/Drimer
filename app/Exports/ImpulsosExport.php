<?php

namespace App\Exports;

use App\ImpulsoRegistro;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ImpulsosExport implements FromView
{

    public function view(): View
    {
      return view('impulso.excel', [
            'canjes' => ImpulsoRegistro::where('created_at','>','2019-05-01')->get()
        ]);
    }
}
