<?php	
	namespace App\Controllers;

	use App\Models\Project;
	use DateTime;

	class ProjectsController {

		public function getData($id) {
			return Project::getProject($id);
		}

		public function deleteData($id) {
			return Project::delete($id);
		}

		public function changeStatus($id, $status) {
			return Project::changeStatus($id, $status);					
		}

		public function getProjects() {
			return Project::getProjects();					
		}
		
		public function store($data) {
			$title = trim(htmlspecialchars($data['title']));
			$image = trim(htmlspecialchars($data['image']));
			$description = trim(htmlspecialchars($data['description']));
			$technology = trim(htmlspecialchars($data['technology']));		
			$code = trim(htmlspecialchars($data['code']));		

			if($title AND $image AND $description) {
				$inserted = Project::create($title, $image, $description, $technology, $code);
				if($inserted) {
					return true;
				} else {
					return false;
				}
			}
		}

		private function isExisting($title, $description) {
			if(Project::findUserByFields($title, $description)) {
				return true;
			} else {
				return false;
			}
		}

		public function update($data) {
			$id = trim(htmlspecialchars($data['id']));
			$title = trim(htmlspecialchars($data['title']));
			$image = trim(htmlspecialchars($data['image']));
			$description = trim(htmlspecialchars($data['description']));
			$technology = trim(htmlspecialchars($data['technology']));
			$code = trim(htmlspecialchars($data['code']));

			if($title AND $image AND $description) {
				$updated = Project::update($title, $image, $description, $technology, $code, $id);

				if($updated) {
					return true;
				} else {
					return false;
				}
			}
		}

	}

?>
