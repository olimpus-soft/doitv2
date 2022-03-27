<?php 
$data = [
	'Tipo'	 => '',
	'Empresa'	 => '',
	'Nombre'	 => '',
	'Correo'	 => '',
	'Telefono'	 => '',
	'Ciudad'	 => '',
	'Asunto'	 => '',
	'Fecha'	 => date('d/m/Y'),
	'Hora'	 => date('h:i:s a'),
	'Mensaje'	 => '',
	'Token' => str_replace('=', '', base64_encode(date('Y-m-d H:i:s'))),
];
foreach ($_POST as $key => $value) {
	$data[ucwords(strtolower($key))] = $value;
}
echo '<pre><h3>$data</h3>';
echo print_r($_SERVER, true);
echo '</pre>';
$url = "https://script.google.com/macros/s/AKfycbykIbixkeazEFkh--PFppwkOtmwssYiMp_S1UXEujlwyhw7Cg2f/exec?";
$curl = curl_init($url);

$options = [
	CURLOPT_URL => $url.http_build_query($data),
  CURLOPT_FAILONERROR => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)',
  CURLOPT_HTTPHEADER => [
  	'Content-Type: application/json',
  	'Access-Control-Allow-Origin: *',
  ],
  CURLOPT_POSTFIELDS => ''
];
curl_setopt_array($curl, $options);

$response = curl_exec($curl);
$error = curl_error($curl);
$info = curl_getinfo($curl);
curl_close($ch);
header('Location: '.$_SERVER['HTTP_REFERER']);
 ?>