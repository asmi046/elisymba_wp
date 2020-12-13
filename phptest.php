<?
header('Content-type: text/html; charset=utf-8');
require_once("../../../wp-config.php");

ini_set("display_errors",1);
error_reporting(E_ALL);

ini_set('default_socket_timeout', 5000);
	 $client = new SoapClient ("https://ws.dpd.ru/services/geography2?wsdl",array(
        'trace' => true, 
        'keep_alive' => true,
        'connection_timeout' => 5000,
        'cache_wsdl' => WSDL_CACHE_NONE,
        'compression'   => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
    ));
	$arData['auth'] = array(
		'clientNumber' => "1063001287",
		'clientKey' => "148FAFAD92103F18B0A20D818755099A24616713");
    
    $arData['countryCode'] = "RU";
        
	$arRequest['request'] = $arData;  
    
    $ret = $client->getParcelShops($arRequest); 
    
    echo "<pre>";
        print_r($ret);
    echo "</pre>";

    global $wpdb;
    
    $wpdb->query('TRUNCATE `el_dpd_pvz`');
    
    foreach ($ret->return->parcelShop as $pvz) {
        $wpdb->insert('el_dpd_pvz', 
        array(
            "parcelShopType" => $pvz->parcelShopType,
            "cityName" => $pvz->address->cityName,
            "index" => $pvz->address->index,
            "street" => $pvz->address->street,
            "streetAbbr" => $pvz->address->streetAbbr,
            "houseNo" => $pvz->address->houseNo,
            "descript" => $pvz->address->descript,
            "latitude" => $pvz->geoCoordinates->latitude,
            "longitude" => $pvz->geoCoordinates->longitude,
        )
    
    );

    }   

    


?>