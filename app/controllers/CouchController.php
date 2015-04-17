<?php

class CouchController extends BaseController {
    
    public function getIndex()
    {
        $urls = [ 
            '/couch/check-running',
            '/couch/list-database',
            '/couch/get-uuid',
            '/couch/create-document',
            '/couch/get-document'
        ];
        
        foreach($urls as $url){
            echo "<a href='$url'>$url</a><br />";
        }
        
    }
    
    public function getCheckRunning()
    {
        $ch = curl_init();
         
        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/json',
            'Accept: */*'
        ));
         
        $response = curl_exec($ch);
         
        curl_close($ch);
        
        return $response;
    }
    
    public function getListDatabase()
    {
        $ch = curl_init();
         
        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/_all_dbs');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/json',
            'Accept: */*'
        ));
         
        $response = curl_exec($ch);
         
        curl_close($ch);        
        
        return $response;
    }
    
    public function getGetUuid()
    {
        $ch = curl_init();
         
        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/_uuids');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/json',
            'Accept: */*'
        ));
        
        // Does it matter I comment out it for now?
        // curl_setopt($ch, CURLOPT_USERPWD, 'my_cms:rockboy');
         
        $response = curl_exec($ch);
        $_response = json_decode($response, true);
         
        $UUID = $_response['uuids'];
         
        curl_close($ch);        
        
        return $UUID;
    }
    
    public function getCreateDocument()
    {
        $ch = curl_init();
         
        $customer = array(
            'firstname' => 'Branko',
            'lastname' => 'Ajzele',
            'username' => 'ajzele',
            'email' => 'branko.ajzele@example.com',
            'pass' => md5('myPass123')
        );
         
        $payload = json_encode($customer);
         
        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/my_cms/'.$customer['username']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); /* or PUT */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/json',
            'Accept: */*'
        ));
         
        curl_setopt($ch, CURLOPT_USERPWD, 'howtomakeaturn:rockboy');
         
        $response = curl_exec($ch);
         
        curl_close($ch);        
        
        return $response;
    }
    
    public function getGetDocument()
    {
        $ch = curl_init();
         
        $documentID = 'ajzele';
         
        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/my_cms/'.$documentID);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/json',
            'Accept: */*'
        ));
         
        curl_setopt($ch, CURLOPT_USERPWD, 'howtomakeaturn:rockboy');
         
        $response = curl_exec($ch);
         
        curl_close($ch);
        return $response;        
    }

}
