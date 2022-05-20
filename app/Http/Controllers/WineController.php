<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function store(Request $request)
    {
        $wine = new Wine();
        $wine->name = $request->name;
        $wine->type = $request->type;
        $wine->price = $request->price;
        $wine->quantity = $request->quantity;
        $wine->region = $request->region;
        $wine->save();
        return redirect('/wines-list');
    }

    public function edit($id)
    {
        $wine = Wine::find($id);
        return view('pages/edit-wine', compact('wine'));
    }

    public function update(Request $request, $id)
    {
        $wine = Wine::find($id);
        $wine->name = $request->name;
        $wine->type = $request->type;
        $wine->price = $request->price;
        $wine->quantity = $request->quantity;
        $wine->region = $request->region;
        $wine->save();
        return redirect('/wines-list');
    }

    public function delete($id)
    {
        $wine = Wine::find($id);
        $wine->delete();
        return redirect('/wines-list');
    }

    public function index()
    {
        // show all wines order by recently added
        $wines = Wine::orderBy('created_at', 'desc')->get();
        return view('pages/wines-list', compact('wines'));
    }
}
