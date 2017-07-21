<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Game.
 *
 * @author  The scaffold-interface created at 2017-07-20 10:13:27am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Game extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'games';

	
}
