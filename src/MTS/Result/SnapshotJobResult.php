<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午5:04
 */

namespace MTS\Result;


use MTS\Model\OssFile;
use MTS\Model\SnapshotConfig;
use MTS\Model\SnapshotJob;

class SnapshotJobResult extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $snapshotJob = null;
        if (isset($xml->SnapshotJob)) {
            $job = $xml->SnapshotJob;
            $id = strval($job->Id);
            $input = new OssFile(strval($job->Input->Bucket), strval($job->Input->Location), strval($job->Input->Object));
            $state = strval($job->State);
            $pipelineId = strval($job->PipelineId);
            $snapshotConfig = new SnapshotConfig(strval($job->SnapshotConfig->Interval), strval($job->SnapshotConfig->Time), strval($job->SnapshotConfig->Num), new OssFile(strval($job->SnapshotConfig->OutputFile->Bucket), strval($job->SnapshotConfig->OutputFile->Location), strval($job->SnapshotConfig->OutputFile->Object)));
            $snapshotJob = new SnapshotJob($id, $input, $snapshotConfig, '', $state);
        }
        return $snapshotJob;
    }
}