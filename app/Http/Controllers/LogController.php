<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:read-log')->only('index','show');
        $this->middleware('permission:edit-log')->only('edit','update');
        $this->middleware('permission:delete-log')->only('delete');
        $this->middleware('permission:create-log')->only('create','store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $logs = Activity::where('log_name','like',"%{$request->search}%")->paginate(15);
        return view('pages.log.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.log.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     // dd($request);
    //     $request->validate([
    //         'name' => 'required|string|unique:logs',
    //         'link' => 'required|string|unique:logs',
    //         'photo' => 'nullable|mimes:jpg,bmp,png|max:1024',
    //     ]);
    //     $photo = request('photo') ? request()->file('photo')->store('images/log') : null;
    //     Activity::create([
    //         'name'=> $request->name,
    //         'link'=> $request->link,
    //         'photo'=> $photo,
    //         ]);
    //     return back()->with('success','log was Created!!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $log = Activity::find($id);
        return view('pages.log.show',compact('log'));
    }

    public function destroy($id)
    {
        $log = Activity::find($id);
        $log->delete();
        return back()->with('success','log was Deleted!!');
    }


}
