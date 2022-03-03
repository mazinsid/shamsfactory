<?php

namespace App\Http\Controllers;
use Facade\Ignition\Context\LaravelRequestContext;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\counts;
use App\Models\news;
use Illuminate\Support\Facades\Storage;

use LaravelLocalization;
class ProductController extends Controller
{

    public function welcome()
    {
        $news = news::select('id',
        'title_'.LaravelLocalization::getCurrentLocale().' as title',  
        'detiles_'.LaravelLocalization::getCurrentLocale().' as detiles',     
    'image'
    
    )->take(3)->get();
        $products = product::select('id',
        'category_'.LaravelLocalization::getCurrentLocale().' as category',  
        'name_'.LaravelLocalization::getCurrentLocale().' as name',
        'detiles_'.LaravelLocalization::getCurrentLocale().' as detiles',
             
    'image'
    
    )->get();
    $counts =  counts::first();
    // dd($products);  
       return view('welcome')->with('products',$products)
       ->with('newss' ,$news)->with('counts' , $counts);
    }
    //  index to get prodcuts index controll

    public function index()
    {
       
        return view('prodcut.index')->with('products' , product::all());
    }

    // go to create form
    public function create()
    {
        return view('prodcut.create');
    }
    // store new product 
    public function store(Request $request)
    {

        product::create([
            'category_ar' => $request->category_ar,
            'category_en' => $request->category_en,
            'name_ar' => $request->name_ar ,
            'name_en'=> $request->name_en, 
            'detiles_ar' => $request->detiles_ar,
            'detiles_en' => $request->detiles_en,
            'image' => $request->image->store('images/prodcut','public')
        ]);

        session()->flash('success' , 'product add success');
        return redirect(route('products'));
    }

    // go to edit form

    public function edit(product $product)
    {
        return view('prodcut.update')->with('product' , $product);
    }

    // update product
    public function update(Request $request , product $product)
    {
        $data = $request->only(['category_ar','category_en','name_ar' , 'name_en' , 
        'detiles_ar','detiles_en'
    ]);
    if ($request->hasFile('image')){
        $image = $request->image->store('images','public');
        Storage::disk('public')->delete($product->image);
        $data['image']= $image;
    }
$product->update($data);
session()->flash('success' , 'product update success');
return redirect(route('products'));
    }


    public function destroy($id)
    {
        $products = product::all()->where('id',$id);
        foreach ($products as $product){
            $image = $product->image;
        }
        product::destroy($id);
        Storage::disk('public')->delete($image);
        session()->flash('success' , 'product delete success');
        return view('prodcut.index')->with('products' , product::all());
 
    }
}
