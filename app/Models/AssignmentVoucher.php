<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentVoucher extends Model
{
    use HasFactory;

    public function voucher(): BelongsTo
    {
        return $this->belongsTo(Voucher::class);
    }
}
