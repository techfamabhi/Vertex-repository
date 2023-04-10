<?php

namespace App\Http\Controllers;
use App\Models\account_history;
use Illuminate\Http\Request;

class AccountHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pp = account_history::get();
      return response()->json($pp);
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

        $histroy=new account_history([
            'name'=>$request->get('name'),
            'userid'=>$request->get('userid'),
            'ip'=>$request->get('ip'),
            'mobile'=>$request->get('mobile'),
            'email'=>$request->get('email'),
            'wallet_amount'=>$request->get('wallet_amount'),
            'withdraw_request'=>$request->get('withdraw_request'),
            'status'=>$request->get('status'),
            'action'=>$request->get('action')
        ]);
        $histroy->save();
        $arr=array();
        $data['status']="success";
        $data['message']="Data Insert";
        array_push($arr,$data);
        return response()->json($arr);
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
