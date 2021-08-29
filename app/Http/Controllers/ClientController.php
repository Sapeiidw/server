<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-client')->only('index','show');
        $this->middleware('permission:edit-client')->only('edit','update');
        $this->middleware('permission:delete-client')->only('delete');
        $this->middleware('permission:create-client')->only('create','store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::where('name','like',"%{$request->search}%")->paginate(15);
        return view('pages.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|unique:clients',
            'link' => 'required|string|unique:clients',
            'photo' => 'nullable|mimes:jpg,bmp,png|max:1024',
        ]);
        $photo = request('photo') ? request()->file('photo')->store('images/client') : null;
        Client::create([
            'name'=> $request->name,
            'link'=> $request->link,
            'photo'=> $photo,
            ]);
        return back()->with('success','Client was Created!!');
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
        $client = Client::findOrFail($id);
        return view('pages.client.edit', compact('client'));
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
        $request->validate([
            'name' => 'required|string|unique:clients,name,'.$id,
            'link' => 'required|string|unique:clients,link,'.$id,
            'photo' => 'nullable|mimes:jpg,bmp,png|max:1024',
        ]);
        
        $client = Client::find($id);

        if (request('photo')) {
            if (Storage::exists($client->photo) ) {
                Storage::delete($client->photo);
            }
            $photo = request()->file('photo')->store('images/client');
        } 
        elseif ($client->photo) {
            $photo = $client->photo;
        }
        else {
            $photo = null;
        }
        
        $client->update([
            'name' => $request->name,
            'link' => $request->link,
            'photo' => $photo,
        ]);
     
       return back()->with('success','Client was Updated!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        Storage::delete($client->photo);
        $client->delete();
        return back()->with('success','Client was Deleted!!');
    }
}
