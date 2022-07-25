<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $table->string('email');
            $table->string('phone');
            $table->bigInteger('location_id');
            $table->integer('volume');
            $table->integer('tamperature');
            $table->date('date_from');
            $table->date('date_to');

        $rules = [
            'cityId' => 'required|integer',
        ];

        $messages = [
            'cityId.required' => 'cityId is required',
        ];

        $validator = validator($request->all(), $rules, $messages);

        if($validator->fails()){
            return $this->json([
                'status' => 'error',
                'message' => implode(', ', $validator->messages()->all()),
                'errors' => $validator->messages()->all(),
            ], 400);
        }

        $data = $validator->validated(); // to use auth()->user() / null if login failed

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
