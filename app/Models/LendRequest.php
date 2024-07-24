<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\Ledger;
use App\Models\RemitRequest;
class LendRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'amount',
        'interest_rate',
        'status',
        'reference_number',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    
    public function ledgers() 
    {
      return $this->hasMany(Ledger::class);
    }

    public function remit() 
    {
      return $this->hasMany(RemitRequest::class);
    }
}
