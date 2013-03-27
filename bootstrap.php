<?php
require_once('utilities.php');

$classes = Array('datetime', 'widget', 'registrar', 'loop');
foreach($classes as $klass){
  require_once($klass.'.class.php');
}

