<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LendRequest;
use App\Models\Ledger;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
    ];

    public function lendRequests() {
      return $this->hasMany(LendRequest::class);
    }
    public function ledgers() {
      return $this->hasMany(Ledger::class);
    }
}
