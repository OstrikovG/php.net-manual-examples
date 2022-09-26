<?php
function foo()
{
    echo "Number of arguments: ", func_num_args(), PHP_EOL;
}

foo(1, 2, 3);
?>