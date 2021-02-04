<?php
exec("C:/wamp64/bin/mysql/mysql8.0.18/bin/mysqldump -u root devsbook > devsbookk-".date("d-m").".sql");