<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class Contactcontroller extends Controller
{
    public function index()
    {
        $contacts=contact::all();
        return response()->json($contacts);


    }
    public function store(Request $request)
            {
                $data = $request->validate([
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'civility' => 'required|in:Mr,Mrs',
                ]);

                $contact = Contact::create($data);

                return response()->json($contact, 201);
            }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(null, 204);
    }

}
