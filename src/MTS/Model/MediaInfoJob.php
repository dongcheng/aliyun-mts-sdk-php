<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:42
 */

namespace MTS\Model;


class MediaInfoJob
{

    public function __construct($id = '', $input = null, $state = '', $code = '', $message = '', $properties = null, $userData = '', $creationTime = '')
    {
        $this->id = $id;
        $this->input = $input;
        $this->state = $state;
        $this->code = $code;
        $this->message = $message;
        $this->properties = $properties;
        $this->userData = $userData;
        $this->creationTime = $creationTime;
    }

    /**
     * 原信息分析作业ID
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
     * 作业状态
     *
     * @var string
     */
    protected $state = '';

    /**
     * 元信息分析失败时错误码
     *
     * @var string
     */
    protected $code = '';

    /**
     * 元信息分析失败时错误信息
     *
     * @var string
     */
    protected $message = '';

    /**
     * 属性
     *
     * @var Properties
     */
    protected $properties = null;

    /**
     * 用户自定义数据
     *
     * @var string
     */
    protected $userData = '';

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
     * @return Properties
     */
    public function getProperties()
    {
        return $this->properties;
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
    public function getCreationTime()
    {
        return $this->creationTime;
    }


}