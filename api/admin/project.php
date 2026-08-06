
<?php
	require "../../autoload.php";
	header("Content-Type: application/json");	
	use App\Controllers\ProjectsController;

	if($_SERVER['REQUEST_METHOD'] === "POST") {		
		$input = json_decode(file_get_contents("php://input"));
		$mode = $input->mode;
        $data = [
			'id' => $input->id,			
			'title' => $input->title,			
			'image' => $input->image,
			'description' => $input->description,
            'mode' => $mode
		];
		foreach($data as $key => $value) {
			if(empty($value)) {
				$keyname = ucfirst($key);
				echo json_encode([
					'status' => false,
					'message' => "$keyname is required."
				]);
				exit();
			}
		}
		//$data['status'] = $input->status;
        $data['technology'] = $input->technology;
		$data['code'] = $input->code;
		$controller = new ProjectsController();
        if($mode == 'add') {
            $info = $controller->store($data);
		} elseif($mode == 'getAll') {
			$info = $controller->getProjects($data);
		} elseif($mode == 'delete') {
			$info = $controller->deleteData($input->id);
		} elseif($mode == 'search') {
			$info = $controller->getData($input->id);
		} elseif($mode == 'edit') {
			$info = $controller->update($data);
		} elseif($mode == 'change') {
			$info = $controller->changeStatus($input->id, $input->status);
		}
        if($info) {
			http_response_code(200);
			echo json_encode([
				'status' => true,
				'message' => 'Authentication successful.',
				'data' => $info
			]);
		} else {
			http_response_code(401);
			echo json_encode([
				'status' => false,
				'message' => 'Authentication failed.',
				'data' => []
			]);
		}
	} else {
		http_response_code(405);
		echo json_encode([
			'status' => false,
			'message' => 'Only POST requests are allowed.',
			'data' => []
		]);
	} 
?>