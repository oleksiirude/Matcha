<?php

    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Interest extends Model {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id',
            'tag'
        ];
        
        protected $primaryKey = 'user_id';
        
        public $timestamps = false;
    }
