<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author1 extends Model
{
   
  // $table->string('address')->nullable();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'obd1';
     
    protected $fillable = [
        'speed','Time','J1939EngineHour','Voltage','IMEI','breakpointdata','PhoneNumber','HighRPMthreshold','BreakDataMode'
    ];
public $timestamps = false;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}