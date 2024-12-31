<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'tbl_reports';

    protected $fillable = [
        'nama',
        'email',
        'location',
        'file',
        'created_at',
        'updated_at'
    ];
}
