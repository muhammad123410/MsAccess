<?php

namespace App\Http\Controllers;
use App\Full_Authorities;
use App\Client;
use Illuminate\Support\Facades\Response;


use Illuminate\Http\Request;

class Full_AuthoritiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Full_Authorities = Full_Authorities::get();
        return view('Full_Authorities.index',['Full_Authorities'=>$Full_Authorities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Full_Authorities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::where('Client_id','=',$request->Client_id)->get();
        // dd($client[0]);
        Full_Authorities::create([
            // 'Client_id'=>$request->Client_id,
            'Auth_Id'=>$request->Auth_Id,
            'Name_in_Austrilia'=>$request->Name_in_Austrilia,
            'Name_in_Kurdistan'=>$request->Name_in_Kurdistan,
            'Authority_issue_date'=>$request->Authority_issue_date,
            'Authority_register_Number'=>$request->Authority_register_Number,
            'Authority_Name'=>$request->Authority_Name,
            'Place_of_issue'=>$request->Place_of_issue,
            'Created_by'=>$request->Created_by,
            'File'=>$request->File,
        ]);
        // dd($request->Place_of_issue);
        $context = 
            '{\'Auth_Id\':\''. $request->Auth_Id.'\','.
            '\'Authoity_register_Number\':\''.$request->Authority_register_Number.'\','.
            '\'Authority_issue_date\':\''. $request->Authority_issue_date.'\','.
            '\'Name_in_Austrilia\':\''. $request->Name_in_Austrilia.'\','.
            '\'Name_in_Kurdistan\':\''. $request->Name_in_Kurdistan.'\','.
            '\'Iraqi_Document_number\':\''. $client[0]->Iraqi_Document_number.'\','.
            '\'Date_of_issue\':\''. $client[0]->Date_of_issue.'\','.
            '\'Address\':\''. $client[0]->Address.'\','.
            '\'Place_of_issue\':\''. $request->Place_of_issue.'\','.
            '\'Contact_Number\':\''. $client[0]->Contact_Number.'\'}';
        
        // dd($context);
        
        
        $string= app_path();
        $result = shell_exec("python ".app_path()."\http\controllers\Full_Auth\Full_Auth.py ".escapeshellarg($string)." ".escapeshellarg($context));
        

        $header = array(
            'Content-Type'=>'application/docx',
        );
        $file = "Full_Auth_for ".$request->Client_id." Client ".$request->Auth_Id." Auth.docx";

    return Response::download(app_path()."\Http\Controllers\Full_Auth\Full_Complete.docx",$file,$header);


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
