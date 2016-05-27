<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:39
 */

namespace MTS\Model;


class Output
{

    public function __construct($outputFile = null, $templateId = '', $waterMarkList = null, $clip = '', $rotate = '', $properties = null, $priority = '', $container = null, $video = null, $audio = null, $transConfig = null, $muxConfig = null, $userData = '')
    {
        $this->outputFile = $outputFile;
        $this->templateId = $templateId;
        $this->waterMarkList = $waterMarkList;
        $this->clip = $clip;
        $this->rotate = $rotate;
        $this->properties = $properties;
        $this->priority = $priority;
        $this->container = $container;
        $this->video = $video;
        $this->audio = $audio;
        $this->transConfig = $transConfig;
        $this->muxConfig = $muxConfig;
        $this->userData = $userData;
    }

    /**
     * @return string
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * 输出文件
     *
     * @var OssFile
     */
    protected $outputFile = null;

    /**
     * 模板ID
     *
     * @var string
     */
    protected $templateId = '';

    /**
     * 水印列表
     *
     * @var WaterMark[]
     */
    protected $waterMarkList = [];

    /**
     * 剪辑片段
     *
     * @var Clip
     */
    protected $clip = null;

    /**
     * 视频旋转角度
     *
     * @var string
     */
    protected $rotate = '';

    /**
     * 媒体属性
     *
     * @var Properties
     */
    protected $properties = null;

    /**
     * 任务在其对应管道内的优先级
     *
     * @var string
     */
    protected $priority = '';

    /**
     * 容器
     *
     * @var Container
     */
    protected $container = null;

    /**
     * 视频配置
     *
     * @var VideoCodec
     */
    protected $video = null;

    /**
     * 音频配置
     *
     * @var AudioCodec
     */
    protected $audio = null;

    /**
     * 转码通用配置
     *
     * @var TransConfig
     */
    protected $transConfig = null;

    /**
     * 转码封包配置
     *
     * @var MuxConfig
     */
    protected $muxConfig = null;

    /**
     * 用户自定义数据
     *
     * @var string
     */
    protected $userData = '';

    /**
     * @return OssFile
     */
    public function getOutputFile()
    {
        return $this->outputFile;
    }

    /**
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @return WaterMark
     */
    public function getWaterMarkList()
    {
        return $this->waterMarkList;
    }

    /**
     * @return Clip
     */
    public function getClip()
    {
        return $this->clip;
    }

    /**
     * @return string
     */
    public function getRotate()
    {
        return $this->rotate;
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
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @return VideoCodec
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return AudioCodec
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @return TransConfig
     */
    public function getTransConfig()
    {
        return $this->transConfig;
    }

    /**
     * @return MuxConfig
     */
    public function getMuxConfig()
    {
        return $this->muxConfig;
    }


}