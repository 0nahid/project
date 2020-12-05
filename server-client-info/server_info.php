<?php

    # $_SERVER superglobal

    // create server array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' =>  $_SERVER['SERVER_NAME'],
        'Server Software' =>  $_SERVER['SERVER_SOFTWARE'],
        'Document Root' =>  $_SERVER['DOCUMENT_ROOT'],
        'Current Page' =>  $_SERVER['PHP_SELF'],
        'Script Name' =>  $_SERVER['SCRIPT_NAME'],
        'Absolute Path' =>  $_SERVER['SCRIPT_FILENAME'],
    ];
    // echo $server['Host Server Name'].'<br>';
    // echo $server['Host Header'].'<br>';
    // echo $server['Server Software'].'<br>';
    // echo $server['Document Root'].'<br>';
    // print_r($server).'<br><br><br><br>';

    // create client array
    $client=[
        'Client System Info' =>  $_SERVER['HTTP_USER_AGENT'],
        'Client Ip Address' =>  $_SERVER['REMOTE_ADDR'],
        'Remort port' =>  $_SERVER['REMOTE_PORT'],
    ];
    // print_r($client).'<br>';

?>