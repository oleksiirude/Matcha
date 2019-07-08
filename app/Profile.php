<?php

    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Profile extends Model {
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id',
            'name',
            'surname',
            'age',
            'gender',
            'preferences',
            'bio',
            'avatar',
            'pic1', 'pic2', 'pic3', 'pic4',
            'rating',
            'active'
        ];
        
        public $timestamps = false;
    }
