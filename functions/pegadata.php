<?php 
function pega_data( $date ){
  // $date = get_the_time('d-m-Y');
  $data = explode('-', $date);
  $mes = $data[1];
  switch ($mes){case 01: $mes = "Janeiro"; break; case 02: $mes = "Fevereiro"; break; case 03: $mes = "Março"; break; case 04: $mes = "Abril"; break; case 05: $mes = "Maio"; break; case 06: $mes = "Junho"; break; case 07: $mes = "Julho"; break; case 08: $mes = "Agosto"; break; case 09: $mes = "Setembro"; break; case 10: $mes = "Outubro"; break; case 11: $mes = "Novembro"; break; case 12: $mes = "Dezembro"; break; }
    
    return $mes;  
}