<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'companies_id',
        'title',
        'types_id',
        'address',
        'requirements',
        'deletion_date',
        'expedition_date',
        'state',
        'responsibilities',
        'description',
        'image',
        'slug',
        'created_at',
        'updated_at'
    ];





}
