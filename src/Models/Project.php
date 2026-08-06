<?php
	namespace App\Models;

	use App\Core\Database;
	use PDO;
	use DateTime;

	class Project {	
		
		public static function getProjects() {
			$pdo = Database::connect();
			$projects = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
			return $projects->fetchAll(PDO::FETCH_ASSOC);
		}	

		public static function getProject($id) {
			$pdo = Database::connect();
			$project = $pdo->query("SELECT * FROM projects WHERE id=$id");
			return $project->fetch(PDO::FETCH_OBJ);
		}

		public static function changeStatus($id, $status) {
			$pdo = Database::connect();
			$updated_at = date('Y-m-d H:i:s');
			$project = $pdo->prepare("UPDATE projects SET status=?, updated_at=? WHERE id=?");
			return $project->execute([$status, $updated_at, $id]);			
		}

		public static function create($title, $image, $description, $technology, $code) {
			$pdo = Database::connect();
			$project = $pdo->prepare("INSERT INTO projects(title, image, description, technology, code, created_at, updated_at) VALUES(:title, :image, :description, :technology, :code, :created_at, :updated_at)");
			return $project->execute([
				":title" => $title,
				":image" => $image,
				":description" => $description,
				":technology" => $technology,
				":code" => $code,
				":created_at" => date('Y-m-d H:i:s'),
				":updated_at" => date('Y-m-d H:i:s')
			]);
		}

		public static function update($title, $image, $description, $technology, $code, $id) {
			$pdo = Database::connect();
			$updated_at = date('Y-m-d H:i:s');
			$project = $pdo->prepare("UPDATE projects SET title=?, image=?, description=?, technology=?, code=?, updated_at=? WHERE id=?");
			return $project->execute([$title, $image, $description, $technology, $code, $updated_at, $id]);	
		}

		public static function delete($id) {
			$pdo = Database::connect();
			$project = $pdo->prepare("DELETE FROM projects WHERE id=?");
			return $project->execute([$id]);			
		}
	}
?>