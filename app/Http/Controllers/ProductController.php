<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{
    public function showView(){
        return view('ch10');
    }
    
    public function selectAll(){
        $prod = Product::all();
        return view('showResult', ['data'=>'搜尋所有資料，資料為：'.$prod]);
    }
    
    public function insertData($name, $price){
            $data = [
            'name' => $name, 
            'price' => $price,
        ];
        $prod = Product::create($data); 
        return view('showResult', ['data'=>'新增一筆資料，資料為：'.$prod]); 
    }
    
    public function updateData($id, $name, $price){
        $prod = Product::findOrFail($id);
        $data = [
            'name' => $name,
            'price' => $price,
        ];
        $prod->update($data);
        return view('showResult', ['data'=>'更新一筆資料，更新後的資料為：'.$prod]); 
    }
    
    public function deleteData($id){
        $prod = Product::findOrFail($id);
        $prod->delete();
        return view('showResult', ['data'=>"刪除id=".$id."完成"]);
    }

}
