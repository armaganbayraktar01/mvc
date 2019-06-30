<?php


class Users {
	
	# Üye Listeleme ASC
	public static function select_ascUser()
	{
		global $db;
		
		$usersQ = $db->from('users')
					 ->orderby('user_id', 'ASC')
					 ->all();

		return $usersQ;

	}
	
	
	# Üye Listeleme DESC
	public static function select_descUser()
	{
		global $db;
		
		$usersQ = $db->from('users')
					 ->orderby('user_id', 'DESC')
					 ->all();

		return $usersQ;

	}	
	

	# Üye Ekleme
	public static function insertUser($postData)
	{
		global $db;
		
		$usersQ = $db->prepare('INSERT INTO users SET 
		
		user_name = :user_name,
		user_email = :user_email,
		user_password = :user_password,
		user_url = :user_url,
		user_status = :user_status,
		user_rank = :user_rank,
		user_firstname = :user_firstname,
		user_surname = :user_surname,
		user_permissions = :user_permissions,
		user_phone = :user_phone,
		user_fbname = :user_fbname,
		user_twname = :user_twname,
		user_insname = :user_insname
		
		');
        
		return $usersQ->execute($postData);
	}
	
	# Üye Güncelleme
	public static function updateUser($postData)
	{
		global $db;
		
		$usersQ = $db->prepare('UPDATE users SET 
		
		user_name = :user_name,
		user_email = :user_email,
		user_password = :user_password,
		user_url = :user_url,
		user_status = :user_status,
		user_rank = :user_rank,
		user_firstname = :user_firstname,
		user_surname = :user_surname,
		user_permissions = :user_permissions,
		user_phone = :user_phone,
		user_fbname = :user_fbname,
		user_twname = :user_twname,
		user_insname = :user_insname
		
		WHERE user_id = :id');
        
		return $usersQ->execute($postData);
	}
	
	# Üye Silme
	public static function deleteUser($postData)
	{
		global $db;
		
		$usersQ = $db->prepare('DELETE FROM users WHERE user_id = :id');
        
		return $usersQ->execute($postData);
	}
	
	# Üye Oturum Açma
	public static function loginUser($postData)
	{
		$_SESSION['user_id'] = $postData['user_id'];
		$_SESSION['user_name'] = $postData['user_name'];
		$_SESSION['user_rank'] = $postData['user_rank'];
		$_SESSION['user_permissions'] = $postData['user_permissions'];
	}

	# Üye Kontrolü
	public static function existsUser($user_name,  $user_email = '@@')
	{
		global $db;

		$usersQ = $db->from('users')
					 ->where('user_name', $user_name)
					 //->where('user_email', $user_email)
					 ->first();

		return $usersQ;
	}
}