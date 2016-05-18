<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['education_id', 'year', 'letter'];
	
	/**
     * Get the Education record associated with the Class.
     */
    public function education()
    {
        return $this->belongsTo('App\Education');
    }

    /**
     * Get the Users for the Class
     */
    public function users()
    {
        return $this->hasMany('App\User', 'class_id');
    }
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * User full_class Attribute
     */
    public function getFullClassAttribute() {
        return strtoupper($this->education->abr) . $this->year . ucfirst($this->letter);
    }
}
