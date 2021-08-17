<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profil.formJSON');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $tmpData = json_encode($request->all());
        // $tmpDate = date('Y-m-d', strtotime($request->get('date')));

        $AddressCustomMessages = [
            'anrede.required' => 'Anrede muss ausgewählt werden.',
            'title.required' => 'Title muss ausgewählt werden.',
            'vorname.required'  => 'Vorname muss ausgefüllt werden.',
            'nachname.required'  => 'Nachname muss ausgefüllt werden.',
            'suffix.required' => 'Suffix muss ausgewählt werden.',
            'email.required'  => 'E-Mail muss ausgefüllt werden.',
            // 'date.required'  => 'Datum muss ausgefüllt werden.',
        ];
        Validator::make($request->all(), [
            'anrede' => [
                'required',
                'string',
                'max:50',
            ],
            'title' => [
                'required',
                'string',
                'max:50',
            ],
            'vorname' => [
                'required',
                'string',
                'max:150',
            ],
            'nachname' => [
                'required',
                'string',
                'max:150',
            ],
            'suffix' => [
                'required',
                'string',
                'max:50',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:50',
            ],
            'age' => [
                'required',
                'numeric',
            ],

            // 'anrede' => 'required',
            // 'title' => 'required',
            // 'vorname' => 'required|min:150',
            // 'nachname' => 'required|min:150',
            // 'suffix' => 'required',
            // 'email' => '',
            // 'date' => 'required|date',



/**
*            'start_date' => 'required|date',
*            'contracts_id' => 'required|numeric',
*            'title' => 'required|not_regex:/<script[\s\S]*?>[\s\S]*?<\/script>/',
*            'start_date' => 'required|date',
*            'end_date' => 'required|date|after_or_equal:start_date',
*            'holidays' => 'required | numeric | regex:/^[0-2]*$/',
*            'break_start' => 'required|date_format:H:i|after_or_equal:training_time_start',
*            'break_end' => 'required|date_format:H:i|after_or_equal:break_start|before_or_equal:training_time_end',
*            'training_time_start' => 'required|date_format:H:i',
*            'training_time_end' => 'required|date_format:H:i|after_or_equal:training_time_start',
*            'last_course' => 'nullable|date|after_or_equal:start_date|before_or_equal:end_date',
*            'closing_period' => 'file|mimes:ics',

 */

        ], $AddressCustomMessages)->validate();

        $profile = new Profile();
        $profile->anrede = $request->get('anrede');
        $profile->title = $request->get('title');
        $profile->vorname = $request->get('vorname');
        $profile->nachname = $request->get('nachname');
        $profile->suffix = $request->get('suffix');
        $profile->email = $request->get('email');
        $profile->date = date('Y-m-d', strtotime($request->get('date'))); //$tmpDate; //$request->get('date'); //date('d/M/Y', strtotime($request->get('date'))) ;
        $profile->data = json_encode($request->all()); //KT--> https://stackoverflow.com/questions/34446740/laravel-post-json-using-csrf-protection
        $profile->age = $request->get('age');
        $profile->save();

        // $data = json_encode($request);
        // Post::create($data);

        // return back()->with('success', 'Data successfully store in json format.');

        /**
         * How to redirect:
         * https://laravel.com/docs/8.x/redirects
         */
        return redirect()->route('profile')->with('success', 'Profile gespeichert!')->with('success_json',  json_encode ($tmpData));
        // return redirect('/')->with('success', 'Profile gespeichert');


        // $project->contracts_id = $request->get('contracts_id');
        // $project->title = $request->get('title');
        // $project->starting_date = $request->get('start_date');
        // $project->ending_date = $request->get('end_date');
        // $project->holidays_cleared = $request->get('holidays');
        // $project->lunch_break_start = $request->get('break_start');
        // $project->lunch_break_end = $request->get('break_end');
        // $project->training_time_span_start = $request->get('training_time_start');
        // $project->training_time_span_end = $request->get('training_time_end');
        // $project->last_course_entry = $request->get('last_course');

        // $file = $request->file('closing_period');
        // if ($file) {
        //     /*$fileName = $file->getClientOriginalName();*/
        //     $contents = file_get_contents($file->getRealPath());
        //     $project->closing_period = $contents;
        // }


        // //for the first project in contract
        // $contract_id = $request->get('contracts_id');
        // $pro = $project->where('contracts_id', '=', $contract_id)->latest('id')->first();

        // //overwrite the project id in the session
        // $request->session()->put('project_id', $pro->id);

        // return redirect('project/' . $pro->id)->with('success', 'Projekt gespeichert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
