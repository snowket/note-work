<?php

namespace App\Http\Controllers;


use App\Http\Requests\PersonCreate;
use App\User;
use Illuminate\Http\Request;
use App\Person;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $persons=Person::with('user')->get();
//        dd($persons);
        return view('persons',compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $users=User::all();
        return view('person_create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PersonCreate  $request
     * @return Response
     */
    public function store(PersonCreate $request)
    {
        $date=$request->all();
//
        $user=User::find($request->user);

        $pinfo=new Person();


        $pinfo->email=$request->input('email');
        $pinfo->phoneNumber=$request->input('phoneNumber');
        $pinfo->personalNumber=$request->input('personalNumber');
        //dd($pinfo);
        $user->Person()->save($pinfo);
        $persons=Person::All();
        return redirect()->action('PersonController@index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $person=Person::Find($id);
        return view('person',compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
