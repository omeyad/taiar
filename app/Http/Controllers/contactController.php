<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;


class contactController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        return view('contacts.contactList', ['contacts' => $contacts]);

////        return view('contacts/contactList');
    }

    public function store(Request $request)
    {

        $request->validate([
        'contactName'=>'required',
        'email'=>'required',
        'contactMobile'=>'required',
        'city'=>'required',
        'country'=>'required'

        ]);



//        dd($request->contactName);
        $data=Contact::all();
        $contact = new Contact();
        $contact->name = $request->contactName;
        $contact->email = $request->email;
        $contact->mobile = $request->contactMobile;
        $contact->city = $request->city;
        $contact->country = $request->country;
        $contact->user_id = 1;
        $contact->save();
       // return back()->with('success','Contact ADDED SUCCESSEFULY');



        return view('contacts.contactList',['contacts' => $data]);

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
