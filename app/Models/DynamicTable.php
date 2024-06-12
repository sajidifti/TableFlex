<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class DynamicTable extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'dynamic_tables';


    public function rows()
    {
        return $this->hasMany(DynamicRow::class, 'dynamic_table_id');
    }

    public function columns()
    {
        return $this->hasMany(DynamicColumn::class, 'dynamic_table_id');
    }
}

