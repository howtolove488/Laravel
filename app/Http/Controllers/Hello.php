<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Hello extends Controller
{
	/**
	* Display a listing of the resource
	*
	* @return Response
	*/
    public function index()
    {
    	return 'hello world from controller';
    }

    /**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
    public function create()
    {
    	# code...
    }

    /**
	* Store a newly created resource in storage.
	*
	* @param  Request  $request
	* @return Response
	*/
    public function store(Request $request)
    {
    	# code...
    }

    /**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
    public function show($name)
    {
    	return view('hello',array('name'=>$name));
    }

    /**
	* Update the specified resource in storage.
	*
	* @param  Request  $request
	* @param int $id
	* @return Response
	*/
    public function update(Request $request,$id)
    {
    	# code...
    }

    /**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
    public function distroy($id)
    {
    	# code...
    }
}
