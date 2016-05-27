<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:41
 */

namespace MTS\Model;


class AudioCodec
{

    public function __construct($codec = '', $profile = '', $samplerate = '', $bitrate = '', $channels = '')
    {
        $this->codec = $codec;
        $this->profile = $profile;
        $this->samplerate = $samplerate;
        $this->bitrate = $bitrate;
        $this->channels = $channels;
    }

    /**
     * 音频编解码格式
     *
     *
     * @var string
     */
    protected $codec = '';

    /**
     * 音频编码预置
     *
     * @var string
     */
    protected $profile = '';

    /**
     * 采样率
     *
     * @var string
     */
    protected $samplerate = '';

    /**
     * 输出文件的音频码率
     *
     * @var string
     */
    protected $bitrate = '';

    /**
     * 声道数
     *
     * @var string
     */
    protected $channels = '';

    /**
     * @return string
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @return string
     */
    public function getSamplerate()
    {
        return $this->samplerate;
    }

    /**
     * @return string
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * @return string
     */
    public function getChannels()
    {
        return $this->channels;
    }

}