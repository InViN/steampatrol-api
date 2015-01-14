<?php

class User extends \Illuminate\Database\Eloquent\Model {

    protected $fillable = array('openid_uniqid');

    public function rank()
    {
        return $this->belongsTo('Rank');
    }

} 