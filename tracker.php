<?php
?>
<html>
<head>
    <title>JediTracker - www.elraro.eu</title>
    <meta http-equiv='refresh' content='300'>
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
<?php
$url = "http://www.elraro.eu:8080/servers/89.36.214.51/29070/"; // TODO esto habrá que cambiarlo
$json = file_get_contents($url);
$server = json_decode($json, true);
print_r($server);
?>
<div align='center'>
    <table width='425' border='0' cellspacing='0' cellpadding='1' BGCOLOR='000000'>
        <tr>
            <td align='left' valign='middle' BGCOLOR='000000'>
						<span class='title'>
							<b><font color='white'><font color=red>J</font><font color=white>K</font><font
                                        color=red>|</font><font color=white>N</font><font color=red>G</font><font
                                        color=white>'</font><font color=red>TFFA</font><font color=white>.ESL</font></b>
						</span>
            </td>
            <td align='right' valign='middle' BGCOLOR='000000'>
                <span class='micro'><?php echo $server["ipAddress"] . ':' . $server["port"]; ?></span>
            </td>
        </tr>
        <tr>
            <td colspan='2' align='left'>
                <table width='100%' border='0' cellspacing='0' cellpadding='3'>
                    <tr>
                        <td align='middle' valign='top' BGCOLOR='333333' width='135'>
                            <img src=map_pics/ffa2.jpg height='90' width='120' border=1 vspace=2>
                            <br>
                            <span class='micro'>
                                <a href='http://www.jeditracker.com/' target='_blank'>JediTracker</a>
                                <br>by bLaSt<br>
                                <br><a href='http://www.jeditracker.com/' target='_blank'><font
                                        color='green'>JEDITRACKER</font></a>
                            </span>
                        </td>
                        <td align='left' valign='top' BGCOLOR='333333'>
                            <b>Tipo de Juego: <span class='title'><?php
                                    /* https://jkhub.org/wiki/index.php/G_gametype */
                                    switch ($server["parameters"]["g_gametype"]) {
                                        case 0:
                                            echo "FFA";
                                            break;
                                        case 3:
                                            echo "Duel";
                                            break;
                                        case 4:
                                            echo "Power Duel";
                                            break;
                                        case 6:
                                            echo "Team FFA";
                                            break;
                                        case 7:
                                            echo "Siege";
                                            break;
                                        case 8:
                                            echo "CTF";
                                            break;
                                        default:
                                            echo "FFA";
                                    }


                                    ?></span></b><br>
                            <b>Mapa Actual:</b> &quot;mp/ffa2&quot;<br>
                            <b>Limite de Muertes:</b> 0<br>
                            <b>Limite de Tiempo:</b> 15 mins.
                            <div style="margin-top: 10px;">
                                <b><span class='micro'>Ejecutando el MOD:</span></b> <span class='micro'><i>basejka</i></span><br>
                                <b><span class='micro'>Version:</span></b> <span class='micro'><i>JAmp: v1.0.1.1 linux-i386 Nov 10 2003</i></span>
                                <br>
                                <b><span class='micro'>Jugadores Conectados:</span></b> <span class='micro'><i>0/12</i></span>
                                <div align='center'>
                                    <p>
                                        <span class='micro'>
                                            <a href='javascript:void(0)'
                                               onClick=javascript:window.open('online.pl?ipaddress=89.36.214.51&port=29070&bgcolor=333333&titlebar=000000&display=cdcdcd&window=333333','Players','toolbar=no,width=280,height=375,scrollbars=yes')>&iquest;Quien Esta en Linea?</a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td align='right' valign='top' BGCOLOR='333333' width='30'>
                            <a href='javascript:void(0)'
                               onClick=javascript:window.open('console.pl?ipaddress=89.36.214.51&port=29070&bgcolor=333333&titlebar=000000&display=cdcdcd&window=333333','RCON','toolbar=no,width=400,height=250')>
                                <span class='micro'><b>rcon</b></span>
                            </a>
                            <a href='javascript:void(0)'
                               onClick=javascript:window.open('cvars.pl?ipaddress=89.36.214.51&port=29070&bgcolor=333333&titlebar=000000&display=cdcdcd&window=333333','CVARS','toolbar=no,width=420,height=450,scrollbars=yes')>
                                <span class='micro'><b>cvars</b></span>
                            </a>
                            <a href='javascript:void(0)'
                               onClick=javascript:window.open('force.pl?ipaddress=89.36.214.51&port=29070&bgcolor=333333&titlebar=000000&display=cdcdcd&window=333333','FORCE','toolbar=no,width=360,height=450,scrollbars=yes')>
                                <span class='micro'><b>force</b></span>
                            </a>
                            <a href='javascript:void(0)'
                               onClick=javascript:window.open('weapons.pl?ipaddress=89.36.214.51&port=29070&bgcolor=333333&titlebar=000000&display=cdcdcd&window=333333','WEAPONS','toolbar=no,width=360,height=500,scrollbars=yes')>
                                <span class='micro'><b>weaps</b></span>
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
