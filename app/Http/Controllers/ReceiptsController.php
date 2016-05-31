<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Receipt;
use App\Company;

class ReceiptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipts = Receipt::orderBy('id', 'DESC')->get();
        return view('receipts.index')
            ->with('receipts', $receipts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::find(1);
        //dd($company);
        return view('receipts.create')
            ->with('company', $company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receipt = new Receipt($request->all());
        $receipt->save();

        flash()->success('El recibo periodo <b>' . $receipt->desde . ' al ' . $receipt->hasta . '</b> se agregó con exito!');
        return redirect()->route('receipts.index');
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
        $company = Company::find(1);
        $receipt = Receipt::find($id);
        return view('receipts.edit')
            ->with('company', $company)
            ->with('receipt', $receipt);
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
        $receipt = Receipt::find($id);
        $receipt->fill($request->all());
        $receipt->save();

        flash()->warning('El recibo periodo <b>' . $receipt->desde . ' al ' . $receipt->hasta . '</b> se actualizó con exito!');
        return redirect()->route('receipts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receipt = Receipt::find($id);
        $receipt->delete();

        flash()->error('El recibo periodo <b>' . $receipt->desde . ' al ' . $receipt->hasta . '</b> se eliminó con exito!');
        return redirect()->route('receipts.index');
    }
}
