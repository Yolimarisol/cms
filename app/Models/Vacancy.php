<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Vacancy extends Model
{
    use HasFactory;
    /**
 * The table associated with the model.
 *
 * @var string
 */
    protected $table='vacancies';

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

    //protected $perPage = 6;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhere('resposabilities', 'like', '%' . $search . '%')
                    ->orWhere('requirements', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['type'] ?? false, fn($query, $type) =>
            $query->whereHas('type_id', fn ($query) =>
                $query->where('slug', $type)
            )
        );

        $query->when($filters['company'] ?? false, fn($query, $company) =>
            $query->whereHas('company_id', fn ($query) =>
                $query->where('name', $company)
            )
        );
    }

    public function path()
    {
        return "/vacancies/{$this->id}";
    }

    public function getCreatedAtFormattedAttribute(): string
    {
        return Carbon::parse(array ($this->created_at,
                                    $this->updated_at,
                                    $this->deletion_date,
                                    $this->expedition_date))
                            ->format(format: "d-m-Y H:i");

    }

    public function getExcerptAttribute(): string
    {
        return Str::excerpt($this->description);
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
