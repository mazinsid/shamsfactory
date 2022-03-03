<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\Storage;

use LaravelLocalization as LaravelLocalization;
class NewsController extends Controller
{
    // go to index news page
    public function index()
    {
    return view('news.index')->with('newss',news::all());
    }

     // go to create form
     public function create()
     {
        $news = news::select('id',
        'title_'.LaravelLocalization::getCurrentLocale().' as title',  
        'detiles_'.LaravelLocalization::getCurrentLocale().' as detiles',     
    'image'
    
    )->get();
         return view('news.create')->with('newss',$news);
     }

     public function store(Request $request)
     {
 
        news::create([
             'title_ar' => $request->title_ar ,
             'title_en'=> $request->title_en, 
             'detiles_ar' => $request->detiles_ar,
             'detiles_en' => $request->detiles_en,
             'image' => $request->image->store('images/news','public')
         ]);
 
         session()->flash('success' , 'news add success');
         return redirect(route('news'));
     }

      // go to edit form

    public function edit(news $news)
    {
        return view('news.update')->with('newss' , $news);
    }

    // update news
    public function update(Request $request , news $news)
    {
        $data = $request->only(['title_ar' , 'title_en' , 
        'detiles_ar','detiles_en'
    ]);
    if ($request->hasFile('image')){
        $image = $request->image->store('images','public');
        Storage::disk('public')->delete($news->image);
        $data['image']= $image;
    }
$news->update($data);
session()->flash('success' , 'news update success');
return redirect(route('news'));
    }


    public function destroy($id)
    {
        $newss = news::all()->where('id',$id);
        foreach ($newss as $news){
            $image = $news->image;
        }
        news::destroy($id);
        Storage::disk('public')->delete($image);
        session()->flash('success' , 'newss  delete success');
        return view('news.index')->with('newss',news::all());
 
    }
}
