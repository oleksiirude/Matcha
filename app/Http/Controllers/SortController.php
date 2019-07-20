<?php

    namespace App\Http\Controllers;
    
    class SortController extends Controller {
        
        protected $profiles;
        protected $params;
        
        public function __construct($profiles, $params) {
            $this->profiles = $profiles;
            $this->params = $params;
        }
        
        public function sort() {
            if ($this->params['order'] === 'descending')
                $sorted = $this->profiles
                    ->sortByDesc($this->params['sort'])
                    ->values()->all();
            else
                $sorted = $this->profiles
                    ->sortBy($this->params['sort'])
                    ->values()->all();
            if ($this->params['sort'] === 'age')
                $sorted = $this->putWithoutAgeDown($sorted);
            return $sorted;
        }
        
        public static function sortByDefault($profiles) {
            $sorted = collect($profiles)
                ->sortByDesc('rating')
                ->sortByDesc('matches')
                ->sortBy('distance')
                ->values()->all();
        
            return $sorted;
        }
    
        protected function putWithoutAgeDown($sorted) {
            $box = collect();
        
            $i = 0;
            foreach ($sorted as $item) {
                if (!$item->age) {
                    $box[] = $item;
                    unset($sorted[$i]);
                }
                $i++;
            }
        
            $i = 0;
            while ($i < count($box)) {
                $sorted[] = $box[$i];
                $i++;
            }
        
            return $sorted;
        }
    }
