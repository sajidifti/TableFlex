<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class DynamicRow extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'dynamic_rows';

    public function table()
    {
        return $this->belongsTo(DynamicTable::class, 'dynamic_table_id');
    }

    public function data()
    {
        return $this->hasMany(DynamicData::class, 'dynamic_row_id');
    }
}
