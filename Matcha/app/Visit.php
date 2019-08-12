<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Visit extends Model
    {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'watcher',
            'viewed',
            'deleted_by_watcher',
            'deleted_by_viewed',
            'date'
        ];

        protected $primaryKey = 'id';

        public $timestamps = false;
    }
