<?php

    namespace App\Http\Controllers;
    
    use App\Profile;
    use Auth;
    use Illuminate\Http\Request;
    use Intervention\Image\ImageManager;
    
    class ImageController extends Controller
    {
        private $manager;
        
        public function __construct() {
            $this->manager = new ImageManager();
        }
        
        public function uploadAvatar(Request $request) {
            if (($result = $this->validator($request, 'avatar')) !== true)
                return response()->json($result);
            
            $avatar = $request->file('avatar');
            $extension = $avatar->getClientOriginalExtension();
            $savePath = public_path() . '/images/profiles/' .
                auth()->user()->login . '/' . 'avatar_' .
                auth()->user()->login . '.' . $extension;
            
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
            $model = Profile::find(Auth::id());
            
            $model->increment('rating', 0.5);
        
            $model->update([
               'avatar' => $path
            ]);
        }
        
        private function insertPhotoToDB($path, $number) {
            $model = Profile::find(Auth::id());
            
            $model->increment('rating', 0.5);
            
            $model->update([
                'photo' . $number => $path
            ]);
        }
    
        public function deleteAvatar() {
            $model = Profile::find(Auth::id());
            
            if (preg_match('/default/', $model->avatar))
                return response()->json(['result' => false]);
        
            unlink(public_path() . '/' . $model->avatar);
        
            $model->decrement('rating', 0.5);
        
            $model->update([
                'avatar' => 'images/service/default_avatar.png'
            ]);
        
            return response()->json(['result' => true]);
        }
    
        public function deletePhoto($number) {
            if (!preg_match('/^[1-4]$/', $number))
                return redirect()->back();
            
            $model = Profile::find(Auth::id());
            
            $photo = 'photo' . $number;
    
            if ($model->$photo === null)
                return response()->json(['result' => false]);

            unlink(public_path() . '/' . $model->$photo);

            $model->decrement('rating', 0.5);

            $model->update([
                $photo => null
            ]);

            return response()->json(['result' => true]);
        }
    }
