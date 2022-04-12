<?php

namespace App\Exports;

use App\Models\Comercial;
use Maatwebsite\Excel\Concerns\FromCollection;

class ComercialsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Comercial::all();
    }
}
