<?php

require 'utilities.php';

if (isset($_GET["ipaddress"]) && isset($_GET["port"])) {
    $ip = $_GET["ipaddress"];
    $port = $_GET["port"];
} else {
    die();
}

$serverStatus = getServerStatus($ip, $port);

?>

<html>
<head>
    <title>Weapons</title>
</head>
<body>
    <style type='text/css' media='screen'>
        body {
            font-size: 11px;
            color: #cdcdcd;
            background-color: #333333;
            font-family: Arial
        }

        td {
            color: #cdcdcd;
            font-size: 11px;
            font-family: Arial
        }

        .mini10 {
            color: #cdcdcd;
            font-size: 11px;
            font-family: Arial
        }

        .micro {
            font-size: 9px;
            font-family: Verdana:
            color: #cdcdcd
        }

        .title {
            font-size: 11px;
            font-family: Verdana
        }

        a:link {
            color: #cdcdcd
        }

        a:visited {
            color: #cdcdcd
        }
    </style>
    <div align='center'>
    <table width='300' border='0' cellspacing='1' cellpadding='2' bgcolor='000000'>
        <tr>
            <td width='100' bgcolor='000000' align='right'><span class='mini10'>weapon_pics </span></td>
            <td width='220' bgcolor='000000' align='left'><span class='mini10'></span></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Bryar Pistol.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Bryar Pistol is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Wookie Bowcaster.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Wookie Bowcaster is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Stouker Concussion Rifle.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Stouker Concussion Rifle is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/E11 Blaster Rifle.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> E11 Blaster Rifle is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Detonation Packs.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Detonation Packs is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Imperial Heavy Repeater.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Imperial Heavy Repeater is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Lightsaber.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Lightsaber is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Thermal Detonator.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Thermal Detonator is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Golan Arms Flechette.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Golan Arms Flechette is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Trip Mines.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Trip Mines is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Tenloss Disruptor Rifle.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Tenloss Disruptor Rifle is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Merr-Sonn P2X-2M PMS.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Merr-Sonn P2X-2M PMS is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Stun Baton.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Stun Baton is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/EMP2 Gun.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> EMP2 Gun is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Emplaced Gun.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Emplaced Gun is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Melee.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Melee is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/Turret.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> Turret is enabled</font></td>
        </tr>
        <tr>
            <td width='160' bgcolor='333333' align='right'><span class='micro'><image src='weapon_pics/DL-44 Heavy Blaster.gif' /></span></td>
            <td width='200' bgcolor='333333' align='left'><font color=green> DL-44 Heavy Blaster is enabled</font></td>
        </tr>
    </table>
    <br>
    <span class='micro'>
        <a href='https://jk.elraro.eu/' target='_blank'>JediTracker</a>
        <br>by elraro<br><br><a href='https://jk.elraro.eu/' target='_blank'><font color='green'><blink>JEDITRACKER</blink></font></a>
    </span>
    </div>
    <p><center><INPUT TYPE='button' VALUE='Close Window' onClick='window.close();'></center>
</body>
</html>																								

