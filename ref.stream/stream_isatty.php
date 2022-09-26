<?php
/**
 * This command can be used to determine if a standard output / standard error stream is redirected to a file.
 * php -r "var_export(stream_isatty(STDERR));"
 * The above example will output something similar to:
 * true
 */