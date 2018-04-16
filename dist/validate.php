<?php
/* this is only example */
if(isset($_POST['fileDropzone']) && $_POST['fileDropzone'] != 'success' ){
    header("HTTP/1.0 442 Unprocesssable Entity");
    header('Content-type: application/json');
    $response_array['errors'] = array(
        'fileDropzone' => "Jābūt pievienotam vismaz vienam failam",
        'message' => 'Lūdzu korekti aizpildiet laukus (pavisam korekti)!'
    );
}else{
    header('Content-type: application/json');
    $response_array['status'] = $_POST;  
}
echo json_encode($response_array);
?>