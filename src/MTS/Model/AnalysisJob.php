<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:49
 */

namespace MTS\Model;


class AnalysisJob
{

    public function __construct($id = '', $input = null, $analysisConfig = null, $templateList = [], $state = '', $code = '', $message = '', $percent = '', $priority = '', $userData = '', $pipelineId = '', $creationTime = '')
    {
        $this->id = $id;
        $this->input = $input;
        $this->analysisConfig = $analysisConfig;
        $this->templateList = $templateList;
        $this->state = $state;
        $this->code = $code;
        $this->message = $message;
        $this->percent = $percent;
        $this->priority = $priority;
        $this->userData = $userData;
        $this->pipelineId = $pipelineId;
        $this->creationTime = $creationTime;
    }

    /**
     * 模板分析作业ID
     *
     * @var string
     */
    protected $id = '';

    /**
     * 作业输入
     *
     * @var OssFile
     */
    protected $input = null;

    /**
     * 作业配置
     *
     * @var AnalysisConfig
     */
    protected $analysisConfig = null;

    /**
     * 作业输出的预置模板列表
     *
     * @var Template[]
     */
    protected $templateList = [];

    /**
     * 作业状态
     *
     * @var string
     */
    protected $state = '';

    /**
     * 分析失败时错误码
     *
     * @var string
     */
    protected $code = '';

    /**
     * 分析失败时作物信息
     *
     * @var string
     */
    protected $message = '';

    /**
     * 转码进度
     *
     * @var string
     */
    protected $percent = '';

    /**
     * 任务在其对应管道内的 优先级
     *
     * @var string
     */
    protected $priority = '';

    /**
     * 用户自定义数据
     *
     * @var string
     */
    protected $userData = '';

    /**
     * 管道ID
     *
     * @var string
     */
    protected $pipelineId = '';

    /**
     * 作业添加时间
     *
     * @var string
     */
    protected $creationTime = '';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return OssFile
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @return AnalysisConfig
     */
    public function getAnalysisConfig()
    {
        return $this->analysisConfig;
    }

    /**
     * @return Template[]
     */
    public function getTemplateList()
    {
        return $this->templateList;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @return string
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @return string
     */
    public function getPipelineId()
    {
        return $this->pipelineId;
    }

    /**
     * @return string
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }


}