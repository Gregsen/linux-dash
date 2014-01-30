<?php 

exec('lxc-ls --fancy|awk \'{print $1","$2","$3","$4","$5}\'',$result);
    header('Content-Type: application/json; charset=UTF-8');

    echo "[";
    $x = 0;
    $max = count($result)-1;
    foreach ($result as $a)
    {    
        if ($x==0){ $x++; continue;}
        if ($x==1){ $x++; continue;}
        echo json_encode( explode(',',$result[$x]) );
        echo ($x==$max)?'':',';
        unset($result[$x],$a);
        $x++;
    }
    echo ']';
