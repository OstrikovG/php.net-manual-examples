<?php
function myfunc() {
    echo "Registered tick function appeared here\n";
}

register_tick_function("myfunc");

declare(ticks=1);
for($i = 0; $i < 20; ++$i) {
    echo "Hello\n";
}
unregister_tick_function("myfunc");
for($i = 0; $i < 20; ++$i) {
    echo "Hello\n";
}
?>