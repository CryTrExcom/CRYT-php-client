<?php
/* ADVICE: SAVE THIS FILE as private-config.php and modify the values there. 
 * This way if there is an update, your config will not be erase with dummy values
 * 
*/
define('NODE','https://wallet.crytrex.com'); // default CRYT node location given in HTTP or SSH format example; http://host:11112 or https://host:11112 or ssh://user@host (ssh can be used if this lib is also installed on the node)

define('SERVER_PATH','~/nxt/'); // This is the local path to the nxt server installed if it exist (it is required for the server management queries)
define('EXTERNAL_NXT_PHP_LIB','/home/lib/CRYT-php-client'); // OPTIONAL, the location of this library on another node. Will only be used for request done via ssh
define('ADMIN_EMAIL','you@domain.com'); // OPTIONAL - allow admin email alert for some cases.
