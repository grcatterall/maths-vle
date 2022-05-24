<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolAddressController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $data = \App\Models\Schools\SchoolAddress::create([
            'Address1' => $request->get('address1'),
            'Address2' => $request->get('address2'),
            'Postcode' => $request->get('postcode'),
            'County' => $request->get('county'),
            'Country' => $request->get('country'),
        ]);

        return $data->id;
        return response()->json(array('success' => true, 'id' => $data->id));
    }
}
