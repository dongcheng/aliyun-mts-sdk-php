<?php
date_default_timezone_set('Asia/Shanghai');
function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ .DIRECTORY_SEPARATOR.'src'. DIRECTORY_SEPARATOR . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');
use MTS\MtsClient;
$mtsClient = new MtsClient('***', '***');
//$result = $mtsClient->submitMediaInfoJob(json_encode(['Bucket'=>'bucket','Location'=>'oss-cn-hangzhou','Object'=>'demo/3874309.mp4']),'pipelineId');
//$result = $mtsClient->queryMediaInfoJobList('3b6d1404f1fd4c31a9260e579ab04b2f,c7176722ea1f462eb7bb5e510ff0b11b');
//$result = $mtsClient->submitAnalysisJob(json_encode(['Bucket'=>'bucket','Location'=>'oss-cn-hangzhou','Object'=>'demo/mtv1.mp4']),'pipelineId' );
//$result = $mtsClient->queryAnalysisJobList('5842526d3b794a64bb58f8bd48d1acf3,4c710802f3b144a5855ff5d30cfb7413,f34ce279daf44c35ae742fc0af1c4d90,89d58f8b0c97463e922370a39a8383b3');
//$result = $mtsClient->addWaterMarkTemplate('test_logo_2', json_encode(['Width'=>10, 'Height'=>10, 'Dx'=>10, 'Dy'=>10, 'ReferPos'=>'TopLeft', 'Type'=>'Image']));
//$result = $mtsClient->deleteWterMarkTemplate('7dac9da86f654b968dd81f8be0d57a28');
//$result = $mtsClient->queryWaterMarkTemplateList('c02991f4257b433092b410a9fb020515');
//$result = $mtsClient->searchWaterMarkTemplate(1, 10);
//$result = $mtsClient->submitSnapshotJob(json_encode(['Bucket'=>'bucket','Location'=>'oss-cn-hangzhou','Object'=>'demo/3874309.mp4']), json_encode(['OutputFile'=>['Bucket'=>'bucket','Location'=>'oss-cn-hangzhou','Object'=>'demo/3874309_snapshot_{Count}.jpg'],'Time'=>5,'Num'=>5,'Interval'=>20]), 'pipelineId');
//$result = $mtsClient->querySnapshotJobList('db6713c1459f45c8bd702fc42b772f50,14b8fd82760346c3866296b655e42187');
//$result = $mtsClient->submitJobs(
//    json_encode(['Bucket'=>'bucket','Location'=>'oss-cn-hangzhou','Object'=>'demo/mtv1.mp4']),
//    'bucket',
//    'oss-cn-hangzhou',
//    json_encode([
//        [
//            'OutputObject' => 'demo/test_5',
//            'TemplateId' => 'S00000000-100020',
//            'WaterMarks' => [
//                [
//                    'InputFile' => [
//                        'Bucket' => 'bucket',
//                        'Location' => 'oss-cn-hangzhou',
//                        'Object' => 'demo/logo-512.png'
//                    ],
//                    'WaterMarkTemplateId' => 'c02991f4257b433092b410a9fb020515'
//                ]
//            ],
//            'UserData' => 'test_video2'
//        ]
//    ]),
//    'pipelineId'
//);
//$result = $mtsClient->cancelJob('1239e52536bd4962ac8171d81c9a5cc9');
//$result = $mtsClient->queryJobList('1239e52536bd4962ac8171d81c9a5cc9');
//$result = $mtsClient->listJob('',2);
var_dump($result, date('Y-m-d H:i:s'));die;