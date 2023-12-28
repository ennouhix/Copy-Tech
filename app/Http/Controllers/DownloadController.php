<?php

namespace App\Http\Controllers;

// DownloadController.php

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class Controller extends Controller
{

public function download($pdfPath)
{
    return Storage::download(storage_path('/app/public/'.$pdfPath));
    
}
}