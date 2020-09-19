<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

$s = curl_init(); 

$data = array ("apiKey" => "ILn5g3dW5BgWC0352W1d0dWIRtto5m7u",
	"order" => json_encode (array(
		"firstName" => "Андрей",
		"lastName" => "Смирнов",
		'items' => array(
            array("initialPrice" => "155", "productName" => "Доска ам-няма", )
        ),
	))
);

curl_setopt($s, CURLOPT_URL, 'https://elisyamba.retailcrm.ru/api/v5/orders/create'); 
curl_setopt($s,CURLOPT_POST,true); 
curl_setopt($s, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($s, CURLOPT_POSTFIELDS, $data);
echo curl_exec($s);

/*
$client = new \RetailCrm\ApiClient(
    'https://elisyamba.retailcrm.ru',
    'ILn5g3dW5BgWC0352W1d0dWIRtto5m7u',
    \RetailCrm\ApiClient::V5
);

try {
    $response = $client->request->ordersCreate(array(
        'externalId' => 'some-shop-order-id',
        'firstName' => 'Андрей',
        'lastName' => 'Смирнов',
        'items' => array(
            array("initialPrice" => "B155", "productName" => "Доска ам-няма")
        ),
        'delivery' => array(
            'code' => 'russian-post',
        )
    ));
} catch (\RetailCrm\Exception\CurlException $e) {
    echo "Connection error: " . $e->getMessage();
}

if ($response->isSuccessful() && 201 === $response->getStatusCode()) {
    echo 'Order successfully created. Order ID into retailCRM = ' . $response->id;
        // or $response['id'];
        // or $response->getId();
} else {
    echo sprintf(
        "Error: [HTTP-code %s] %s",
        $response->getStatusCode(),
        $response->getErrorMsg()
    );

    // error details
    //if (isset($response['errors'])) {
    //    print_r($response['errors']);
    //}
}
*/
?>