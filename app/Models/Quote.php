<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'quote_date',
        'expiry_date',
        'total',
        'status',
        'deal_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'quote_date' => 'date',
        'expiry_date' => 'date',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }
}
