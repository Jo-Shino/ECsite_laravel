<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resouce.
     * 
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $data_now = Carbon::now()->year;
        $data_parse = Carbon::parse(now());
        echo $data_now;
        echo $data_parse;

        $e_all = Owner::all();
        $q_get = DB::table('owners')->select('name','created_at')->get();
        // $q_first = DB::table('owners')->select('name')->first();

        // $c_test = collect([
        //     'name' => 'テスト'
        // ]);

        // dd($e_all, $q_get, $q_first, $c_test);
        return view('admin.owners.index', 
        compact('e_all','q_get'));
    }

    /**
     * Show the form for creating a new respond
     * 
     * @return \Illuminate\Http\Response
     */
    
     public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage
     * 
     * @param \Illuminate\Http\Request  $request
     * @param \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource
     * 
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified 
     * 
     * @param int  $id 
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage
     * 
     * @param \Illuminate\Http\Request  $request
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage 
     * 
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }
}