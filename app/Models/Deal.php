<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deal extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'value',
        'probability',
        'expected_close_da',
        'notes',
        'contact_id',
        'organization_id',
        'deal_stage_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'expected_close_da' => 'date',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function dealStage()
    {
        return $this->belongsTo(DealStage::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
