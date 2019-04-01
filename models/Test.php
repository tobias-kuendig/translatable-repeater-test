<?php namespace OFFLINE\Repeatertranslate\Models;

use Model;

/**
 * Model
 */
class Test extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'offline_repeatertranslate_test';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $jsonable = ['values'];
}
