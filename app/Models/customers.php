<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class customers extends Model
{
    use HasFactory,UUID;
    protected $primaryKey = 'uuid';

    protected $guarded =[];



    // $newCode = 'PO' . str_pad($number, 4, '0', STR_PAD_LEFT);
}
