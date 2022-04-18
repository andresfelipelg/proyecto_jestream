<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = Producto::created([
            'codigo' => 'LOV0893',
            'referencia' => 'ATL 600',
            'referencia_proveedor'=> 'transferencia electrica',

        ]);

        $producto = Producto::created([
            'codigo' => 'LOV0892',
            'referencia' => 'DMG 600',
            'referencia_proveedor'=> 'medidor',

        ]);
    }
}
