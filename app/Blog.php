<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'active', 'title', 'body',
    		'published_at', 'deleted_at'];


    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }            

}
