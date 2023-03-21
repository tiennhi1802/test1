<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function index()
    {
        $data = $this->category->latest()->paginate(5);
        return view('admin.category.list', [
            'data' => $data,
        ]);
    }
    public function create()
    {
        return view('admin.category.add');
    }
    public function store(Request $request)
    {
        $this->category->create(
            [
                'category_name' => $request->category_name,
            ]
        );
        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        $data = $this->category->find($id);
        return view('admin.category.edit',[
            'data' => $data,
        ]);
    }
    public function update($id, Request $request)
    {
         $this->category->find($id)->update([
            'category_name' => $request->category_name,
        ]);
        return redirect()->route('category.index');

    }
    public function delete($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('category.index');
    }
}
