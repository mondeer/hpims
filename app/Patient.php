<?php

namespace hpims;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'national_id', 'dob', 'patient_id', 'ward', 'bed_no', 'mobile', 'address', 'next_of_kin', 'next_of_kin_contact'];
}
