<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:23
 */

namespace MTS\Model;


class Job
{

    public function __construct($jobId = '', $input = null, $output = null, $state = '', $code = '', $message = '', $percent = '', $userData = '', $pipelineId = '', $creaionTime = '')
    {
        $this->jobId = $jobId;
        $this->input = $input;
        $this->output = $output;
        $this->state = $state;
        $this->code = $code;
        $this->message = $message;
        $this->percent = $percent;
        $this->userData = $userData;
        $this->pipelineId = $pipelineId;
        $this->creationTime = $creaionTime;
    }

    /**
     * 任务ID
     *
     * @var string
     */
    protected $jobId = '';

    /**
     * 作业输入
     *
     * @var JobInput
     */
    protected $input = null;

    /**
     * 作业输出
     *
     * @var Output
     */
    protected $output = null;

    /**
     * 作业状态
     *
     * @var string
     */
    protected $state = '';

    /**
     * 转码失败时的错误码
     *
     * @var string
     */
    protected $code = '';

    /**
     * 转码失败时的消息
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
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * @return JobInput
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @return Output
     */
    public function getOutput()
    {
        return $this->output;
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