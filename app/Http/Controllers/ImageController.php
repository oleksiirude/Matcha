<?php

    namespace App\Http\Controllers;
    
    use App\Profile;
    use Auth;
    use Illuminate\Http\Request;
    use Intervention\Image\ImageManager;
    
    class ImageController extends Controller {
        protected $manager;
        protected $model_profile;
    
        public function __construct()
        {
            $this->middleware(function ($request, $next) {
                $this->model_profile = Profile::find(Auth::id());
                $this->manager = new ImageManager();
                
                return $next($request);
            });
        }
        
        public function uploadAvatar(Request $request) {
            if (($result = $this->validator($request, 'avatar')) !== true)
                return response()->json($result);
            
            $avatar = $request->file('avatar');
            $extension = $avatar->getClientOriginalExtension();
            $savePath = public_path() . '/images/profiles/' .
                auth()->user()->login . '/' . 'avatar' . '.' . $extension;
            
            $this->manager->make($avatar)
                ->heighten(640)
                ->orientate()
                ->save($savePath);
            
            $path = str_replace(public_path() . '/','', $savePath);
            
            $this->insertAvatarToDB($path);
            
            return response()->json([
                'result' => true,
                'path' => $path
            ]);
        }
        
        public function uploadPhoto(Request $request) {
            
            $number = $request->request->get('photo');
            
            if (!preg_match('/^[1-4]$/', $number))
                return redirect()->back();
            
            if (($result = $this->validator($request, 'photo')) !== true)
                return response()->json($result);
            
            $pic = $request->file('photo');
            $extension = $pic->getClientOriginalExtension();
            $savePath = public_path() . '/images/profiles/' .
                auth()->user()->login . '/' . 'photo' .
                $number . '.' . $extension;
            $this->manager->make($pic)
                ->heighten(1024)
                ->orientate()
                ->save($savePath);
        
            $path = str_replace(public_path() . '/','', $savePath);
            
            $this->insertPhotoToDB($path, $number);
            
            return response()->json([
                'result' => true,
                'path' => str_replace(public_path() . '/','', $savePath)
            ]);
        }
        
        private function validator(Request $request, $name) {
            $pic = $request->file($name);
            
            if (!$pic)
                return ['result' => false, 'error' => 'Please, upload an image'];
            if ($pic->getMimeType() !== 'image/jpeg')
                return ['result' => false, 'error' => 'Invalid image'];
            if ($pic->getSize() > 5000000)
                return ['result' => false, 'error' => 'Too big image'];
            
            $mime = $this->manager->make($pic)->exif('MimeType');
            if ($mime !== 'image/jpeg')
                return ['result' => false, 'error' => 'Invalid image'];
            return true;
        }
        
        private function insertAvatarToDB($path) {
            $this->model_profile->increment('rating', 0.5);
    
            $this->model_profile->update([
               'avatar' => $path
            ]);
        }
        
        private function insertPhotoToDB($path, $number) {
            $this->model_profile->increment('rating', 0.5);
    
            $this->model_profile->update([
                'photo' . $number => $path
            ]);
        }
    
        public function deleteAvatar() {
            if (preg_match('/default/', $this->model_profile->avatar))
                return response()->json(['result' => false]);
        
            unlink(public_path() . '/' . $this->model_profile->avatar);
    
            $this->model_profile->decrement('rating', 0.5);
    
            $this->model_profile->update([
                'avatar' => 'images/service/default_avatar.png'
            ]);
        
            return response()->json(['result' => true]);
        }
    
        public function deletePhoto($number) {
            if (!preg_match('/^[1-4]$/', $number))
                return redirect()->back();
            
            $photo = 'photo' . $number;
    
            if ($this->model_profile->$photo === null)
                return response()->json(['result' => false]);

            unlink(public_path() . '/' . $this->model_profile->$photo);
    
            $this->model_profile->decrement('rating', 0.5);
    
            $this->model_profile->update([
                $photo => null
            ]);

            return response()->json(['result' => true]);
        }
    }