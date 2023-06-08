<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserVacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'companies_id',
        'users_id'
    ];

}
