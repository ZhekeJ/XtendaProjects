<?php namespace Xtenda\Directors\Models;

use Model;

/**
 * Model
 */
class Director extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'xtenda_directors_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        "director_photo" => "System\Models\File"
    ];

}
