<?php

class DoctrineController extends BaseController {
    
    public function __construct()
    {
        App::bind('couchdb', function($app)
        {
            $options = [ 'dbname' => 'my_cms' ];
            
            $client = \Doctrine\CouchDB\CouchDBClient::create($options);
            
            return $client;
        });
    }
    
    public function getIndex()
    {
        $urls = [ 
            '/doctrine/all-docs',
            '/doctrine/get-uuids',
            '/doctrine/post-document'
        ];
        
        foreach($urls as $url){
            echo "<a href='$url'>$url</a><br />";
        }
        
    }
    
    public function getAllDocs()
    {
        $docs = App::make('couchdb')->allDocs();
        
        echo json_encode($docs->body);
        
        echo '<hr />';
        
        $link = '/doctrine/find-document/' . $docs->body['rows'][0]['id'];

        echo "<a href='$link'>$link</a>";
        
        echo "<br />";

        $link = '/doctrine/delete-document/' . $docs->body['rows'][0]['id'] . '/' . $docs->body['rows'][0]['value']['rev'];

        echo "<a href='$link'>$link</a>";

        echo "<br />";

        $link = '/doctrine/put-document/' . $docs->body['rows'][0]['id'] . '/' . $docs->body['rows'][0]['value']['rev'];

        echo "<a href='$link'>$link</a>";
    }
    
    public function getFindDocument($id)
    {
        $doc = App::make('couchdb')->findDocument($id);

        dd($doc);
    }

    public function getGetUuids()
    {
        $id = App::make('couchdb')->getUuids();

        return $id;
    }
    
    public function getPostDocument()
    {
        $doc = ['name' => 'Jack', 'age' => rand(10, 50)];
        
        $res = App::make('couchdb')->postDocument($doc);

        return $res;        
    }
    
    public function getDeleteDocument($id, $rev)
    {
        $res = App::make('couchdb')->deleteDocument($id, $rev);

        return $res;        
    }

    public function getPutDocument($id, $rev)
    {
        $doc = ['name' => 'Jack', 'age' => rand(10, 50)];
        
        $res = App::make('couchdb')->putDocument($doc, $id, $rev);

        return $res;        
    }
    
}
