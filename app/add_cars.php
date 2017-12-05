<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class add_cars extends Model {
	use ObservantTrait;
	
    protected $table = 'add_cars';

}
