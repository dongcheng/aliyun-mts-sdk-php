<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 上午10:44
 */

namespace MTS\Result;


use MTS\Model\AnalysisConfig;
use MTS\Model\AnalysisJob;
use MTS\Model\Container;
use MTS\Model\OssFile;
use MTS\Model\QualityControl;
use MTS\Model\Template;
use MTS\Model\TemplateAudio;
use MTS\Model\TemplateVideo;

class AnalysisJobResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $analysisJob = $this->parseAnalysisJob($xml, $encodingType);
        return $analysisJob;
    }

    private function parseAnalysisJob($xml, $encodingType)
    {
        $id = strval($xml->AnalysisJob->Id);
        $input = $this->parseInput($xml);
        $analysisConfig = $this->parseAnalysisConfig($xml);
        $templateList = $this->parseTemplateList($xml);
        $userData = strval($xml->AnalysisJob->UserData);
        $state = strval($xml->AnalysisJob->State);
        $code = strval($xml->AnalysisJob->Code);
        $message = strval($xml->AnalysisJob->Message);
        $percent = strval($xml->AnalysisJob->Percent);
        $priority = strval($xml->AnalysisJob->Priority);
        $creationTime = strval($xml->AnalysisJob->CreationTime);
        $pipelineId = strval($xml->AnalysisJob->PipelineId);
        return new AnalysisJob($id, $input, $analysisConfig, $templateList, $state, $code, $message, $percent, $priority, $userData, $pipelineId, $creationTime);
    }

    private function parseInput($xml)
    {
        if (isset($xml->AnalysisJob->InputFile)) {
            return new OssFile(strval($xml->AnalysisJob->InputFile->Bucket), strval($xml->AnalysisJob->InputFile->Location),strval($xml->AnalysisJob->InputFile->Object));
        }
        return null;
    }
    private function parseAnalysisConfig($xml)
    {
        if (isset($xml->AnalysisJob->AnalysisConfig)) {
            return new AnalysisConfig(new QualityControl(strval($xml->AnalysisConfig->QualityControl->RateQuality),strval($xml->AnalysisConfig->QualityControl->MethodStreaming)));
        }
        return null;
    }

    private function parseTemplateList($xml)
    {
        if (isset($xml->AnalysisJob->TemplateList)) {
            $retList = [];
            foreach ($xml->AnalysisJob->TemplateList as $template) {
                $template = $template->Template;
                $id = strval($template->Id);
                $name = strval($template->Name);
                $container = new Container(strval($template->Container->Format));
                $video = new TemplateVideo(strval($template->Video->Codec), strval($template->Video->Profile), strval($template->Video->Bitrate), strval($template->Video->Crf), strval($template->Video->Width), strval($template->Video->Height), strval($template->Video->Fps), strval($template->Video->Gop));
                $audio = new TemplateAudio(strval($template->Audio->Codec),strval($template->Audio->Samplerate),strval($template->Audio->Bitrate),strval($template->Audio->Channles));
                $state = strval($template->State);
                $retList[] = new Template($id, $name, $container, $audio, $video, null, null, $state);
            }
            return $retList;
        }
        return null;
    }
}