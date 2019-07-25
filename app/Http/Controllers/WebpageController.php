<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebpageController extends Controller{

  public function index(){
    $data = file_get_contents(base_path('public/storage/data.json'));
    return view('webpages.index')->with('data', json_decode($data, true));
  }

  public function store(Request $request) {

    try {

        $productData = Storage::disk('local')->exists('public/data.json') ? json_decode(Storage::disk('local')->get('public/data.json')) : [];

        $inputData = $request->only(['product', 'quantity', 'price', 'datetime_submitted', 'total']);

        array_push($productData,$inputData);

        Storage::disk('local')->put('public/data.json', json_encode($productData));

        return ['message' => 'Details Submitted!'];

    } catch(Exception $e) {

        return ['error' => true, 'message' => $e->getMessage()];
    }
  }

  public function getProducts(){
    $jsonString = file_get_contents(base_path('public/storage/data.json'));
     $data = json_decode($jsonString, true);
     return $data;
  }

  public function getSum(){
    $jsonString = file_get_contents(base_path('public/storage/data.json'));
    $data = json_decode($jsonString, true);
      if($data){
        $sum = 0;
        foreach($data as $key => $value) {
        $sum += $value['total'];
        }
        return $sum;
      }
  }
}
