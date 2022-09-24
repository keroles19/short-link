<?php

namespace kerodev\ShortLink;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Shorter
{
    public static function shortLink($link = "") {

        if(empty(getShorterToken()))
            return self::tokenException();
        if(empty($link))
            return (new Shorter)->linkException();

        return (new Shorter)->makeLink($link, getShorterToken());
    }

    private  function makeLink($link, $token){
        $client =  new \GuzzleHttp\Client();
        $headers = [
            'Authorization' => 'Bearer '.$token,
            'Content-Type' => 'application/json'
        ];
        $body = '{
          "domain": "bit.ly",
          "long_url": "'.$link.'"
        }';
        $request = new Request('POST', config('shortlink.SHORTEN_URL'), $headers, $body);
        $res = $client->sendAsync($request)->wait();
        return  json_decode($res->getBody() ?? '');
    }


    private  function linkException(): \Exception
    {
        return new \Exception("Please Provide Link");
    }

    private static function tokenException(): \Exception
    {
        return new \Exception('please provide shorter token ');
    }


}
