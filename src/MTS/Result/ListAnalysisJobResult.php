<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午2:03
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

class ListAnalysisJobResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $analysisJobList = $this->parseAnalysisJob($xml, $encodingType);
        return $analysisJobList;
    }

    private function parseAnalysisJob($xml, $encodingType)
    {
        $retList = [];
        if (isset($xml->AnalysisJobList)) {
            foreach ($xml->AnalysisJobList->AnalysisJob as $analysisJob) {
                $id = strval($analysisJob->Id);
                $input = $this->parseInput($analysisJob);
                $analysisConfig = $this->parseAnalysisConfig($analysisJob);
                $templateList = $this->parseTemplateList($analysisJob);
                $userData = strval($analysisJob->UserData);
                $state = strval($analysisJob->State);
                $code = strval($analysisJob->Code);
                $message = strval($analysisJob->Message);
                $percent = strval($analysisJob->Percent);
                $priority = strval($analysisJob->Priority);
                $creationTime = strval($analysisJob->CreationTime);
                $pipelineId = strval($analysisJob->PipelineId);
                $retList[] = new AnalysisJob($id, $input, $analysisConfig, $templateList, $state, $code, $message, $percent, $priority, $userData, $pipelineId, $creationTime);
            }
        }
        return $retList;
    }

    private function parseInput($analysisJob)
    {
        if (isset($analysisJob->InputFile)) {
            return new OssFile(strval($analysisJob->InputFile->Bucket), strval($analysisJob->InputFile->Location),strval($analysisJob->InputFile->Object));
        }
        return null;
    }
    private function parseAnalysisConfig($analysisJob)
    {
        if (isset($analysisJob->AnalysisConfig)) {
            return new AnalysisConfig(new QualityControl(strval($analysisJob->AnalysisConfig->QualityControl->RateQuality),strval($analysisJob->AnalysisConfig->QualityControl->MethodStreaming)));
        }
        return null;
    }

    private function parseTemplateList($analysisJob)
    {
        if (isset($analysisJob->TemplateList)) {
            $retList = [];
            foreach ($analysisJob->TemplateList->Template as $template) {
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