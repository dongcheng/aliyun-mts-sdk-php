<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午7:44
 */

namespace MTS\Result;


use MTS\Model\AudioStream;
use MTS\Model\Clip;
use MTS\Model\Container;
use MTS\Model\FormatInfo;
use MTS\Model\Job;
use MTS\Model\JobResult;
use MTS\Model\OssFile;
use MTS\Model\Output;
use MTS\Model\Properties;
use MTS\Model\StreamsInfo;
use MTS\Model\SubtitleStream;
use MTS\Model\VideoStream;
use MTS\Model\WaterMark;

class ListJobResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $retList = [];
        if (isset($xml->JobResultList)) {
            foreach($xml->JobResultList->JobResult as $jobResult) {
                $success = strval($jobResult->Success);
                $code = strval($jobResult->Code);
                $message = strval($jobResult->Message);
                $job = $this->parseJob($jobResult->Job);
                $retList[] = new JobResult($success, $code, $message, $job);
            }
        }
        if (isset($xml->JobList)) {
            foreach($xml->JobList->Job as $jobResult) {
                $job = $this->parseJob($jobResult);
                $retList[] = $job;
            }
        }
        if (isset($xml->NextPageToken)) {
            return ['jobList'=>$retList, 'nextPageToken'=>strval($xml->NextPageToken)];
        }
        return $retList;
    }

    private function parseJob($jobResult)
    {
        $jobId = strval($jobResult->JobId);
        $input = new OssFile(strval($jobResult->Input->Bucket), strval($jobResult->Input->Location), strval($jobResult->Input->Object));
        $output = new Output(
            new OssFile(strval($jobResult->Output->OutputFile->Bucket), strval($jobResult->Output->OutputFile->Location), strval($jobResult->Output->OutputFile->Object)),
            strval($jobResult->Output->TemplateId),
            $this->parseWaterMarkList($jobResult->Output->WaterMarkList->WaterMark),
                new Clip(strval($jobResult->Output->Clip->TimeSpan)),
                '',
                $this->parseProperties($jobResult->Output->Properties),
                strval($jobResult->Output->Priority),
                null,
                null,
                null,
                null,
                null,
                strval($jobResult->OutPut->UserData)
        );
        $state = strval($jobResult->State);
        $code = strval($jobResult->Code);
        $message = strval($jobResult->Message);
        $percent = strval($jobResult->Percent);
        $pipelineId = strval($jobResult->PipelineId);
        $creationTime = strval($jobResult->CreationTime);
        return new Job($jobId, $input, $output, $state, $code, $message, $percent, '',$pipelineId, $creationTime);
    }

    private function parseWaterMarkList($waterMarkList)
    {
        $retList = [];
        foreach ($waterMarkList as $waterMark) {
            $retList[] = new WaterMark(
                new OssFile(strval($waterMarkList->InputFile->Bucket), strval($waterMarkList->InputFile->Location), strval($waterMarkList->InputFile->Object)),
                strval($waterMarkList->WaterMarkTemplateId)
            );
        }
        return $retList;
    }

    private function parseProperties($properties)
    {
        $fileSize = strval($properties->FileSize);
        $format = new FormatInfo(strval($properties->Format->NumStreams),strval($properties->Format->NumPrograms),strval($properties->Format->FormatName),strval($properties->Format->FormatLongName),strval($properties->Format->StartTime),strval($properties->Format->Duration),strval($properties->Format->Size),strval($properties->Format->Bitrate));
        $fileFormat = strval($properties->FileFormat);
        $duration = strval($properties->Duration);
        $height = strval($properties->Height);
        $width = strval($properties->Width);
        $fps = strval($properties->Fps);
        $bitrate = strval($properties->Bitrate);
        $streams = new StreamsInfo(
            $this->parseVideoStreamList($properties->Streams->VideoStreamList),
            $this->parseAudioStreamList($properties->Streams->AudioStreamList),
            $this->parseSubtitleStreamList($properties->Streams->SubtitleStreamList)
        );
        return new Properties($format, $streams , $fileSize , $fileFormat , $duration, $height, $width, $fps ,$bitrate);
    }

    private function parseSubtitleStreamList($subtitleStreamList)
    {
        $retList = [];
        if (count($subtitleStreamList) > 0) {
            foreach ($subtitleStreamList->SubtitleStream as $subtitle) {
                $subtitleStream = new SubtitleStream(strval($subtitle->Index), strval($subtitle->Lang));
                $retList[] = $subtitleStream;
            }
        }
        return $retList;
    }

    private function parseAudioStreamList($audioStreamList)
    {
        $retList = [];
        if (count($audioStreamList) > 0) {
            foreach ($audioStreamList->AudioStream as $audio) {
                $audioStream = new AudioStream(strval($audio->Index), strval($audio->CodecName), strval($audio->CodecLongName), strval($audio->CodecTimeBase), strval($audio->CodecTagString), strval($audio->CodecTag), strval($audio->SampleFmt), strval($audio->Channels), strval($audio->ChannelLayout), strval($audio->Timebase), strval($audio->StartTime), strval($audio->Duration), strval($audio->Bitrate), strval($audio->NumFrames), strval($audio->Lang));
                $retList[] = $audioStream;
            }
        }
        return $retList;
    }

    private function parseVideoStreamList($videoStreamList)
    {
        $retList = [];
        if (count($videoStreamList) > 0) {
            foreach ($videoStreamList->VideoStream as $video) {
                $videoStream = new VideoStream(strval($video->Index),strval($video->CodecName), strval($video->CodecLongName), strval($video->Profile), strval($video->CodecTimeBase), strval($video->CodecTagString), strval($video->CodecTag), strval($video->Width), strval($video->Height), strval($video->HasBFrames), strval($video->Sar), strval($video->Dar), strval($video->PixFmt), strval($video->Level), strval($video->Fps), strval($video->AvgFPS), strval($video->Timebase), strval($video->StartTime), strval($video->Duration), strval($video->Bitrate), strval($video->NumFrames), strval($video->Lang));
                $retList[] = $videoStream;
            }
        }
        return $retList;
    }
}