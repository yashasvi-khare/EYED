<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name', 'email', 'mobile_number', 'doctor_name', 'message', 'apointment_date',
    ];

}
