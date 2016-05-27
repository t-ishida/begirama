<?php
namespace Begirama;
use Begirama\Line\Request;
use Loula\HttpMultiClient;

class Callback
{
    public function process()
    {
        $client = new HttpMultiClient();
        foreach (Request::create(file_get_contents('php://stdin')) as $request) {
            $client->addRequest(
                $request->
                    buildReplyResponse(null)->
                    toHttpRequest(null,null,null));
        }
    }
}