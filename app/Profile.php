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
            'login',
            'name',
            'surname',
            'age',
            'gender',
            'preferences',
            'bio',
            'avatar',
            'photo1', 'photo2', 'photo3', 'photo4',
            'rating',
        ];
    
        protected $primaryKey = 'user_id';
        
        public $timestamps = false;
    }
