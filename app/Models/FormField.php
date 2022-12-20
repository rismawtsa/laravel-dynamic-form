<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Reference\Reference;

class FormField extends Model
{
    use HasFactory;

    protected $keyType = 'string';

}
