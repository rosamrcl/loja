<?php
function api_request($endpoint, $method='GET', $variables=[]){

    //iniciando curl do cliente
    $client=curl_init();
    
    curl_setopt($client, CURLOPT_RETURNTRANSFER,true);     // CURLOPT_RETURNTRANSFERtransfere para uma string

    //definir a nosa url
    $url=API_BASE_URL;

    //se o metodo for GET
    if($method=='GET'){
        $url.="?endpoint=$endpoint";
        if(!empty($variables)){
            $url.="&".http_build_query($variables);
        }
    }

    //se o metodo for POST
    if($method=='POST'){
        $variables=array_merge(['endpoint'=>$endpoint],$variables);
        curl_setopt($client, CURLOPT_POSTFIELDS, $variables);     //CURLOPT_POSTFIELDS codifica os dados da string que pedimos inicialmente para transformar em string        
    }

    //incorporar o endpoint
    curl_setopt($client, CURLOPT_URL, $url);
    $response=curl_exec($client);
    return json_decode($response,true);

    echo $url;
}
?>