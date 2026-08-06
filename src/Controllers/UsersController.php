<?php	
	namespace App\Controllers;

	use App\Models\User;
	use DateTime;

	class UsersController {

		public function getData($id) {
			return User::getBeneficiary($id);
		}

		public function deleteData($id) {
			return User::deleteData($id);					
		}

		public function changeStatus($id, $status) {
			return User::changeStatus($id, $status);					
		}

		public function getAllUserWithDetails() {
			return User::getAllUserWithDetails();					
		}

		public function getAllUserWithSearch($search) {
			return User::getAllUserWithSearch($search);				
		}

		public function store($data) {
			$firstname = trim(htmlspecialchars($data['firstname']));
			$lastname = trim(htmlspecialchars($data['lastname']));
			$username = trim(htmlspecialchars($data['username']));
			$email = trim(htmlspecialchars($data['email']));
			$password = trim(htmlspecialchars($data['password']));
			$middlename = trim(htmlspecialchars($data['middlename']));

			if($firstname AND $lastname AND $email AND $password) {
				$inserted = User::createUser($firstname, $middlename, $lastname, $email, $username, $password, 1);
				if($inserted) {
					return true;
				} else {
					return false;
				}
			}
		}

		private function isExisting($firstname, $lastname, $middlename, $suffix, $barangay) {
			if(User::findUserByFields($firstname, $lastname, $middlename, $suffix, $barangay)) {
				return true;
			} else {
				return false;
			}
		}

		private function isUserExisting($firstname, $lastname, $middlename, $barangay, $mode, $id) {
			if(User::countUser($firstname, $lastname, $middlename, $barangay, $mode, $id) > 0) {
				return true;
			} else {
				return false;
			}
		}

		public function update($data, $id) {
			$name = trim(htmlspecialchars($data['name']));
			$price = trim(htmlspecialchars($data['price']));
			$quantity = trim(htmlspecialchars($data['quantity']));
			$description = trim(htmlspecialchars($data['description']));

			if($name AND $price AND $description) {
				$updated = User::updateUser($name, $price, $quantity, $description, $id);

				if($updated) {
					return true;
				} else {
					return false;
				}
			}
		}

	}

?>
