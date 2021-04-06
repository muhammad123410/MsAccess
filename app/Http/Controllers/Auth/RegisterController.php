<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Client;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileNameToStore='';
        $this->validate($request,[
            'file'=>'mimes:jpeg,png,bmp,tiff',
        ]);

        // dd($request->image->getClientOriginalName());
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/cover_image',$fileNameToStore);
        }
        $Client = Client::create([
            // 'Client_id' => $request->Client_id,
            // 'Authority' => $request->Authority,
            'Client_Name' => $request->Client_Name,
            'Address' => $request->Address,
            'Contact_Number' => $request->Contact_Number,
            'Type_of_Iraqi' => $request->Type_of_Iraqi,
            'Iraqi_Document_number' => $request->Iraqi_Document_number,
            'Type_of_Australian_id' => $request->Type_of_Australian_id,
            'Australian_Id_No' => $request->Australian_id_No,
            'Date_of_issue' => $request->Date_of_issue,
            'Created_by' => $request->Created_by,
            'file'=> $fileNameToStore,
            
        ]);

        User::create([
            'First_Name'=>$request->Client_Name,
            'Last_Name'=>$request->Client_Name,
            'Username'=>$request->UserName,
            'password'=>Hash::make($request->password),
            'Client_id'=>$Client->id,

        ]);


        if(!auth()->attempt($request->only('UserName','password'))){
            return redirect()->back();
        };

        return redirect()->route('home');
        
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
