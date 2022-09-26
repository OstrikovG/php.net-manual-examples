<?php
if (false !== setlocale(LC_ALL, 'en_US.UTF-8')) {
    $locale_info = localeconv();
    print_r($locale_info);
}
?>