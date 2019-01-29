<?php

namespace App\Models\Charter;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    protected $table = 'charter_resources';
	
	protected $appends='duration';
	
	protected function getDurationAttribute(){
		return json_decode($this->trip_duration);
	}
	
    //
}
