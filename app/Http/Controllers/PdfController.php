<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use App\Service;

class PdfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function invoice($id) 
    {
    	$user = Auth::user();
        $reservation = Reservation::findOrFail($id);
        $service = Service::findOrFail($reservation->serviceid);
        $date = date('Y-m-d');
        $view =  \View::make('user.reservations.thisreservation', compact('date', 'service', 'reservation', 'user'))->render();

        //return view('user.reservations.thisreservation', compact('data', 'date', 'invoice'));

        $pdf = \App::make('dompdf.wrapper');
        //dd($pdf);
        $pdf->loadHTML($view);

        return $pdf->download('Reservation');
    }
 
    public function getData() 
    {
    	$this->service = service::findOrFail($id);
    }

}
