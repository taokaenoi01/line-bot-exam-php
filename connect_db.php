///////////// connect_db.php //////

<?php

$Setup_Server = ‘http://localhost:8080/phpmyadmin’;

$Setup_User = ‘tkn001’;

$Setup_Pwd = ‘123456’;

$Setup_Database = ‘Day’;

mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);

mysql_query(“use $Setup_Database”);

mysql_query(“SET NAMES UTF8”);

?>