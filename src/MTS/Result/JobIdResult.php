<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/27
 * Time: 上午10:31
 */

namespace MTS\Result;


class JobIdResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $jobId = null;
        if (isset($xml->JobId)) {
            $jobId = new \StdClass;
            $jobId->JobId= strval($xml->JobId);
        }
        return $jobId;
    }
}