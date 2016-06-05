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

function convertNameToHTML($data)
{
    $red = "#f00";        //1
    $green = "#0f0";     //2
    $yellow = "#ff0";    //3
    $dkblue = "#00a";    //4
    $ltblue = "#0ff";    //5
    $pink = "#f0f";        //6
    $white = "#fff";    //7
    $orange = "#f80";    //8
    $grey = "#aaa";        //9
    $black = "#000";    //0
    //string is $data
    //we need to replace
    $spanopen = false;
    $performedreplace = false;
    $explstr = explode("^", $data);
    $newstr = "";
    foreach ($explstr as $e) {
        if (strlen($e) == "") {
            //there was a ^ at the start - break, nothing to add.
        } else {
            $char = substr($e, 0, 1);
            switch ($char) {
                case 1: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 2: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 3: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 4: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 5: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 6: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 7: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 8: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 9: {
                    //truncate first letter (the number)
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
                case 0: {
                    $size = strlen($e);
                    $e = substr($e, -($size - 1));
                    $e = "" . $e;
                    break;
                }
            }
        }
        //add /span
        $e = $e . "";
        $newstr = $newstr . $e;
    }
    return $newstr;
}

