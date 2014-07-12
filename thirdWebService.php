<?php

    try {
        $wsdl_url = 'http://192.168.1.101:8080/WSServer/WSServer3?WSDL';
        $client = new SOAPClient($wsdl_url);


        $params = array(
            'name' => $_POST['user'],
            'nonce' => $_POST['nonce'],
            'tocompile' => $_POST['code'],
        );

        $return = $client->Compile($params);
        echo $return->return;
        
       
    } catch (Exception $e) {
        echo "Exception occured: " . $e;
    }

?>