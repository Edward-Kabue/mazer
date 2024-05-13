<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'job_title',
        'organization_id',
    ];

    protected $searchableFields = ['*'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}
