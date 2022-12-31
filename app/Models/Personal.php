<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'father_name', 'email', 'phone', 'doj', 'dob', 'department', 'designation', 'currency', 'salary', 'location', 'cnic', 'employee_type',
        'back_account', 'back_account_name', 'back_name', 'ibn', 'bank_address'
    ];
}
