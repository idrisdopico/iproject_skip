<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'abr', 'level'];

    /**
     * Get the classes for the education
     */
    public function classes()
    {
        return $this->hasMany('App\MyClass');
    }

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}
