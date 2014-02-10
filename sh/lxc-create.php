<?php

$distribution   = escapeshellarg(htmlspecialchars($_GET['distribution']));
$name           = escapeshellarg(htmlspecialchars($_GET['name']));
$flavour        = escapeshellarg(htmlspecialchars($_GET['flavour']));

exec('sudo lxc-create -t $distribution -n $name -- -r $flavour');

