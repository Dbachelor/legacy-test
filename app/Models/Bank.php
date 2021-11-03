<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = ["account_name", "bank_name", "account_number"];

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }
}
