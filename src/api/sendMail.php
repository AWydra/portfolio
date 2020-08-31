<?php
    header("Access-Control-Allow-Origin: *");

    $post = json_decode(file_get_contents('php://input'));
    $to      = $post['to'];
    $subject = $post['subject'];
    $message = $post['message'];
    $from = 'From: '.$post['from'];
    mail($to, $subject, $message, $from);
    $output = [
        'message' => true
    ];
    echo json_encode($output);