<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allInvoices = Invoice::where('id', '>', 0)->with(['Organization:id,name', 'Bank'])->get();
        $total = Invoice::sum('amount');
        if(count($allInvoices) > 0){
            $array = array("is_succeeded"=>true, "payload"=>$allInvoices, "total_amount"=>$total, "total_count"=>count($allInvoices));
        }else{
            $array = array("is_succeeded"=>false, "message"=>"no records found");
        }
        return json_encode($array);
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
        //
        $tax = $request->amount * 7.5/100;
        $array = array("name"=>$request->name, "organization_id"=>$request->organization_id, "bank_id"=>$request->bank_id, "amount"=>$request->amount + $tax);
        $saveInvoice = Invoice::create($array);
        if($saveInvoice){
            $array = array("is_succeeded"=>true, "message"=>"data saved");
        }else{
            $array = array("is_succeeded"=>false, "message"=>"operation failed");
        }
        return json_encode($array);
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
