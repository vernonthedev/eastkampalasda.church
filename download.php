<?php
if (isset($_GET['file'])) {
    // Get the file name from the query string
    $fileName = $_GET['file'];
    $filePath = 'admin/uploads/files/' . $fileName; // Adjust the folder path as needed

    // Check if the file exists
    if (file_exists($filePath)) {
        // Set headers for file download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        // File not found
        http_response_code(404);
        die('File not found.');
    }
} else {
    // Invalid request
    http_response_code(400);
    die('Invalid request.');
}
?>
