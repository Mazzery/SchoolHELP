<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    public $table = "school";

    public function request_data() {
        return $this->hasMany(RequestData::class);
    }
}
