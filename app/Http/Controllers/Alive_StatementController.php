<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Alive_Statement;
use App\Client;

use Illuminate\Http\Request;

class Alive_StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Alive_Statements=Alive_Statement::get();
        return view('Alive_Statement.index',['Alive_Statements'=>$Alive_Statements]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alive_Statement.create');
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
        
        $client = Client::where('id','=',$request->Client_id)->get();
        Alive_Statement::create([
            // 'Client_id' => $request->Client_id,
            'Auth_Id' => $request->Auth_Id,
            'Name_in_Austrilia' => $request->Name_in_Austrilia,
            'Authority_issue_date' => $request->Authority_issue_date,
            'Country_Name' => $request->Country_Name,
            'Authority_register_Number' => $request->Authority_register_Number,
            'Authority_Name' => $request->Authority_Name,
            'File' => $request->file,
        ]);

        $context = 
            '{\'Auth_id\':\''. $request->Auth_Id.'\','.
            '\'Authoity_register_Number\':\''.$request->Authority_register_Number.'\','.
            '\'Authority_Issue_date\':\''. $request->Authority_issue_date.'\','.
            '\'Name_in_Austrilia\':\''. $request->Name_in_Austrilia.'\','.
            '\'Country_Name\':\''. $request->Country_Name.'\','.
            '\'Address\':\''. $client[0]->Address.'\','.
            '\'Contact\':\''. $client[0]->Contact_Number.'\'}';

            $string= app_path();
            
            $result = shell_exec("python ".app_path()."\http\controllers\Alive_Statement\A_S.py ".escapeshellarg($string)." ".escapeshellarg($context));
                
            $header = array(
                'Content-Type'=>'application/docx',
            );
            $file = "Alive_Statement_for ".$request->Client_id." Client ".$request->Auth_Id." Auth.docx";

        return Response::download(app_path()."\http\controllers\Alive_Statement\A_C_Comlete.docx",$file,$header);

        
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
