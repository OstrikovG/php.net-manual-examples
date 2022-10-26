<?php
/* These salts are examples only, and should not be used verbatim in your code.
   You should generate a distinct, correctly-formatted salt for each password.
*/
echo 'Standard DES: ',
crypt('rasmuslerdorf', 'rl'),
"\n";
echo 'Extended DES: ',
crypt('rasmuslerdorf', '_J9..rasm'),
"\n";
echo 'MD5:          ',
crypt('rasmuslerdorf', '$1$rasmusle$'),
"\n";
echo 'Blowfish:     ',
crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'),
"\n";
echo 'SHA-256:      ',
crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$'),
"\n";
echo 'SHA-512:      ',
crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'),
"\n";
?>