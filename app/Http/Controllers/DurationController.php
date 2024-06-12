<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duration;

class DurationController extends Controller
{
    /**
     * Save the given duration as a new entry
     * @param Request $request post request with data
     * @return View duration view redirection
     */
    public function store(Request $request)
    {
        $duration = new Duration;
        $duration->name = $request->durationname;
        $duration->names = $request->durationnames;
        $duration->save();

        return redirect()->back();
    }

    /**
     * Returns the view for durations with data
     * @return View duration view
     */
    public function viewdata()
    {
        $data = Duration::all();
        return view('pages.duration.duration')->with('data', $data);
    }

    /**
     * Delete given duration and returns the view for durations by a redirection
     * @param Number $id duration id to be deleted
     * @return View duration view
     */
    public function deleteduration($id)
    {
        $singleDataRow = Duration::find($id);
        $singleDataRow->delete();

        return redirect()->back();
    }

    /**
     * Returns the view for updating durations of given duration id
     * @param Number $id duration id to be updated
     * @return View duration update view
     */
    public function updatedurationview($id)
    {
        $singleDataRow = Duration::find($id);
        return view('pages.duration.updateduration')->with('singleuserdata', $singleDataRow);
    }

    /**
     * Update given duration and returns the view for durations by a redirection
     * @param Request $request post request with duration data
     * @return View duration view
     */
    public function update(Request $request)
    {
        $id = $request->durationid;
        $durationname = $request->durationname;
        $durationnames = $request->durationnames;
        $singleDataRow = Duration::find($id);
        $singleDataRow->name = $durationname;
        $singleDataRow->names = $durationnames;
        $singleDataRow->update();

        return redirect('/duration');
    }

    // TODO :: move following functions to a new controller
    public function logoutfun()
    { 
        if (session()->has('logdata')) {
            session()->forget('logdata');
            return view('pages.home');
        } else {
            return view('pages.login');
        }
    }

    //////----buttons
    public function deactiveuser($id)
    {
        return redirect()->back();
    }

    public function activeuser($id)
    {
        return redirect()->back();
    }
}
