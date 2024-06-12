<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DynamicTable;

class AdminController extends Controller
{
    public function tables()
    {
        $tables = DynamicTable::all();

        return view('tableflex.admin.tables', ['tables' => $tables]);
    }


    public function createTables()
    {
        return view('tableflex.admin.tables_create');
    }


    public function viewRows($table_id)
    {
        $table = DynamicTable::with('columns')->find($table_id);

        // dd($table->rows);

        return view('tableflex.admin.columns', ['columns' => $table->columns, 'table_id' => $table_id]);
    }


    public function insertData($table_id)
    {
        return view('tableflex.admin.insert', ['table_id' => $table_id]);
    }
}
