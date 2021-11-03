<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=["name", "organization_id", "amount", "bank_id"];

    public function bank(){
        return $this->belongsTo(Bank::class);
    }

    public function organization(){
        return $this->belongsTo(Organization::class);
    }
}
