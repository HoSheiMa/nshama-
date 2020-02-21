<?php



// Include the editor SDK.
require 'lib/FroalaEditor.php';
 
// Store the image.
try {
    $response = FroalaEditor_Image::upload('/');
    echo stripslashes(json_encode($response));
} catch (Exception $e) {
    http_response_code(404);
}
 