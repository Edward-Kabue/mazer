<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'industry', 'Orgsize'];

    protected $searchableFields = ['*'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
