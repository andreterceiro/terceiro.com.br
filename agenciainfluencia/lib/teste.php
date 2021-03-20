<?php
if ($db = sqlite_open('mysqlitedb-seucu', 0666, $sqliteerror)) {
  sqlite_query('CREATE TABLE foo (bar varchar(10))', $db);
  sqlite_query("INSERT INTO foo VALUES ('fnord')", $db);
  $result = sqlite_query('select bar from foo', $db);
  var_dump(sqlite_fetch_array($result));
} else {
  die ($sqliteerror);
}
