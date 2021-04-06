<?php

namespace App\Http\Controllers;
use App\Retirement_Authorities;
use Illuminate\Support\Facades\Response;
use App\Client;
use Illuminate\Http\Request;

class Retirement_AuthoritiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Retirement_Authorities = Retirement_Authorities::get();
        return view('Retirement_Authorities.index',['Retirement_Authorities'=>$Retirement_Authorities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Retirement_Authorities.create');
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
        // dd($client);
        Retirement_Authorities::create([
            // 'Client_id'=> $request->Client_id,
            'Auth_Id'=> $request->Auth_Id,
            'Name_in_Austrilia'=> $request->Name_in_Austrilia,
            'Name_in_Kurdistan'=> $request->Name_in_Kurdistan,
            'Mother_Full_Name'=> $request->Mother_full_Name,
            'Retirement_Type'=> $request->Retirement_Type,
            'Retirement_Id_No'=> $request->Retirement_Id_No,
            'Retirement_Date_of_Issue'=> $request->Retirement_Date_of_issue,
            'Name_of_the_Bank'=> $request->Name_of_Bank,
            'Authority_issue_date'=> $request->Authority_issue_date,
            'Country_Name'=> $request->Country_Name,
            'Authority_register_Number'=> $request->Authority_register_Number,
            'Authority_Name'=> $request->Authority_Name,
            'Created_by'=> $request->Created_by,
            'File'=> $request->file,
            'Place_of_issue'=> $request->Place_of_issue,
        ]);
        $context = 
            '{\'Auth_id\':\''. $request->Auth_Id.'\','.
            '\'Authoity_register_Number\':\''.$request->Authority_register_Number.'\','.
            '\'Authority_Issue_date\':\''. $request->Authority_issue_date.'\','.
            '\'Name_in_Austrilia\':\''. $request->Name_in_Austrilia.'\','.
            '\'Name_in_Kurdistan\':\''. $request->Name_in_Kurdistan.'\','.
            '\'Mother_Full_Name\':\''. $request->Mother_full_Name.'\','.
            '\'Retirement_Id_No\':\''. $request->Retirement_Id_No.'\','.
            '\'Retirement_Date_of_Issue\':\''. $request->Retirement_Date_of_issue.'\','.
            '\'Retirement_Type\':\''. $request->Retirement_Type.'\','.
            '\'Country_Name\':\''. $request->Country_Name.'\','.
            '\'Iraqi_Document_number\':\''. $client[0]->Iraqi_Document_number.'\','.
            '\'Date_of_issue\':\''. $client[0]->Date_of_issue.'\','.
            '\'Address\':\''. $client[0]->Address.'\','.
            '\'Place_of_issue\':\''. $request->Place_of_issue.'\','.
            '\'Contact_Number\':\''. $client[0]->Contact_Number.'\'}';
            
            $string= app_path();
            $result = shell_exec("python ".app_path()."\http\controllers\Retirement_Auth\R_C.py ".escapeshellarg($string)." ".escapeshellarg($context));
            // dd($result);

            $header = array(
                'Content-Type'=>'application/docx',
            );
            $file = "Retirement_Auth_for ".$request->Client_id." Client ".$request->Auth_Id." Auth.docx";

        return Response::download(app_path()."\http\controllers\Retirement_Auth\R_Complete.docx",$file,$header);

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
