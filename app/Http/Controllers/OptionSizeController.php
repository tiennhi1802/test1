<?php

namespace App\Http\Controllers;

use App\Models\OptionSize;
use Illuminate\Http\Request;

class OptionSizeController extends Controller
{
    private $optionSize;
    public function __construct(OptionSize $optionSize)
    {
        $this->optionSize = $optionSize;
    }
    public function index()
    {
        $data = $this->optionSize->latest()->paginate(5);
        return view('admin.option_size.list', [
            'data' => $data,
        ]);
    }
    public function create()
    {
        return view('admin.option_size.add');
    }
    public function store(Request $request)
    {
        $this->optionSize->create(
            [
                'name' => $request->name,
                'price' => $request->price,
            ]
        );
        return redirect()->route('optionsize.index');
    }
    public function edit($id)
    {
        $data = $this->optionSize->find($id);
        return view('admin.option_size.edit',[
            'data' => $data,
        ]);
    }
    public function update($id, Request $request)
    {
         $this->optionSize->find($id)->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('optionsize.index');

    }
    public function delete($id)
    {
        $this->optionSize->find($id)->delete();
        return redirect()->route('optionsize.index');
    }
}
