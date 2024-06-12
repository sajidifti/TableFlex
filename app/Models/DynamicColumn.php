<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class DynamicColumn extends Model
{
    use HasFactory;
    use HasUuids;


    protected $table = 'dynamic_columns';


    public function table()
    {
        return $this->belongsTo(DynamicTable::class, 'dynamic_table_id');
    }
}
