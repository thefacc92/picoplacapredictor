<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class PicoPlacaController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        setlocale(LC_TIME, 'English');
        $this->fill_dayPlate();
    }

    private function fill_dayPlate() {
        $this->dayPlate = array("monday"=>["1","2"],
                                "tuesday"=>["3","4"],
                                "wednesday"=>["5","6"],
                                "thursday"=>["7","8"],
                                "friday"=>["9","0"]);
    }

    /**
     * Looking for availability based on date, time and license plate
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request) {
        $data = $request->all();
        $time = explode(":", $data["time"]);
        $day = date("l", strtotime($data["date"]));
        $lastDigit = substr($data["licensePlate"], -1);
        $rules = $this->dayPlate;

        if ((($time[0] >= "05") && ($time[1] >= "00")) && (($time[0] <= "20")))
            $allowed = in_array($lastDigit, $rules[strtolower($day)]);
        else
            $allowed = false;

        if (!$allowed)
            return Redirect::to('/')->with('success', 'Your car is allowed to circulate.');
        else
            return Redirect::to('/')->with('error', 'Your car is not allowed to circulate.');
    }
}
