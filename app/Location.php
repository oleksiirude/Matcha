<?php

    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Location extends Model {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id',
            'country',
            'region',
            'city',
            'gps_code',
            'latitude',
            'longitude',
            'allow_location'
        ];
        
        protected $primaryKey = 'user_id';
        
        public $timestamps = false;
    }
