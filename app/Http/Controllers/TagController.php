<?php

    namespace App\Http\Controllers;
    
    use App\Interest;
    use App\Profile;
    use App\Tag;
    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class TagController extends Controller {
        protected $model_user;
        protected $model_profile;
        protected $model_interest;
        protected $model_tag;
    
        public function __construct()
        {
            $this->middleware(function ($request, $next) {
                $this->model_user = User::where('id', Auth::id())->first();
                $this->model_profile = Profile::where('user_id', Auth::id())->first();;
                $this->model_interest = new Interest;
                $this->model_tag = new Tag;
            
                return $next($request);
            });
        }
        
        // TAG CREATING
        public function setTag(Request $request) {
            $tag = strtolower($request->get('tag'));
    
            if (!preg_match('/^[a-z0-9]{2,20}$/', $tag))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input'
                ]);
            
            $this->saveInTagsTable($tag);
            
            if ($this->saveInInterestsTable($tag) === false)
                return response()->json([
                    'result' => false,
                    'error' => 'You already have this interest'
                ]);
            
            $this->increaseRating();
            
            return response()->json([
                'result' => true
            ]);
        }
        
        protected function saveInTagsTable($tag) {
            if (!$this->model_tag->where('tag', $tag)->first()) {
                $this->model_tag->tag = $tag;
                $this->model_tag->save();
            }
        }
    
        protected function saveInInterestsTable($tag) {
            if (!$this->model_interest->where([
                'user_id' => $this->model_user->id,
                'tag' => $tag
            ])->first()) {
                $this->model_interest->user_id = $this->model_user->id;
                $this->model_interest->tag = $tag;
                $this->model_interest->save();
                return true;
            }
            return false;
        }
        
        protected function increaseRating() {
            if (count($this->model_interest->select('tag')
                ->where('user_id', Auth::id())
                ->get()) < 21) {
                $this->model_profile->increment('rating', 0.1);
            }
        }
    
        //TAG REMOVING
        public function deleteTag($tag) {
            $result = $this->model_interest->where([
                'user_id' => $this->model_user->id,
                'tag' => $tag
            ])->delete();
            
            if ($result) {
                if (!$this->model_interest->where('tag', $tag)->first()) {
                    $this->model_tag->where('tag', $tag)->delete();
                }
                
                $this->decreaseRating();
                
                return response()->json([
                    'result' => true
                ]);
            }
            
            return redirect()->back();
        }
    
        protected function decreaseRating() {
            if (count($this->model_interest->select('tag')
                    ->where('user_id', Auth::id())
                    ->get()) < 20) {
                $this->model_profile->decrement('rating', 0.1);
            }
        }
        
        // FINDING MATCHING TAGS
        
        public function findTagMatches(Request $request) {
            $piece = strtolower($request->get('piece'));
    
            if (!preg_match('/^[a-z0-9]{2,20}$/', $piece))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input'
                ]);
            
            $result = $this->model_tag->where('tag', 'LIKE', '%'.$piece.'%')->get();
            
            if ($result) {
                foreach ($result as $item)
                    $data[] = $item->tag;
                
                return response()->json([
                    'result' => true,
                    'matches' => $data
                ]);
            }
    
            return response()->json([
                'result' => false
            ]);
        }
    }
