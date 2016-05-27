<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:31
 */

namespace MTS\Model;


class JobInput
{

    public function __construct($bucket = '', $location = '', $object = '', $audio = null, $container = null)
    {
        $this->bucket = $bucket;
        $this->location = $location;
        $this->object = $object;
        $this->audio = $audio;
        $this->container = $container;
    }

    /**
     * 输入作业OSS的Bucket
     *
     * @var string
     */
    protected $bucket = '';

    /**
     * 作业输入OSS的服务区域
     *
     * @var string
     */
    protected $location = '';

    /**
     * 作业输入OSS的Object
     *
     * @var string
     */
    protected $object = '';

    /**
     * 转码源媒体音频配置
     *
     * @var InputAudio
     */
    protected $audio = null;

    /**
     * 转码元媒体容器配置
     *
     * @var InputContainer
     */
    protected $container = null;

    /**
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return InputAudio
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @return InputContainer
     */
    public function getContainer()
    {
        return $this->container;
    }


}