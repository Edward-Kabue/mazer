<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'due_date',
        'total',
        'contact_id',
        'quote_id',
        'organization_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'invoice_date' => 'date',
        'due_date' => 'date',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
