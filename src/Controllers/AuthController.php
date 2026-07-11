<?php
	
	namespace App\Controllers;
	use App\Models\User;

	class AuthController {

		public function auth($data) {
			$email = trim(htmlspecialchars($data['email']));
			$password = trim(htmlspecialchars($data['password']));			

			if($email AND $password) {
				$user = User::findUserByEmail($email);				
				if($user) {
					if(password_verify($password, $user['password'])) {
						return $user;
					}
					return false;
				}
				return false;
			}
			return false;
		}

		public static function encrypt_text($text) {
			
		}

		public static function decrypt_text($text) {
			$key = "A(LVv@P5&elUU@|5aso@hsWW_Hw15m1?"; 
			$cipher_method = 'aes-256-cbc';
			$decoded_data = base64_decode($text);
			$iv_length = openssl_cipher_iv_length($cipher_method);
			$iv_dec = substr($decoded_data, 0, $iv_length);
			$encrypted_data_dec = substr($decoded_data, $iv_length);
			return openssl_decrypt($encrypted_data_dec, $cipher_method, $key, 0, $iv_dec);

		}
	}

?>
