<?php
$db = new SQLite3('golfgear.db');
if(!$db)
{
    die (SQL_error($db));
}
?>