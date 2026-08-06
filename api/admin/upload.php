<?php
    header('Content-Type: application/json');

    // Stop processing if request method is wrong
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
        exit;
    }

    // Check if file was sent natively without issues
    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['success' => false, 'message' => 'No file uploaded or error occurred.']);
        exit;
    }

    $file = $_FILES['image'];

    // 1. Strict File Size Validation (Max 2MB)
    $maxFileSize = 2 * 1024 * 1024; 
    if ($file['size'] > $maxFileSize) {
        echo json_encode(['success' => false, 'message' => 'File size limits exceeded. Max 2MB allowed.']);
        exit;
    }

    // 2. Strict Content Type Verification (Do not trust extension names alone)
    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    $fileInfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $fileInfo->file($file['tmp_name']);

    if (!in_array($mimeType, $allowedMimeTypes)) {
        echo json_encode(['success' => false, 'message' => 'Invalid file format. Only JPG, PNG, WEBP, and GIF are allowed.']);
        exit;
    }

    // 3. Establish Target Storage Directory
    $uploadDir = '../../images/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Safely create directory if missing
    }

    // 4. Safe Filename Sanitization (Prevents script execution attacks)
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $safeName = bin2hex(random_bytes(16)) . '.' . $extension; 
    $targetPath = $uploadDir . $safeName;

    // 5. Finalize the Upload
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        echo json_encode([
            'success' => true,
            'message' => 'Image successfully uploaded!',
            'path' => $targetPath,
            'filename' => $safeName
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to save file on the server.']);
    }
?>