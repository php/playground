--TEST--
Bug # ()
--SKIPIF--
<?php if (!extension_loaded('oci8')) die ("skip no oci8 extension"); ?>
--FILE--
<?php

//require(dirname(__FILE__).'/details.inc');
require(dirname(__FILE__).'/connect.inc');
//require(dirname(__FILE__).'/create_table.inc');

// Initialization

$stmtarray = array(
	"drop table mytest_tab",
	"create table mytest_tab ()",
	"insert into mytest_tab values ()"
);

oci8_test_sql_execute($c, $stmtarray);

// Run Test

echo "Test 1\n";



echo "Test 2\n";



echo "Test 3\n";

// Clean up

//require(dirname(__FILE__).'/drop_table.inc');

$stmtarray = array(
	"drop table mytest_tab"
);

oci8_test_sql_execute($c, $stmtarray);

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
===DONE===
