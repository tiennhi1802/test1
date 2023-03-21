<?php

namespace App\Http\Controllers;

use App\Models\OptionToping;
use Illuminate\Http\Request;

class OptionTopingController extends Controller
{
    private $optionToping;
    public function __construct(OptionToping $optionToping)
    {
        $this->optionToping = $optionToping;
    }
    public function index()
    {
        $data = $this->optionToping->latest()->paginate(5);
        return view('admin.option_toping.list', [
            'data' => $data,
        ]);
    }
    public function create()
    {
        return view('admin.option_toping.add');
    }
    public function store(Request $request)
    {
        $this->optionToping->create(
            [
                'name' => $request->name,
                'price' => $request->price,
            ]
        );
        return redirect()->route('optiontoping.index');
    }
    public function edit($id)
    {
        $data = $this->optionToping->find($id);
        return view('admin.option_toping.edit', [
            'data' => $data,
        ]);
    }
    public function update($id, Request $request)
    {
        $this->optionToping->find($id)->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('optiontoping.index');
    }
    public function delete($id)
    {
        $this->optionToping->find($id)->delete();
        return redirect()->route('optiontoping.index');
    }
}
