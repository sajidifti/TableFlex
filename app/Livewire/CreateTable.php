<?php

namespace App\Livewire;

use Livewire\Component;


use App\Models\DynamicTable;
use App\Models\DynamicRow;

class CreateTable extends Component
{

    public $table_name = '';

    public $saved = false;


    public function createTable()
    {
        $table = new DynamicTable();

        $table->name = $this->table_name;
        $table->save();

        $this->saved = true;
    }

    public function render()
    {
        return view('livewire.create-table');
    }
}
