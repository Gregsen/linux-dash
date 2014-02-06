<?php
exec('sudo lxc-ls --fancy | awk \'{print $1","$2","$3","$4","$5}\'',$result);
   header('Content-Type: application/json; charset=UTF-8');
    echo "[";
    $x = 0;
    $max = count($result)-1;
//    print_r($result);
    foreach ($result as $a)
    {
        if ($x<2){ $x++; continue;}
        $values = explode(',',$result[$x]);
        if ($values[1] == "RUNNING"){
                $values [] = "<button onClick=\"javascript:lxc_stop('".explode(',', $result[$x])[0]."')\" class=\"btn btn-mini\">Stop</button>";
        }else if ($values[1] == "STOPPED"){
                $values [] = "<button onClick=\"javascript:lxc_start('".explode(',', $result[$x])[0]."')\" class=\"btn btn-mini\">Start</button>";
        }
        echo json_encode($values);
        echo ($x==$max)?'':',';
        unset($result[$x],$a);
        $x++;
    }
    echo ']';
