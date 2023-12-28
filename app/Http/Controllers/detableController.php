<?php

// app/Http/Controllers/detableController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

use function PHPUnit\Framework\returnSelf;

class detableController extends Controller
{
    public function showTable()
    {
        $tableData = DB::table('orders')->get(); // Replace 'your_table_name' with your actual table name


        return view('super-admin/table', ['tableData' => $tableData]);
      
    }

}

