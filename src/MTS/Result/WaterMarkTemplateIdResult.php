<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午3:44
 */

namespace MTS\Result;


class WaterMarkTemplateIdResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $waterMarkTemplateId = null;
        if (isset($xml->WaterMarkTemplateId)) {
            $waterMarkTemplateId = new \StdClass;
            $waterMarkTemplateId->waterMarkTemplateId = strval($xml->WaterMarkTemplateId);
        }
        return $waterMarkTemplateId;
    }
}