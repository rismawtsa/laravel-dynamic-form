<?php

namespace App\Http\Controllers;

use App\Models\FormField;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FormFieldController extends Controller
{
    public function index()
    {
        return Inertia::render('Form', [
            'fields' => FormField::where('group', 'job_application')->get(),
        ]);
    }
}
