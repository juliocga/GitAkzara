<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AEditReservationRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'forwho'    => 'required',
            'whoid'     => 'required|numeric',
            'service'   => 'required',
            'serviceid' => 'required|numeric',
            'when'      => 'required|date',
            'time'      => 'required',
            'status'    => 'required|in:created,confirmed,canceled,completed,missed',
        ];
    }

}
