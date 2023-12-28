<?php

// app/Http/Controllers/TableController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

use function PHPUnit\Framework\returnSelf;

class TableController extends Controller
{
    public function showTable()
    {
        $tableData = DB::table('orders')->get(); // Replace 'your_table_name' with your actual table name


        return view('admin/table', ['tableData' => $tableData]);
      
    }

    public function downloadPDF()
{
    $path = storage_path('app/public/pdfs/{pdf_path}');

    return response()->download($path);
    
    

}
}

