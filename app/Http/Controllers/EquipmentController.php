<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{

    public function search(){
        return view('equipment.search');
    }

    public function details($id){
        $equipment = [
            'SO' => 'Ubuntu',
            'ID' => 19,
            'model' => 'Pavilion-17wla',
            'brand' => 'HP',
            'software' => [
                [
                    'name' => 'Office',
                    'version' => '2016'
                ],
                [
                    'name' => 'PhpStorm',
                    'version' => '2019.3'
                ],
                [
                    'name' => 'Eset',
                    'version' => '8'
                ]
            ]
        ];
        return view('equipment.details')->with('equipment',$equipment);
    }
}
