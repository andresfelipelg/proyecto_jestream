<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca = Marca::created([
            'codigo' => 'LOV0893',
            'referencia' => 'ATL 600',
            'referencia_proveedor'=> 'transferencia electrica',

        ]);

        $marca = Marca::created([
            'name' => 'LOVATO',

        ]);
    }
}
