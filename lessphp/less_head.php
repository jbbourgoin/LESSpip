<?php

function lesspip_insert_head($texte) 
{
  $texte .= '<link rel="stylesheet" href="'.find_in_path('habillage_less.css').'" type="text/css" media="projection, screen, tv" />';
  return $texte;
}

?>