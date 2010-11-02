<?php
require 'lessc.inc.php';

$habillage_less = find_in_path('habillage.less');
$habillage_css = dirname($habillage_less).'/habillage_less.css';

try {
  lessc::ccompile($habillage_less, $habillage_css);
 } catch (exception $ex) {
   exit('lessc fatal error:<br />'.$ex->getMessage());
   }
?>