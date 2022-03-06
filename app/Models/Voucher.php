<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voucher extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function AssignmentVouchers():HasMany
    {
        return $this->hasMany(AssignmentVoucher::class);
    }
}
