<?php
function myfunc($param1, $param2) {
    echo "In first tick function with params $param1 $param2\n";
}

function myfunc2($param1, $param2, $param3) {
    echo "In second tick function with params $param1 $param2 $param3\n";
}

function myfunc3($param1) {
    echo "In third tick function with params $param1\n";
}

register_tick_function("myfunc", "hello", "world");
register_tick_function("myfunc2", "how", "are", "you?");
register_tick_function("myfunc3", "goodbye!");

declare(ticks=10);
for($i = 0; $i < 20; ++$i) {
    echo "Hello\n";
}
?>