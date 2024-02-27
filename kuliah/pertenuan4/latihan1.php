<?php

echo date("j/n/Y");
echo "<br>";
echo date("l, j F Y");
echo "<br>";
echo time();
echo "<br>";
echo date( "l", mktime (0, 0, 0, date("11"), date("16"), date("2004") ) );