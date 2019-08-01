<?php

    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Notification extends Model
    {
        protected $fillable = [
            'user_id',
            'from_id',
            'login',
            'link',
            'title',
            'read',
            'date'
        ];
    
        protected $primaryKey = 'user_id';
    
        public $timestamps = false;
    }
