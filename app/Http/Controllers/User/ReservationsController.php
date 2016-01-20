<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UCreateReservationRequest;
use App\Reservation;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $reservations = Reservation::Service($request->get('service'))->Status($request->get('status'))->Whoid(Auth::user()->id)->paginate();
        $reservations->setPath('');
        return view('user.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $route)
    {
        $serviceid = $route->input('serviceid');
        $service = Service::findOrFail($serviceid);
        return view('user.reservations.create')->with('service', $service);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UCreateReservationRequest $request)
    {
        $user = Auth::user();
        $reservation = new Reservation;
        $reservation->fill(['forwho' => $user->full_name, 'whoid' => $user->id, 'status' => 'created']);
        $reservation->fill($request->all());
        $reservation->save();
        return redirect()->route('user.reservations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        dd('hi');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function generatepdf($id){
        $reservation = Reservation::findOrFail($id);
        dd($reservation);
    }

}
