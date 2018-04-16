<?php
header('Content-type: application/json');
$params = $_GET;
$answers = array(
    0 => array(
        0 => 2,
        1 => 0,
        2 => 1
    ),
    1 => array(
        0 => 0,
        1 => 1,
        2 => 0,
        3 => 1
    ),
    2 => array(
        0 => 2,
        1 => 0
    )
);
$response = array(
    'status' => ($answers[$params['test']][$params['question']] == $params['answer'])
);
echo json_encode($response);
?>