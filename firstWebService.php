<?php

    try {
        $wsdl_url = 'http://192.168.0.113:8080/WSServer/WSServer?WSDL';
        $client = new SOAPClient($wsdl_url);


        $params = array(
            'name' => $_POST['valOne'],
            'pass' => $_POST['ValTwo'],
        );

        $return = $client->getData($params);
        echo $return->return;
       
    } catch (Exception $e) {
        echo "Exception occured: " . $e;
    }

?>