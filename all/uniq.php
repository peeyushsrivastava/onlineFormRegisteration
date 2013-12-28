<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>
 <?php
/*
$date = date_create();
echo date_format($date, 'U = Y-m-d H:i:s') . "\n";
date_timestamp_set($date, 1171502725);

$date = date_create();
echo date_timestamp_get($date); */
?>
<br />
<?php
$date = date_create();
$stamp = date_timestamp_get(date_create());
echo $stamp;
?>
<br />
<?php
echo microtime();

?>

<?php
/*function uniq_string($length)
{
$key = '';
$key = uniqid();
return $key;
}


echo uniq_string(20);

*/

/*function random_string($length) {
    $key = '';
//    $keys = array_merge(range(0, 9));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}


echo random_string(10);

//, range('a', 'z') */

?>
</p>
<p>&nbsp;</p>
</body>
</html>
