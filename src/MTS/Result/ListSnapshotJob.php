<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午5:41
 */

namespace MTS\Result;


use MTS\Model\OssFile;
use MTS\Model\SnapshotConfig;
use MTS\Model\SnapshotJob;

class ListSnapshotJob extends Result
{

    protected function parseDataFromResponse()
    {
        $xml = new \SimpleXMLElement($this->rawResponse->body);
        $encodingType = isset($xml->EncodingType) ? strval($xml->EncodingType) : "";
        $retList = [];
        if (isset($xml->SnapshotJobList)) {
            foreach ($xml->SnapshotJobList->SnapshotJob as $job) {
                $id = strval($job->Id);
                $input = new OssFile(strval($job->Input->Bucket), strval($job->Input->Location), strval($job->Input->Object));
                $state = strval($job->State);
                $pipelineId = strval($job->PipelineId);
                $snapshotConfig = new SnapshotConfig(strval($job->SnapshotConfig->Interval), strval($job->SnapshotConfig->Time), strval($job->SnapshotConfig->Num), new OssFile(strval($job->SnapshotConfig->OutputFile->Bucket), strval($job->SnapshotConfig->OutputFile->Location), strval($job->SnapshotConfig->OutputFile->Object)));
                $retList[] = new SnapshotJob($id, $input, $snapshotConfig, '', $state);
            }
        }
        return $retList;
    }
}