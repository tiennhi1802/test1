<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OptionSize;
use App\Models\OptionToping;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private  $cart;
    private  $optionSize;
    private  $optionToping;
    public function __construct(Cart $cart, OptionSize $optionSize, OptionToping $optionToping)
    {
        $this->cart = $cart;
        $this->optionSize = $optionSize;
        $this->optionToping = $optionToping;
    }
    public function index()
    {
        $size = [];
        $toping = [];
        $data = $this->cart->all();
        $total = 0;
        foreach ($data as $item) {
            $dataSize = $this->optionSize->find($item->id_size);
            $dataToping = $this->optionToping->find($item->id_toping);
            array_push($size, $dataSize);
            array_push($toping, $dataToping);
            $total += $item->amount;
        }
        $dataCart = $this->cart->all();


        return view('home.cart', [
            'data' => $data,
            'size' => $size,
            'toping' => $toping,
            'total' => $total,
            'dataCart' => $dataCart,
        ]);
    }
    public function delete($id)
    {
        $this->cart->find($id)->delete();
        return redirect()->route('cart');
    }
    public function buy(Request $request)
    {
        $request->validate([
            'check' => ['required'],
            'user_name' => ['required'],
            'address' => ['required'],
            'sdt' => [
                'required',
                'numeric',
                'digits:10',
            ]
        ], [
            'check.required' => 'vui long chon phuong thuc thanh toan',
            'sdt.required' => 'vui long nhập số điên thoại',
            'sdt.numeric' => 'sdt phải ở dạng số',
            'sdt.digits' => 'số điện thoải phải có :digits số',
            'user_name.required' => 'Vui lòng nhập tên người nhận',
            'address.required' => 'Vui lòng địa chỉ giao hàng',
        ]);
        foreach ($this->cart->all() as $item) {
            $item->delete();
        }
        return redirect()->route('cart');
    }
}
