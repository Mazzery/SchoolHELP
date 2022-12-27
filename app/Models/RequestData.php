<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestData extends Model
{
    use HasFactory;
    public $table = "request_data";

    protected $guarded= ['id'];

    public function school() {
        return $this->belongsTo(School::class);
    }

    public function offer() {
        return $this->hasMany(Offer::class);
    }
}
