<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LendRequest;
class Ledger extends Model
{
    use HasFactory;

    protected $fillable = [
      'account_id',
      'lend_request_id',
      'remit_request_id',
      'interest_rate',
      'amount',
      'interest_amount',
      'balance'
    ];

    public function lendRequests() {
      return $this->belongsTo(LendRequest::class);
    }

    public function remitRequests() {
      return $this->hasOne(RemitRequest::class);
    }
}
