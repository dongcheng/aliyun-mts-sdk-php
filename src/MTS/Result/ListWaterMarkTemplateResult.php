<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午3:57
 */

namespace MTS\Result;


use MTS\Model\WaterMarkTemplate;

class ListWaterMarkTemplateResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        if (isset($xml->WaterMarkTemplateList)) {
            $retList = [];
            foreach ($xml->WaterMarkTemplateList->WaterMarkTemplate as $template) {
                $id = strval($template->Id);
                $name = strval($template->Name);
                $width = strval($template->Width);
                $height = strval($template->Height);
                $dx = strval($template->Dx);
                $dy = strval($template->Dy);
                $referPos = strval($template->ReferPos);
                $type = strval($template->Type);
                $state = strval($template->State);
                $retList[] = new WaterMarkTemplate($id, $name, $width, $height, $dx, $dy, $referPos, $type, $state);

            }
            return $retList;
        }
        return null;
    }
}