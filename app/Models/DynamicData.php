<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class DynamicData extends Model
{
    use HasFactory;
    use HasUuids;


    protected $table = 'dynamic_data';

    public function row()
    {
        return $this->belongsTo(DynamicRow::class, 'dynamic_row_id');
    }
}

