<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'discount',
        'valid_until'
    ];

    /**
     * convert the convert name to uppercase
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::upper($value);
    }

    /**
     * check if coupon is valid 
     */
    public function checkIfValid()
    {
        if ($this->valid_until > Carbon::now()) {
            return true;
        } else {
            return false;
        };
    }
}
