<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午3:17
 */

use MTS\Core\MtsException;
use MTS\Http\RequestCore;
use MTS\Http\RequestCore_Exception;
use MTS\Http\ResponseCore;
use MTS\Model\MediaInfoJob;
use MTS\Result\AnalysisJobResult;
use MTS\Result\JobIdResult;
use MTS\Result\ListAnalysisJobResult;
use MTS\Result\ListJobResult;
use MTS\Result\ListMediaInfoJob;
use MTS\Result\ListMediaInfoJobResult;
use MTS\Result\ListSnapshotJob;
use MTS\Result\ListWaterMarkTemplateResult;
use MTS\Result\MediaInfoJobResult;
use MTS\Result\SnapshotJobResult;
use MTS\Result\WaterMarkTemplateIdResult;
use MTS\Result\WaterMarkTemplateResult;

class MtsClient
{
    /**
     * 返回值类型
     *
     * @var string
     */
    protected $format = 'xml';

    /**
     * API版本号
     *
     * @var string
     */
    protected $version = '2014-06-18';

    /**
     * 签名方式
     *
     * @var string
     */
    protected $signatureMethod = 'HMAC-SHA1';

    /**
     * 签名算法版本
     *
     * @var string
     */
    protected $signatureVersion = '1.0';

    /**
     * 阿里云访问AccessKeyId
     *
     * @var string
     */
    protected $accessKeyId = '';

    /**
     * 阿里云访问AccessKeySecret
     *
     * @var string
     */
    protected $accessKeySecret = '';

    /**
     * 阿里云多媒体服务接口域名
     *
     * @var string
     */
    protected $host = 'http://mts.aliyuncs.com';

    /**
     * 请求超时
     *
     * @var int
     */
    protected $timeout = 0;

    /**
     * 连接超时
     *
     * @var int
     */
    protected $connectTimeout = 0;

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @return int
     */
    public function getConnectTimeout()
    {
        return $this->connectTimeout;
    }

    /**
     * @return string
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * @return string
     */
    public function getSignatureVersion()
    {
        return $this->signatureVersion;
    }

    /**
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->accessKeyId;
    }

    /**
     * @return string
     */
    public function getAccessKeySecret()
    {
        return $this->accessKeySecret;
    }

    /**
     * @param $accessKeyId
     * @param $accessKeySecret
     * @throws MtsException
     */
    public function __construct($accessKeyId, $accessKeySecret)
    {
        $accessKeyId = trim($accessKeyId);
        $accessKeySecret = trim($accessKeySecret);

        if (empty($accessKeyId)) {
            throw new MtsException('access key is empty');
        }
        if (empty($accessKeySecret)) {
            throw new MtsException('access key secret is empty');
        }
        $this->accessKeyId = $accessKeyId;
        $this->accessKeySecret = $accessKeySecret;
        self::checkEnv();
    }

    /**
     * 提交媒体信息作业接口
     *
     * @param string $input
     * @param string $pipelineId
     * @param string $userData
     * @throws MtsException
     * @return MediaInfoJob
     */
    public function submitMediaInfoJob($input = '', $pipelineId = '', $userData = '')
    {
        if (empty($input)) {
            throw new MtsException('input is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['Input'] = $input;
        $options['PipelineId'] = $pipelineId;
        $options['UserData'] = $userData;
        $response = $this->auth($options);
        $result = new MediaInfoJobResult($response);
        return $result->getData();
    }

    /**
     * 查询媒体信息作业接口，可查询媒体信息作业信息
     *
     * @param string $mediaInfoJobIds
     * @throws MtsException
     * @return MediaInfoJobList
     */
    public function queryMediaInfoJobList($mediaInfoJobIds = '')
    {
        if (empty($mediaInfoJobIds)) {
            throw new MtsException('mediaInfoJobIds is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['MediaInfoJobIds'] = $mediaInfoJobIds;
        $response = $this->auth($options);
        $result = new ListMediaInfoJobResult($response);
        return $result->getData();
    }

    /**
     * 提交模板分析作业
     *
     * @param string $input
     * @param string $priority
     * @param string $userData
     * @param string $pipelineId
     * @throws MtsException
     * @return AnalysisJob
     */
    public function submitAnalysisJob($input = '', $pipelineId = '', $priority = '', $userData = '')
    {
        if (empty($input)) {
            throw new MtsException('input is empty');
        }
        if (empty($pipelineId)) {
            throw new MtsException('pipelineId is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['Input'] = $input;
        $options['PipelineId'] = $pipelineId;
        if (!empty($priority)) {
            $options['Priority'] = $priority;
        }
        if (!empty($userData)) {
            $options['UserData'] = $userData;
        }
        $response = $this->auth($options);
        $result = new AnalysisJobResult($response);
        return $result->getData();
    }

    /**
     * 查询模板分析作业
     *
     * @param string $analysisJobIds
     * @throws MtsException
     * @return AnalysisJobList
     */
    public function queryAnalysisJobList($analysisJobIds = '')
    {
        if (empty($analysisJobIds)) {
            throw new MtsException('analysisJobIds is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['AnalysisJobIds'] = $analysisJobIds;
        $response = $this->auth($options);
        $result = new ListAnalysisJobResult($response);
        return $result->getData();
    }

    /**
     * 创建水印模板
     *
     * @param string $name
     * @param string $config
     * @throws MtsException
     * @return WaterMarkTemplate
     */
    public function addWaterMarkTemplate($name = '', $config = '')
    {
        if (empty($name)) {
            throw new MtsException('name is empty');
        }
        if (empty($config)) {
            throw new MtsException('config is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['Name'] = $name;
        $options['Config'] = $config;
        $response = $this->auth($options);
        $result = new WaterMarkTemplateResult($response);
        return $result->getData();
    }

    /**
     * 更新水印模板
     *
     * @param string $waterMarkTemplateId
     * @param string $name
     * @param string $config
     * @throws MtsException
     * @return WaterMarkTemplate
     */
    public function updateWaterMarkTemplate($waterMarkTemplateId = '', $name = '', $config = '')
    {
        if (empty($waterMarkTemplateId)) {
            throw new MtsException('waterMarkTemplateId is empty');
        }
        if (empty($name)) {
            throw new MtsException('name is empty');
        }
        if (empty($config)) {
            throw new MtsException('config is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['WaterMarkTemplateId'] = $waterMarkTemplateId;
        $options['Name'] = $name;
        $options['Config'] = $config;
        $response = $this->auth($options);
        $result = new WaterMarkTemplateResult($response);
        return $result->getData();
    }

    /**
     * 删除水印模板
     *
     * @param string $waterMarkTemplateId
     * @throws MtsException
     * @return WaterMarkTemplateId
     */
    public function deleteWaterMarkTemplate($waterMarkTemplateId = '')
    {
        if (empty($waterMarkTemplateId)) {
            throw new MtsException('waterMarkTemplateId is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['WaterMarkTemplateId'] = $waterMarkTemplateId;
        $response = $this->auth($options);
        $result = new WaterMarkTemplateIdResult($response);
        return $result->getData();
    }

    /**
     * 查询水印模板
     *
     * @param string $waterMarkTemplateIds
     * @throws MtsException
     * @return WaterMarkTemplateId
     */
    public function queryWaterMarkTemplateList($waterMarkTemplateIds = '')
    {
        if (empty($waterMarkTemplateIds)) {
            throw new MtsException('waterMarkTemplateIds is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['WaterMarkTemplateIds'] = $waterMarkTemplateIds;
        $response = $this->auth($options);
        $result = new ListWaterMarkTemplateResult($response);
        return $result->getData();
    }

    /**
     * 搜索水印模板
     *
     * @param string $pageNumber
     * @param string $pageSize
     * @param string $state
     * @throws MtsException
     * @return WaterMarkTemplateId
     */
    public function searchWaterMarkTemplate($pageNumber = '', $pageSize = '', $state = '')
    {
        $options = [];
        $options['Action'] = __FUNCTION__;
        if (!empty($pageNumber)) {
            $options['PageNumber'] = $pageNumber;
        }
        if (!empty($pageSize)) {
            $options['PageSize'] = $pageSize;
        }
        if (!empty($state)) {
            $options['State'] = $state;
        }
        $response = $this->auth($options);
        $result = new ListWaterMarkTemplateResult($response);
        return $result->getData();
    }

    /**
     * 提交截图作业
     *
     * @param string $input
     * @param string $snapshotConfig
     * @param string $pipelineId
     * @param string $userData
     * @throws MtsException
     * @return SnapshotJob
     */
    public function submitSnapshotJob($input = '', $snapshotConfig = '', $pipelineId = '', $userData = '')
    {
        if (empty($input)) {
            throw new MtsException('input is empty');
        }
        if (empty($snapshotConfig)) {
            throw new MtsException('snapshotConfig is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['Input'] = $input;
        $options['SnapshotConfig'] = $snapshotConfig;
        if (!empty($pipelineId)) {
            $options['PipelineId'] = $pipelineId;
        }
        if (!empty($userData)) {
            $options['UserData'] = $userData;
        }
        $response = $this->auth($options);
        $result = new SnapshotJobResult($response);
        return $result->getData();
    }

    /**
     * 查询截图作业
     *
     * @param string $snapshotJobIds
     * @throws MtsException
     * @return SnapshotJobList
     */
    public function querySnapshotJobList($snapshotJobIds = '')
    {
        if (empty($snapshotJobIds)) {
            throw new MtsException('snapshotJobIds is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['SnapshotJobIds'] = $snapshotJobIds;
        $response = $this->auth($options);
        $result = new ListSnapshotJob($response);
        return $result->getData();
    }

    /**
     * 提交转码作业
     *
     * @param string $input
     * @param string $outputBucket
     * @param string $outputLocation
     * @param string $outputs
     * @param string $pipelineId
     * @throws MtsException
     * @return JobResultList
     */
    public function submitJobs($input = '', $outputBucket = '', $outputLocation = '', $outputs = '', $pipelineId = '')
    {
        if (empty($input)) {
            throw new MtsException('input is empty');
        }
        if (empty($outputBucket)) {
            throw new MtsException('outputBucket is empty');
        }
        if (empty($outputs)) {
            throw new MtsException('outputs is empty');
        }
        if (empty($pipelineId)) {
            throw new MtsException('pipelineId is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['Input'] = $input;
        $options['OutputBucket'] = $outputBucket;
        if (!empty($outputLocation)) {
            $options['OutputLocation'] = $outputLocation;
        }
        $options['Outputs'] = $outputs;
        $options['PipelineId'] = $pipelineId;
        $response = $this->auth($options);
        $result = new ListJobResult($response);
        return $result->getData();
    }

    /**
     * 取消转码作业
     *
     * @param string $jobId
     * @throws MtsException
     * @return StdClass
     */
    public function cancelJob($jobId = '')
    {
        if (empty($jobId)) {
            throw new MtsException('jobId is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['JobId'] = $jobId;
        $response = $this->auth($options);
        $result = new JobIdResult($response);
        return $result->getData();
    }

    /**
     * 查询转码作业
     *
     * @param string $jobIds
     * @throws MtsException
     * @return JobList
     */
    public function queryJobList($jobIds)
    {
        if (empty($jobIds)) {
            throw new MtsException('jobIds is empty');
        }
        $options = [];
        $options['Action'] = __FUNCTION__;
        $options['JobIds'] = $jobIds;
        $response = $this->auth($options);
        $result = new ListJobResult($response);
        return $result->getData();
    }

    /**
     * 列出转码作业
     *
     * @param string $nextPageToken
     * @param string $maximumPageSize
     * @param string $state
     * @param string $pipelineId
     * @param string $startOfJobCreatedTimeRange
     * @param string $endOfJobCreatedTimeRange
     * @throws MtsException
     * @return JobList
     */
    public function listJob($nextPageToken = '', $maximumPageSize = '', $state = '', $pipelineId= '', $startOfJobCreatedTimeRange = '', $endOfJobCreatedTimeRange = '')
    {
        $options = [];
        $options['Action'] = __FUNCTION__;
        if (!empty($nextPageToken)) {
            $options['NextPageToken'] = $nextPageToken;
        }
        if (!empty($maximumPageSize)) {
            $options['MaximumPageSize'] = $maximumPageSize;
        }
        if (!empty($state)) {
            $options['State'] = $state;
        }
        if (!empty($pipelineId)) {
            $options['PipelineId'] = $pipelineId;
        }
        if (!empty($startOfJobCreatedTimeRange)) {
            $options['StartOfJobCreatedTimeRange'] = $startOfJobCreatedTimeRange;
        }
        if (!empty($endOfJobCreatedTimeRange)) {
            $options['EndOfJobCreatedTimeRange'] = $endOfJobCreatedTimeRange;
        }
        $response = $this->auth($options);
        $result = new ListJobResult($response);
        return $result->getData();
    }

    /**
     * 验证并执行请求，按照MTS Api协议，执行操作
     *
     * @param array $actionParams
     * @return ResponseCore
     * @throws MtsException
     * @throws RequestCore_Exception
     */
    private function auth($actionParams)
    {
        $requestParams = $this->generateSystemParams($actionParams);
        $requestUrl = $this->host.'/?'.$this->toQueryString($requestParams);
        $request = new RequestCore($requestUrl);
        if ($this->timeout !== 0) {
            $request->timeout = $this->timeout;
        }
        if ($this->connectTimeout !== 0) {
            $request->connect_timeout = $this->connectTimeout;
        }
        try {
            $request->send_request();
        } catch (RequestCore_Exception $e) {
            throw(new MtsException('RequestCoreException: ' . $e->getMessage()));
        }
        $data = new ResponseCore($request->get_response_header(), $request->get_response_body(), $request->get_response_code());
        return $data;
    }

    /**
     * 构建请求参数
     *
     * @param array $actionParams
     * @return array
     */
    private function generateSystemParams($actionParams)
    {
        $systemParams = [];
        $systemParams['Format'] = $this->format;
        $systemParams['Version'] = $this->version;
        $systemParams['AccessKeyId'] = $this->accessKeyId;
        $systemParams['SignatureMethod'] = $this->signatureMethod;
        $systemParams['TimeStamp'] = gmdate('Y-m-d\TH:i:s\Z');
        $systemParams['SignatureVersion'] = $this->signatureVersion;
        $systemParams['SignatureNonce'] = md5(time());
        $params = array_merge($systemParams, $actionParams);
        $buildStr = '';
        ksort($params);
        foreach ($params as $key=>$value) {
            $buildStr .= str_replace(['+','*','%7E'],['%20','%2A','~'], urlencode($key)).'='.str_replace(['+','*','%7E'],['%20','%2A','~'], urlencode($value)).'&';
        }
        $buildStr = substr($buildStr,0,-1);
        $buildStr = str_replace(['+','*','%7E'],['%20','%2A','~'], urlencode($buildStr));
        $stringToSign = 'GET'.'&'.'%2F'.'&'.$buildStr;
        $signature = base64_encode(hash_hmac('sha1', $stringToSign, $this->accessKeySecret.'&', true));
        $params['Signature'] = $signature;
        return $params;
    }

    protected function toQueryString($options = array())
    {
        $temp = array();
        uksort($options, 'strnatcasecmp');
        foreach ($options as $key => $value) {
            if (is_string($key) && !is_array($value)) {
                $temp[] = rawurlencode($key) . '=' . rawurlencode($value);
            }
        }
        return implode('&', $temp);
    }

    /**
     * 用来检查sdk所以来的扩展是否打开
     *
     * @throws MtsException
     */
    public static function checkEnv()
    {
        if (function_exists('get_loaded_extensions')) {
            //检测curl扩展
            $enabled_extension = array("curl");
            $extensions = get_loaded_extensions();
            if ($extensions) {
                foreach ($enabled_extension as $item) {
                    if (!in_array($item, $extensions)) {
                        throw new MtsException("Extension {" . $item . "} is not installed or not enabled, please check your php env.");
                    }
                }
            } else {
                throw new MtsException("function get_loaded_extensions not found.");
            }
        } else {
            throw new MtsException('Function get_loaded_extensions has been disabled, please check php config.');
        }
    }
}