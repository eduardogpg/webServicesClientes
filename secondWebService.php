<?php
    
    try {
        $wsdl_url = 'http://192.168.0.113:8080/WSServer/WSServer2?WSDL';
        $client = new SOAPClient($wsdl_url);


        $params = array(
            'Name' => $_POST['valOne'],
            'nonce' => $_POST['ValTwo'],
        );

        $return = $client->Nonce($params);
        echo $return->return;
       
    } catch (Exception $e) {
        echo "Exception occured: " . $e;
    }
    

?>