<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午3:22
 */

namespace MTS\Result;


use MTS\Model\WaterMarkTemplate;

class WaterMarkTemplateResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $waterMarkTemplate = null;
        if (isset($xml->WaterMarkTemplate)) {
            $template = $xml->WaterMarkTemplate;
            $id = strval($template->Id);
            $name = strval($template->Name);
            $width = strval($template->Width);
            $height = strval($template->Height);
            $dx = strval($template->Dx);
            $dy = strval($template->Dy);
            $referPos = strval($template->ReferPos);
            $type = strval($template->Type);
            $state = strval($template->State);
            $waterMarkTemplate = new WaterMarkTemplate($id, $name, $width, $height, $dx, $dy, $referPos, $type, $state);
        }
        return $waterMarkTemplate;
    }
}