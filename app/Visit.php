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
            'watcher_id', 'viewed_id', 'date'
        ];

        protected $primaryKey = 'id';

        public $timestamps = false;
    }
