<?php

class Rank extends \Illuminate\Database\Eloquent\Model {

    public function users()
    {
        return $this->hasMany('User');
    }

}