<?php 
namespace App\Helpers;
/**
 * 
 */
use App\Models\User;
use App\Helpers\GravatarHelper;
class ImageHelper
{
	public static function getUserImage($id){
		$user = User::find($id);
		$avatar_url = "";
		if(!is_null($user)){
			if($user->avatar == NULL){
				//Return him gravatar image
				if (GravatarHelper::validate_gravatar($user->email)) {
					$avatar_url =  GravatarHelper::gravatar_image($user->email, 100);
				}else{
					//When there is no gravatar image
					$avatar_url = url('img/defaults/user-demo.png');

				}
			}else{
				//Return that image
				$avatar_url = url('img/users/'.$user->avatar);
			}

		}else{

			//return redirect('/');
		}
		return $avatar_url;
	}	
}































