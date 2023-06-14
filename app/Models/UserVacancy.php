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

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected static function boot()
    {
        parent::boot();
        self::creating(function(UserVacancy $userVacancy){
            $userVacancy->user_id = auth()->id();
        });
    }

}
