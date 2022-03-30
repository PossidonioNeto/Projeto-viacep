<?php

function get_endereco($cep){
$cep = preg_replace ('/[^0-9]/', "", $cep);
    if (preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep)){
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
} 
}
?>

<?php if($_POST['cep']){ ?>
<?php $endereco = get_endereco($_POST['cep']); ?>


<?php } ?>