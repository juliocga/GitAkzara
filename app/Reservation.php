<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reservations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['forwho', 'whoid', 'service', 'serviceid', 'when', 'time', 'status'];

    public function scopeService($query, $name)
    {
        if (trim($name) != "") {
            $query->where('service', "ILIKE", "%$name%");
        }
    }

    public function scopeWhoid($query, $id)
    {
        $query->where('whoid', '=', $id);
    }

    public function scopeStatus($query, $status)
    {
        if (trim($status) != "") {
            $query->where('status', '=', $status);
        }
    }
}
