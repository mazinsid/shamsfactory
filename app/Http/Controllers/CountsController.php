<?php

namespace App\Http\Controllers;

use App\Models\counts;
use Illuminate\Http\Request;

class CountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counts = counts::first();
        return view('count.index')->with('counts' , $counts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\counts  $counts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, counts $counts)
    {
        
        $counts->update([
            'team_work' => $request->team_work ,
            'experience'=> $request->experience, 
            'clients' => $request->clients,
            'award_won' => $request->award_won,    
        ]);

        session()->flash('status' , 'Factory stats update success');
        return redirect(route('count'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\counts  $counts
     * @return \Illuminate\Http\Response
     */
    public function destroy(counts $counts)
    {
        //
    }
}
