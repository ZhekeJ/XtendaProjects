<?php namespace Xtenda\Management\Models;

use Model;

/**
 * Model
 */
class Management extends Model
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
    public $table = 'xtenda_management_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        "manager_photo" => "System\Models\File"
    ];
}
