<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Support\Collection as Collection;
    
    class SortController extends Controller {
        
        protected $profiles;
        protected $params;
        
        public function __construct(Collection $profiles, $params) {
            $this->profiles = $profiles;
            $this->params = $params;
        }
        
        public function sortMain() {
            $params = $this->specifyParams();
            
            if ($this->params['order'] === 'descending')
                $params['direction'] = 'DESC';
            else
                $params['direction'] = 'ASC';
            
            $sorted = $this->sortByParams($params);
            
            return $sorted;
        }
        
        public function specifyParams() {
            if ($this->params['sort'] === 'interests') {
                $params = [
                    'first' => 'interests_matched',
                    'second' => 'distance',
                    'third' => 'rating'
                ];
            } elseif ($this->params['sort'] === 'rating') {
                $params = [
                    'first' => 'rating',
                    'second' => 'distance',
                    'third' => 'interests_matched'
                ];
            } elseif ($this->params['sort'] === 'age') {
                $params = [
                    'first' => 'age',
                    'second' => 'distance',
                    'third' => 'interests_matched'
                ];
            } else {
                $params = [
                    'first' => 'distance',
                    'second' => 'matches',
                    'third' => 'rating'
                ];
            }
            
            return $params;
        }
        
        public function sortByParams($params) {
            if ($params['direction'] === 'DESC')
                $result = $this->sortByDesc($params);
            else
                $result = $this->sortByAsc($params);
            
            return $result;
        }
        
        public function sortByDesc($params) {
            if ($params['first'] === 'interests_matched' || $params['first'] === 'rating') {
                return $this->profiles->sortByDesc($params['first'])
                    ->groupBy($params['first'])
                    ->map(function (Collection $profiles) use ($params) {
                        return $profiles->sortBy($params['second'])
                            ->groupBy($params['second'])
                            ->map(function (Collection $profiles) use ($params){
                                return $profiles->sortByDesc($params['third']);
                        });
                })->flatten(2);
            }
            elseif ($params['first'] === 'age') {
                return $this->profiles->sortByDesc($params['first'])
                    ->groupBy($params['first'])
                    ->map(function (Collection $profiles) use ($params) {
                        return $profiles->sortBy($params['second'])
                            ->groupBy($params['second'])
                            ->map(function (Collection $profiles) use ($params){
                                return $profiles->sortByDesc($params['third']);
                    });
                })->flatten(2);
            }
            elseif ($params['first'] === 'distance') {
                return $this->profiles->sortByDesc($params['first'])
                    ->groupBy($params['first'])
                    ->map(function (Collection $profiles) use ($params) {
                        return $profiles->sortByDesc($params['second'])
                            ->groupBy($params['second'])
                            ->map(function (Collection $profiles) use ($params){
                                return $profiles->sortByDesc($params['third']);
                    });
                })->flatten(2);
            }
        }
        
        public function sortByAsc($params) {
            if ($params['first'] === 'interests_matched' || $params['first'] === 'rating') {
                return $this->profiles->sortBy($params['first'])
                    ->groupBy($params['first'])
                    ->map(function (Collection $profiles) use ($params) {
                        return $profiles->sortBy($params['second'])
                            ->groupBy($params['second'])
                            ->map(function (Collection $profiles) use ($params){
                                return $profiles->sortByDesc($params['third']);
                            });
                    })->flatten(2);
            }
            elseif ($params['first'] === 'age') {
                return $this->profiles->sortBy($params['first'])
                    ->groupBy($params['first'])
                    ->map(function (Collection $profiles) use ($params) {
                        return $profiles->sortBy($params['second'])
                            ->groupBy($params['second'])
                            ->map(function (Collection $profiles) use ($params){
                                return $profiles->sortByDesc($params['third']);
                    });
                })->flatten(2);
            }
            elseif ($params['first'] === 'distance') {
                return $this->profiles->sortBy($params['first'])
                    ->groupBy($params['first'])
                    ->map(function (Collection $profiles) use ($params) {
                        return $profiles->sortByDesc($params['second'])
                            ->groupBy($params['second'])
                            ->map(function (Collection $profiles) use ($params){
                                return $profiles->sortByDesc($params['third']);
                    });
                })->flatten(2);
            }
        }
        
        public static function sortByDefault(Collection $profiles) {
            return $profiles->sortBy('distance')
                ->groupBy('distance')
                ->map(function (Collection $profiles) {
                    return $profiles->sortByDesc('interests_matched')
                        ->groupBy('matches')
                        ->map(function (Collection $profiles) {
                            return $profiles->sortByDesc('rating');
                });
            })->flatten(2);
        }
    }
