<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
	protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'price', 'length', 'urlimage', 'urlinfo'];

    public function scopeCorporal($query){
            $query->whereType('corporal');
    }
    public function scopeFacial($query){
        $query->whereType('facial');
    }
    public function scopeRoom($query){
        $query->whereType('room');
    }
    public function scopeOther($query){
        $query->whereType('other');
    }
    public function scopeName($query, $name){
        if (trim($name) != ""){
            $query->where('name', "ILIKE", "%$name%");
        }
    }
}
