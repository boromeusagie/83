<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_category_id',
        'name',
        'join_date',
        'basic_salary',
        'day_off',
        'is_captain',
        'is_gardener',
        'is_active',
    ];

    protected $casts = [
        'join_date' => 'date',
        'is_captain' => 'boolean',
        'is_gardener' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function employee_category(): BelongsTo
    {
        return $this->belongsTo(EmployeeCategory::class);
    }

    public function absences(): HasMany
    {
        return $this->hasMany(Absence::class);
    }
}
