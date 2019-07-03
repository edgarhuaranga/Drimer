<?php

namespace App\Exports;

use App\ImpulsoRegistro;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class ReporteExport implements FromView
{

    public function view(): View
    {

      return view('impulso.reporte', [
            'reportes' => ImpulsoRegistro::selectRaw('user_id, business_id, min(created_at) as fecha_registro')->where('fecha_gestion', '=', Carbon::today())->groupBy('user_id', 'business_id')->orderBy('fecha_registro', 'asc')->get()
        ]);
    }
}
