<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname'];
    public function skills()
    {
        return $this->hasMany(ApplicantSkill::class, 'applicant_id', 'id');
    }
}
