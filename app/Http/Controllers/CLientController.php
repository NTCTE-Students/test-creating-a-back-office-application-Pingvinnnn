<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Orchid\Platform\Http\Controllers\Controller;


class CLientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view("client.index", compact("clients"));
    }

    public function create()
    {
        return view("client.create");
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->address = $request->input('address');
        $client->save();
        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->address = $request->input('address');
        $client->save();
        return redirect()->route('client.index');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('client.index');
    }
}
