<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)  

    {   
        $sort = $request->get('sort');
        $search = $request->get('search');
        $contacts = Contact::query();

        if ($sort == 'name') {
            $contacts->orderBy('name');
        }

        if ($sort == 'created_at') {
            $contacts->orderBy('created_at');
        }

        if ($search) {
            $contacts->where('name', 'like', '%' . $search . '%');
            $contacts->orWhere('email', 'like', '%' . $search . '%');
        }

        $contacts = $contacts->get();

        


        return view('contacts.index',compact(['contacts','sort']));
    
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
        ]);
        return redirect('/contacts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact= Contact::find($id);
        return view('components.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact= Contact::find($id);
        return view('components.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Contact::where('id',$id)->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
        ]);
        return redirect('/contacts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id',$id)->delete();
        return redirect('/contacts');
    }
}
