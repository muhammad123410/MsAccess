<?php

namespace App\Http\Controllers;
use App\Limited_Authorities;
use Illuminate\Support\Facades\Response;
use App\Client;
use Illuminate\Http\Request;

class Limited_AuthoritiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Limited_Authorities=Limited_Authorities::get();
        return view('Limited_Authorities.index',['Limited_Authorities'=>$Limited_Authorities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Limited_Authorities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $client = Client::where('Client_id','=',$request->Client_id)->get();
        Limited_Authorities::create([
            // 'Client_id' => $request->Client_id,
            'Auth_Id' => $request->Auth_Id,

            'Name_in_Austrilia' => $request->Name_in_Austrilia,
            'Name_in_Kurdistan' => $request->Name_in_Kurdistan,
            'Property_Type' => $request->Property_type,
            'Property_No' => $request->Property_No,
            'Property_resisted_No' => $request->Property_resisted_No,
            'Place_of_property' => $request->Place_of_Property,
            'Authority_issue_date' => $request->Authority_issue_date,
            'Authority_register_Number' => $request->Authority_register_Number,
            'Authority_Name' => $request->Authority_Name,
            'Created_by' => $request->Created_by,
            'File' => $request->file,
       
        ]);

        $context = 
            '{\'Auth_id\':\''. $request->Auth_Id.'\','.
            '\'Authoity_register_Number\':\''.$request->Authority_register_Number.'\','.
            '\'Authority_issue_date\':\''. $request->Authority_issue_date.'\','.
            '\'Name_in_Austrilia\':\''. $request->Name_in_Austrilia.'\','.
            '\'Name_in_Kurdistan\':\''. $request->Name_in_Kurdistan.'\','.
            '\'Iraqi_Document_number\':\''. $client[0]->Iraqi_Document_number.'\','.
            '\'Property_Type\':\''. $request->Property_type.'\','.
            '\'Place_of_property\':\''. $request->Place_of_Property.'\','.
            '\'Property_No\':\''. $request->Property_No.'\','.
            '\'Address\':\''. $client[0]->Address.'\','.
            '\'Iraqi_Document_number\':\''. $client[0]->Iraqi_Document_number.'\','.
            '\'Place_of_issue\':\''. $request->Place_of_issue.'\','.
            '\'Contact_Number\':\''. $client[0]->Contact_Number.'\'}';
            
            $string= app_path();
        $result = shell_exec("python ".app_path()."\http\controllers\Limited_Auth\Limited_Auth.py ".escapeshellarg($string)." ".escapeshellarg($context));
     
        $header = array(
            'Content-Type'=>'application/docx',
        );
        $file = "Limited_Auth_for ".$request->Client_id." Client ".$request->Auth_Id." Auth.docx";

    return Response::download(app_path()."\Http\Controllers\Limited_Auth\Limited_Complete.docx",$file,$header);
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
