<?php
    $name = htmlspecialchars($_GET['name']);
    exec("sudo lxc-start -n $name");
