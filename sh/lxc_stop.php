<?php
    $name = htmlspecialchars($_GET['name']);
    exec("lxc-stop -n $name -t 0");
