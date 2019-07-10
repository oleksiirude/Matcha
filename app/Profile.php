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
            'photo1', 'photo2', 'photo3', 'photo4',
            'rating',
            'active'
        ];
    
        protected $primaryKey = 'user_id';
        
        public $timestamps = false;
    }
