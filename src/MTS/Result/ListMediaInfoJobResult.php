<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/25
 * Time: 下午1:43
 */

namespace MTS\Result;


use MTS\Model\AudioStream;
use MTS\Model\FormatInfo;
use MTS\Model\MediaInfoJob;
use MTS\Model\OssFile;
use MTS\Model\Properties;
use MTS\Model\StreamsInfo;
use MTS\Model\SubtitleStream;
use MTS\Model\VideoStream;

class ListMediaInfoJobResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $mediaInfoJobList = $this->parseMediaInfoJob($xml, $encodingType);
        return $mediaInfoJobList;
    }

    private function parseMediaInfoJob($xml, $encodingType)
    {
        $retList = [];
        if (isset($xml->MediaInfoJobList)) {
            foreach ($xml->MediaInfoJobList->MediaInfoJob as $job) {
                $creationTime = strval($job->CreationTime);
                $input = new OssFile(strval($job->Input->Bucket), strval($job->Input->Location), strval($job->Input->Object));
                $state = strval($job->State);
                $jobId = strval($job->JobId);
                $pipelineId = strval($job->PipelineId);
                $userData = strval($job->UserData);
                $properties = new Properties($this->parseFormat($job->Properties->Format),
                    new StreamsInfo(
                        $this->parseVideoStreamList($job->Properties->Streams->VideoStreamList),
                        $this->parseAudioStreamList($job->Properties->Streams->AudioStreamList),
                        $this->parseSubtitleStreamList($job->Properties->Streams->SubtitleStreamList)
                    )
                );
                $retList[] = new MediaInfoJob($jobId,$input, $state, '','',$properties, $userData,$creationTime);
            }
        }
        return $retList;
    }

    private function parseFormat($format)
    {
        return new FormatInfo(strval($format->NumStreams), strval($format->NumPrograms), strval($format->FormatName), strval($format->FormatLongName), strval($format->StartTime), strval($format->Duration), strval($format->Size), strval($format->Bitrate));
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