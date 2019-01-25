<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use App\User;

class PartnerController extends Controller
{
    
    public function __contruct()
    {
        $this->middleware('auth:api');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = auth('api')->user();

        $this->validate($request,[
            'desig_id' => 'required|numeric',
            'title' => 'required|string',
            'name' => 'required|string',
            'relation' => 'required|string',
            'relative' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string'
        ]);
        
        return Partner::create([
            'user_id' => $user->id,
            'desig_id' => $request['desig_id'],
            'title' => $request['title'],
            'name' => $request['name'],
            'relation' => $request['relation'],
            'relative' => $request['relative'],
            'address' => $request['address'],
            'mobile' => $request['mobile']
        ]);
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
        $partner = Partner::findOrFail($id);
        
        $this->validate($request,[
            'desig_id' => 'required|numeric',
            'title' => 'required|string',
            'name' => 'required|string',
            'relation' => 'required|string',
            'relative' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string'
        ]);
    
        $partner->update($request->all());

        return ['message' => 'Updated the Partner info'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        // delete the Partner
        $partner->delete();

        return ['message' => 'Partner Deleted'];
    }

    public function showPartners()
    {
        $user = auth('api')->user();
        return Partner::where('user_id', $user->id)->paginate(10);
    }
}
