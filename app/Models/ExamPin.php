<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPin extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'exam_pins';
}
