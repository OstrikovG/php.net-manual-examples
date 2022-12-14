<?php
/* Set locale to Dutch */
setlocale(LC_ALL, 'nl_NL.UTF-8');

/* Output: vrijdag 22 december 1978 */
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));

/* try different possible locale names for german */
$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge', 'de_DE.UTF-8');
echo "Preferred locale for german on this system is '$loc_de'";
?>