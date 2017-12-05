<!doctype html>
<html>
	<head>
		<meta charset="utf8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="main.css" />
	</head>
    <body>
        <h2>Save this information</h2>
       <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://apis.nbg.gr/public/nbgapis/obp/v3.0.1/banks",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: text/json",
    "application_id: REPLACE_THIS_VALUE",
    "provider: REPLACE_THIS_VALUE",
    "provider_id: REPLACE_THIS_VALUE",
    "sandbox_id: REPLACE_THIS_VALUE",
    "user_id: REPLACE_THIS_VALUE",
    "username: REPLACE_THIS_VALUE"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}; ?>
	</body>
</html>
