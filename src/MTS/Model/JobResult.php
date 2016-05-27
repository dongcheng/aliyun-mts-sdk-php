<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:21
 */

namespace MTS\Model;


class JobResult
{

    public function __construct($success = '', $code = '', $message = '', $job = null)
    {
        $this->success = $success;
        $this->code = $code;
        $this->message = $message;
        $this->job = $job;
    }

    /**
     * 是否成功
     *
     * @var string
     */
    protected $success = '';

    /**
     * 创建作业失败时错误码
     *
     * @var string
     */
    protected $code = '';

    /**
     * 创建作业失败时错误信息
     *
     * @var string
     */
    protected $message = '';

    /**
     * 作业
     *
     * @var Job
     */
    protected $job = null;

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
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
     * @return Job
     */
    public function getJob()
    {
        return $this->job;
    }


}