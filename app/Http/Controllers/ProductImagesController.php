<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_images;
use Illuminate\Support\Facades\Storage;
class ProductImagesController extends Controller
{
    //go to demo page

    public function demo($id)
    {
        return view('prodcut.demo')->with('product_id' , $id)->
        with('demos' ,product_images::all()->where('product_id',$id));
    }
    // 
    public function store(Request $request)
    {

        product_images::create([
            'product_id' => $request->product_id,
            'image' => $request->image->store('images/demo','public')
        ]);

        session()->flash('success' , 'product images add success');
        return view('prodcut.demo')->with('product_id' , $request->product_id)->
        with('demos' ,product_images::all()->where('product_id',$request->product_id));
    }

    public function destroy($id)
    {
        $demos = product_images::all()->where('id',$id);
        foreach ($demos as $demo){
            $product_id = $demo->product_id;
            $image = $demo->image;
        }
        product_images::destroy($id);
        Storage::disk('public')->delete($image);
        session()->flash('success' , 'product images delete success');
        return view('prodcut.demo')->with('product_id' , $product_id)->
        with('demos' ,product_images::all()->where('product_id',$product_id));
 
    }
}
