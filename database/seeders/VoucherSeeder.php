<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Voucher;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voucher::create([

            'name' => 'FACTURAS CON VALOR DE CREDITO FISCAL O QUE SUSTENTAN COSTOS Y GASTOS',
            'fixed_part' => 'B',
            'type' => '01',
            'quantity' => '0',
            'number_voucher' => str_pad('B01', 11, 0, STR_PAD_RIGHT)
        ]);

        Voucher::create([
            'name' => 'FACTURAS A CONSUMIDORES FINALES SIN VALOR DE CREDITO FISCAL',
            'fixed_part' => 'B',
            'type' => '02',
            'quantity' => '0',
            'number_voucher' => str_pad('B02', 11, 0, STR_PAD_RIGHT)

        ]);


        Voucher::create([
            'name' => 'NOTA DE DEBITO',
            'fixed_part' => 'B',
            'type' => '03',
            'quantity' => '0',
            'number_voucher' =>str_pad('B03', 11, 0, STR_PAD_RIGHT)

        ]);

        Voucher::create([
            'name' => 'NOTA DE CREDITO',
            'fixed_part' => 'B',
            'type' => '04',
            'quantity' => '0',
            'number_voucher' => str_pad('B04', 11, 0, STR_PAD_RIGHT)

        ]);

        Voucher::create([
            'name' => 'REGISTRO DE PROVEEDORES INFORMALES',
            'fixed_part' => 'B',
            'type' => '11',
            'quantity' => '0',
            'number_voucher' =>str_pad('B11', 11, 0, STR_PAD_RIGHT)
        ]);

        Voucher::create([
            'name' => 'REGISTRO UNICO DE INGRESOS',
            'fixed_part' => 'B',
            'type' => '12',
            'quantity' => '0',
            'number_voucher' => str_pad('B12', 11, 0, STR_PAD_RIGHT)

        ]);

        Voucher::create([
            'name' => 'REGISTRO DE GASTOS MENORES',
            'fixed_part' => 'B',
            'type' => '13',
            'quantity' => '0',
            'number_voucher' => str_pad('B13', 11, 0, STR_PAD_RIGHT)

        ]);


        Voucher::create([
            'name' => 'FACTURA REGIMEN ESPECIAL DE TRIBUTACION',
            'fixed_part' => 'B',
            'type' => '14',
            'quantity' => '0',
            'number_voucher' => str_pad('B14', 11, 0, STR_PAD_RIGHT)

        ]);

        Voucher::create([
            'name' => 'FACTURA REGIMEN ESPECIAL DE TRIBUTACION',
            'fixed_part' => 'B',
            'type' => '15',
            'quantity' => '0',
            'number_voucher' => str_pad('B15', 11, 0, STR_PAD_RIGHT)

        ]);
    }
}
