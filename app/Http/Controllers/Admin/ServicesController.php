<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\EditServiceRequest;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;


class ServicesController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@findService',['only' =>['show', 'edit', 'update', 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $services = Service::Name($request->get('name'))->orderBy('id', 'asc')->paginate();
        $services->setPath('');
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateServiceRequest $request)
    {
        Service::create($request->all());
        return redirect()->route('admin.services.index');
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
        return view('admin.services.edit')->with('service', $this->service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(EditServiceRequest $request, $id)
    {
        $this->service->fill($request->all());
        $this->service->save();
        Session::flash('message', 'The Service ' . $this->service->name . ' have been updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $this->service->delete();
        $message = 'The Service ' . $this->service->name . ' have been deleted';
        if ($request->ajax()){
            return response()->json(['messages' => $message]);
        }
        Session::flash('message', $message);
        return redirect()->route('admin.services.index');
    }

    public function findService(Route $route)
    {
        $this->service = Service::findOrFail($route->getParameter('services'));
    }

}
