<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    /* protected $table = 'users'; */
    
    /* protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'user_id']; */
    
    protected $guarded = [''];
}
