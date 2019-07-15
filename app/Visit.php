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
<<<<<<< HEAD
            'watcher_id', 'viewed_id', 'date'
=======
            'watcher_id',
            'viewed_id',
            'deleted_by_watcher',
            'deleted_by_viewed',
            'date'
>>>>>>> master
        ];

        protected $primaryKey = 'id';

        public $timestamps = false;
    }
