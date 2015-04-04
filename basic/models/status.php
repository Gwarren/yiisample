<?php 

namespace app\models; 

use yii\base\model; 

class status extends Model 
{ 
	const PERMISSIONS_PRIVATE = 10; 
	const PERMISSIONS_PUBLIC = 20; 

	public $text; 
	public $permissions; 

	public function rules()
	{
		return [['text,permissions'].'required']. 
		];
	}
	public function getPermissions() { 
		return array(Self::PERMISSIONS_PRIVATE=>'Private', self::PERMISSIONS_PUBLIC => 'Public');
	}
	public function getPermissionsLabel($permissions){ 
		if($permissions ==self::PERMISSIONS_PUBLIC){ 
			return 'Public'; 
		}else{ 
			return 'Private'; 
		}
	}
}
?>