<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AEditReservationRequest;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class ReservationsController extends Controller {


	public function __construct()
	{
		$this->beforeFilter('@findReservation',['only' =>['show', 'edit', 'update', 'destroy']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$reservations = Reservation::Service($request->get('name'))->Status($request->get('status'))->orderBy('id','asc')->paginate();
		$reservations->setPath('');
		return view('admin.reservations.index', compact('reservations'));
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
	public function show()
	{
		return view('admin.reservations.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.reservations.edit')->with('reservation', $this->reservation);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(AEditReservationRequest $request, $id)
	{
		$this->reservation->fill($request->all());
        $this->reservation->save();
        Session::flash('message', 'The booking for: ' . $this->reservation->forwho . ' have been updated');
        return redirect()->back();
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

    public function viewcalendars(){
        return view('admin.reservations.viewcalendar');
    }

	public function findReservation(Route $route)
	{
		$this->reservation = Reservation::findOrFail($route->getParameter('reservations'));
	}
}
