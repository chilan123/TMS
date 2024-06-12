<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uniorinstitute;
use App\Models\LoginAcd;
use Config;

class UniorinstituteController extends Controller
{
    private static $mainDivType = '1'; //Config::get('constants.main_division.academic');

    /**
     * Save the given uniorinstitute as a new entry
     * @param Request $request post request with data
     * @return View uniorinstitute view redirection
     */
    public function storeuni(Request $request)
    {
        $Uniorinstitute = new Uniorinstitute;
        $Uniorinstitute->name = $request->uniorinstitutename;
        $Uniorinstitute->names = $request->uniorinstitutenames;
        $Uniorinstitute->save();

        return redirect()->back();
    }

    /**
     * Returns the view for uniorinstitutes with data
     * @return View uniorinstitute view
     */
    public function viewdata()
    {
        $data = Uniorinstitute::where('typefac', '=', static::$mainDivType)->get();
        return view('pages.uniorinstitute.uniorinstitute')->with('uniorinstitutes', $data);
    }

    /**
     * Delete given uniorinstitute and returns the view for uniorinstitutes by a redirection
     * @param Number $id uniorinstitute id to be deleted
     * @return View uniorinstitute view
     */
    public function deleteuniorinstitute($id)
    {
        $sindgledatarow = Uniorinstitute::find($id);
        $sindgledatarow->delete();

        return redirect()->back();
    }

    /**
     * Rreturns the view for updating uniorinstitutes of given uniorinstitute id
     * @param Number $id uniorinstitute id to be updated
     * @return View uniorinstitute update view
     */
    public function updateuniorinstituteview($id)
    {
        $sindgledatarow = Uniorinstitute::find($id);
        return view('pages.uniorinstitute.updateuniorinstitute')->with('singleuserdata', $sindgledatarow);
    }

    /**
     * Update given uniorinstitute and returns the view for uniorinstitutes by a redirection
     * @param Request $request post request with uniorinstitute data
     * @return View uniorinstitute view
     */
    public function update(Request $request)
    {



        $id = $request->uniorinstituteid;
        $uniorinstitutename = $request->uniorinstitutename;
        $uniorinstitutenames = $request->uniorinstitutenames;
        $sindgledatarow = Uniorinstitute::find($id);
        $sindgledatarow->name = $uniorinstitutename;
        $sindgledatarow->names = $uniorinstitutenames;
        $sindgledatarow->update();

        return redirect('/university');
    }

    // TODO :: move following functions to a new controller
    public function logoutfun()
    { //return view('pages.login');

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
