<?php

namespace App\Http\Controllers\Voucher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function index()
    {

        $vouchers = Voucher::all();
        return view('Voucher.index', [
            'vouchers' => $vouchers
        ]);
    }
}
