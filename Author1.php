<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author1 extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'speed','Time','J1939EngineHour','Voltage','IMEI','breakpointdata','PhoneNumber','HighRPMthreshold','BreakDataMode' ,'VIN'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   //  $table->string('speed','Time')->nullable();
    public $timestamps = false;
    protected $hidden = [];
    protected $primaryKey = 'VIN';
    protected $table = 'obd1';
   
}