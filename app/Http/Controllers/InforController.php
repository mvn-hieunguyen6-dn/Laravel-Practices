<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Infor;
use Symfony\Polyfill\Intl\Idn\Info;

class InforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infor=Infor::get();
        return view('index',compact('infor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Infor::create($request->all());
        return redirect()->route('Infor.index')->with('success','Thêm Info Thành Công');
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
        $infor = Infor::find($id);
        return view('edit',compact('infor'));   
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
        Infor::find($id)->update($request->all());
        return redirect()->route('Infor.index')->with('success','Sửa Info Thành Công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Infor::where('id',$id)->delete();
        return redirect()->route('Infor.index')->with('success','Xóa Info Thành Công');

    }
}
