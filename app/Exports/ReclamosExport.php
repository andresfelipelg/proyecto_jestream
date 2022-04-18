<?php

namespace App\Exports;

use App\Models\Reclamo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ReclamosExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Reclamo::all();
    }

    public function view(): View
    {
        // TODO: Implement view() method.
        return view('reclamacion.export',[
            'reclamaciones'=> Reclamo::get(),
        ]);
    }
}
