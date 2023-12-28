<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'professeur', 'impression_type', 'filiere', 'ncopies', 'format', 'print_type', 'color', 'print_style', 'pdf_path','datetime',
    ];
}


