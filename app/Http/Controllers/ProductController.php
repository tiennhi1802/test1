<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\OptionSize;
use App\Models\OptionToping;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $product;
    private $category;
    private $optionSize;
    private $optionToping;
    private $cart;
    public function __construct(Product $product, Category $category, OptionSize $optionSize, OptionToping $optionToping, Cart $cart)
    {
        $this->product = $product;
        $this->category = $category;
        $this->optionSize = $optionSize;
        $this->optionToping = $optionToping;
        $this->cart = $cart;
    }
    public function show()
    {
        $data = $this->product->latest()->paginate(8);
        $dataCategory = $this->category->all();
        $dataCart = $this->cart->all();
        return view('home.index', [
            'data' => $data,
            'dataCategory' => $dataCategory,
            'dataCart' => $dataCart,
        ]);
    }
    public function menu($name)
    {
        $data = $this->product->where('category', '=', $name)->latest()->paginate(8);
        $dataCategory = $this->category->all();
        $dataCart = $this->cart->all();


        return view('home.index', [
            'data' => $data,
            'dataCategory' => $dataCategory,
            'dataCart' => $dataCart,

        ]);
    }
    public function productDetail($id)
    {
        
        $dataProduct = $this->product->find($id);
        $dataOptionSize = $this->optionSize->all();
        $dataOptionToping = $this->optionToping->all();
        $dataCart = $this->cart->all();

        return view('home.product', [
            'dataProduct' => $dataProduct,
            'dataOptionSize' => $dataOptionSize,
            'dataOptionToping' => $dataOptionToping,
            'dataCart' => $dataCart,

        ]);
    }
    public function addCart(Request $request, $id)
    {
        $request->validate([
            'name_size' => ['required'],
            'name_toping' => ['required'],
        ], [
            'name_size.required' => 'vui lòng chọn size',
            'name_toping.required' => 'vui lòng chọn toping',
        ]);
        $dataProduct = $this->product->find($id);
        $dataSize = $this->optionSize->find($request->name_size);
        $dataToping = $this->optionToping->find($request->name_toping);

        $total = $dataProduct->product_price + $dataSize->price + $dataToping->price;
        $this->cart->create([
            'product_img' => $dataProduct->product_img,
            'product_name' => $dataProduct->product_name,
            'product_price' => $dataProduct->product_price,
            'amount' => $total,
            'id_size' => $request->name_size,
            'id_toping' => $request->name_toping,
        ]);
        return redirect()->route('cart');
    }
    public function index()
    {
        $data = $this->product->latest()->paginate(10);
        return view('admin.product.list', [
            'data' => $data,
        ]);
    }
    public function create()
    {
        $category = $this->category->all();
        return view('admin.product.add', [
            'category' => $category
        ]);
    }
    public function store(Request $request)
    {
        $fileName = $request->product_img->getClientOriginalName();
        $path = $request->file('product_img')->storeAs('public/product', $fileName);
        $this->product->create([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'product_price' => $request->product_price,
            'product_desc' => $request->product_desc,
            'product_img' => Storage::url($path),
        ]);
        return redirect()->route('product.index');
    }
    public function edit($id)
    {
        $category = $this->category->all();
        $product = $this->product->find($id);
        return view('admin.product.edit', [
            'category' => $category,
            'product' => $product,

        ]);
    }
    public function update(Request $request, $id)
    {
        if (isset($request->product_img)) {
            $fileName = $request->product_img->getClientOriginalName();
            $path = $request->file('product_img')->storeAs('public/product', $fileName);
            $x = Storage::url($path);
        } else {
            $x = $this->product->find($id)->product_img;
        }
        $this->product->find($id)->update([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_desc' => $request->product_desc,
            'category' => $request->category,
            'product_img' => $x,
        ]);
        return redirect()->route('product.index');
    }
    public function delete($id)
    {
        $this->product->find($id)->delete();
        return redirect()->route('product.index');
    }
}
