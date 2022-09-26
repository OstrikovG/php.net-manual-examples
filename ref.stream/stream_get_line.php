<?php
$fp = @fopen("http://www.example.com", "r");
if ($fp) {
    $i = 0;
    while (($buffer = stream_get_line($fp, 0, PHP_EOL)) !== false) {
        echo "$i: " . $buffer . PHP_EOL;
        $i++;
    }
    if (!feof($fp)) {
        echo "Error: unexpected stream_get_line() fail\n";
    }
    fclose($fp);
}
?>