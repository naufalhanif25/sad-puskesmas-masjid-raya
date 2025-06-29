<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patients extends Model
{
    use HasFactory;

    // protected $primaryKey = 'id_patient';

    protected $fillable = [
        'name',
        'gender',
        'address',
        'queue_number',
        'room',
    ];
}
