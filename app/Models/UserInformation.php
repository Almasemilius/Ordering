<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;
    protected $table = 'user_information';
    protected $primaryKey = 'id';
    protected $fillable = [
        'address',
        'card_number',
        'expire_date',
        'user_id',
    ];
}
