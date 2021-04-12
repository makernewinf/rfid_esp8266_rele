<?php

if(isset($_GET['texto']) && !empty($_GET['texto'])){
   $data  = date("d-m-y").'</br>';
   $hora  = date('H:i').'</br>';
   $texto = $_GET['texto'];
   $arquivo = fopen('acesso.txt', 'w');
   fwrite($arquivo, $data);
   fwrite($arquivo, $hora);
   fwrite($arquivo, $texto);
   fclose($arquivo);
}

?>

