<?php
foreach(glob('sha1.php') as $ent)
{
    if(is_dir($ent))
    {
        continue;
    }

    echo $ent . ' (SHA1: ' . sha1_file($ent) . ')', PHP_EOL;
}
?>