<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finance;
use Orchid\Platform\Http\Controllers\Controller;

class FinanceController extends Controller
{
    public function index()
    {
        $finances = Finance::all();
        return view("finances.index", compact("finances"));
    }

    public function create()
    {
        return view("finances.create");
    }

    public function store(Request $request)
    {
        $finance = new Finance();
        $finance->date = $request->input('date');
        $finance->income = $request->input('income');
        $finance->expense = $request->input('expense');
        $finance->save();
        return redirect()->route('finances.index');
    }

    public function edit($id)
    {
        $finance = Finance::find($id);
        return view('finances.edit', compact('finance'));
    }

    public function update(Request $request, $id)
    {
        $finance = Finance::find($id);
        $finance->date = $request->input('date');
        $finance->income = $request->input('income');
        $finance->expense = $request->input('expense');
        $finance->save();
        return redirect()->route('finances.index');
    }

    public function destroy($id)
    {
        $finance = Finance::find($id);
        $finance->delete();
        return redirect()->route('finances.index');
    }
}
