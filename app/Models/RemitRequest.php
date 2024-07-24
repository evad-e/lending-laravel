<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemitRequest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'lend_request_id',
        'remit_reference_number',
    ];

    public function lendRequest()
    {
        return $this->belongsTo(LendRequest::class);
    }
}
