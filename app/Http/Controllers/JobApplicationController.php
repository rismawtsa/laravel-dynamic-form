<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\FormField;
use App\Models\Applicant;
use App\Models\ApplicantSkill;
use App\Models\ReferenceData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Spatie\FlareClient\Api;

class JobApplicationController extends Controller
{
    public function index()
    {
        $formField = FormField::where('group', 'job_application')->get();
        $fields = collect($formField)->map(function($collection, $key) {
            $collect = (object)$collection;
            return [
                'id' => $collect->id,
                'type' => $collect->type,
                'label'=> $collect->label,
                'name'=> $collect->name,
                'is_required' => $collect->is_required,
                'placeholder'=> $collect->placeholder,
                'options' => ReferenceData::where('key', $collect->options)->select('id', 'name')->get()
            ];
        });


        return Inertia::render('JobApplicationForm', [
            'fields' => $fields
        ]);
    }

    public function store(Request $request)
    {
        $fileName = $request->resume->getClientOriginalName();
        $request->resume->move(public_path('uploads'), $fileName);

        $applicant = new Applicant;
        $data = $request->all();
        foreach ($data as $key => $value) {
            if(!empty($value)) {
                if ($key != 'skills') {
                    $applicant[$key] = $value;
                }

                if($key == 'resume') {
                    $applicant[$key] = public_path('uploads').'/'.$fileName;
                }
            }
        }
        $applicant->save();

        $skills = Array();
        foreach ($request->skills as $value) {
            array_push($skills, new ApplicantSkill(["skill" => $value]));
        };
        $applicant->skills()->saveMany($skills);
  
        return redirect()->back();
    }
}
