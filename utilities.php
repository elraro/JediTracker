<?php

function getServerStatus($ip, $port)
{
    $url = "http://www.elraro.eu:8080/servers/" . $ip . "/" . $port . "/";
    $json = file_get_contents($url);

    $serverOff = false;

    $matches = array();
    preg_match('#HTTP/\d+\.\d+ (\d+)#', $http_response_header[0], $matches);
    if ($matches[1] != 200) {
        $serverOff = true;
    } else {
        $server = json_decode($json, true);
    }

    $return = array();

    array_push($return, $serverOff);
    array_push($return, $server);

    return $return;
}

function bits($flag)
{
    $setBits = array();
    for ($i = 0; $i <= 18; $i++) {
        if ($flag & (1 << $i)) {
            $setBits[] = (1 << $i);
        }
    }

    // Sort array to order the bits
    sort($setBits);

    return $setBits;
}

