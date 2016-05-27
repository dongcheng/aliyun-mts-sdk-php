<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:30
 */

namespace MTS\Model;


class Template
{

    public function __construct($id = '', $name = '', $container = null, $audio = null, $video = null, $transConfig = null, $muxConfig = null, $state = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->container = $container;
        $this->audio = $audio;
        $this->video = $video;
        $this->transConfig = $transConfig;
        $this->muxConfig = $muxConfig;
        $this->state = $state;
    }

    /**
     * 转码模板ID
     *
     * @var string
     */
    protected $id = '';

    /**
     * 模板名称
     *
     * @var string
     */
    protected $name = '';

    /**
     * 容器
     *
     * @var Container
     */
    protected $container = null;

    /**
     * 音频编解码配置
     *
     * @var AudioCodec
     */
    protected $audio = null;

    /**
     * 视频编解码配置
     *
     * @var VideoCodec
     */
    protected $video = null;

    /**
     * 转码通用配置
     *
     * @var TransConfig
     */
    protected $transConfig = null;

    /**
     * 转码封包配置
     *
     * @var MusConfig
     */
    protected $muxConfig = null;

    /**
     * 模板的状态
     *
     * @var string
     */
    protected $state = '';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @return AudioCodec
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @return VideoCodec
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return TransConfig
     */
    public function getTransConfig()
    {
        return $this->transConfig;
    }

    /**
     * @return MusConfig
     */
    public function getMuxConfig()
    {
        return $this->muxConfig;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}