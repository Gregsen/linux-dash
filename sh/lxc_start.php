<?php
    $name = htmlspecialchars($_GET['name']);
    exec("lxc-start -n $name -t 0");
