<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{
    public function show()
    {
        $datas = todo::all();

        return view('welcome', compact('datas'));
    }
    public function save()
    {
        request()->validate(['dataname' => 'required|min:3|max:20',]);

        todo::create([
            'name' => request('dataname'),



        ]);

        return redirect()->route('show')->with('message', 'Sucessfully Added to list');
    }
    public function remove($datas)
    {
        $data = todo::where('ids', $datas);
        $data->delete();
        return redirect()->route('show')->with('message', 'Sucessfully removed from the list');
    }
    public function update($datas)
    {
        $d = todo::where('ids', $datas)->first();
        return view('update', compact('d'));
    }
    public function edit()
    {
        request()->validate(['dataname' => 'required|min:3|max:20',]);
        $data = todo::where('ids', request('id'));
        $data->update([
            'name' => request('dataname'),
        ]);

        return redirect()->route('show')->with('message', 'Sucessfully Updated the list');
    }
}
