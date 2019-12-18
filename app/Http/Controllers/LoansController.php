<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function index(){
        $loans = [
            [
                'id_loan' => 123544,
                'id_equipment' => 10,
                'start_date' => '2019-10-21 15:21:11',
                'end_date' => '2019-10-21 17:21:11',
                'status' => 0,
            ],
            [
                'id_loan' => 123530,
                'id_equipment' => 10,
                'start_date' => '2019-10-21 15:21:11',
                'end_date' => '2019-10-21 17:21:11',
                'status' => 1,
            ],
            [
                'id_loan' => 123522,
                'id_equipment' => 15,
                'start_date' => '2019-10-22 10:21:11',
                'end_date' => '2019-10-22 21:15:11',
                'status' => 1,
            ],
        ];
        return view('loans/index')->with('loans',$loans);
    }
}
