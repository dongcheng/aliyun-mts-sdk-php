<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:08
 */

namespace MTS\Model;


class AudioStream
{

    public function __construct($index = '', $codecName = '', $codecLongName = '', $codecTimeBase = '', $codecTagString = '', $codecTag = '', $sampleFmt = '', $samplerate = '', $channels = '', $channelLayout = '', $timebase = '', $startTime = '', $duration = '', $bitrate = '', $numFrames = '', $lang = '')
    {
        $this->lang = $lang;
        $this->sampleFmt = $sampleFmt;
        $this->codecLongName = $codecLongName;
        $this->codecName = $codecName;
        $this->codecTimeBase = $codecTimeBase;
        $this->timebase = $timebase;
        $this->codecTag = $codecTag;
        $this->channels = $channels;
        $this->channelLayout = $channelLayout;
        $this->index = $index;
        $this->samplerate = $samplerate;
        $this->duration = $duration;
        $this->startTime = $startTime;
        $this->bitrate = $bitrate;
        $this->codecTagString = $codecTagString;
    }

    /**
     * 音频流序号，标识音频流在整个媒体流中的位置
     *
     * @var string
     */
    protected $index = '';

    /**
     * 编码格式简述名
     *
     * @var string
     */
    protected $codecName = '';

    /**
     * 编码格式长述名
     *
     * @var string
     */
    protected $codecLongName = '';

    /**
     * 编码时基
     *
     * @var string
     */
    protected $codecTimeBase = '';

    /**
     * 编码格式标记文本
     *
     * @var string
     */
    protected $codecTagString = '';

    /**
     * 编码格式标记
     *
     * @var string
     */
    protected $codecTag = '';

    /**
     * 采样格式
     *
     * @var string
     */
    protected $sampleFmt = '';

    /**
     * 采样率
     *
     * @var string
     */
    protected $samplerate = '';

    /**
     * 声道数
     *
     * @var string
     */
    protected $channels = '';

    /**
     * 声道输出样式
     *
     * @var string
     */
    protected $channelLayout = '';

    /**
     * 时基
     *
     * @var string
     */
    protected $timebase = '';

    /**
     * 起始时间
     *
     * @var string
     */
    protected $startTime = '';

    /**
     * 时长
     *
     * @var string
     */
    protected $duration = '';

    /**
     * 码率
     *
     * @var string
     */
    protected $bitrate = '';

    /**
     * 总帧数
     *
     * @var string
     */
    protected $numFrames = '';

    /**
     * 语言
     *
     * @var string
     */
    protected $lang = '';

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @return string
     */
    public function getCodecName()
    {
        return $this->codecName;
    }

    /**
     * @return string
     */
    public function getCodecLongName()
    {
        return $this->codecLongName;
    }

    /**
     * @return string
     */
    public function getCodecTimeBase()
    {
        return $this->codecTimeBase;
    }

    /**
     * @return string
     */
    public function getCodecTagString()
    {
        return $this->codecTagString;
    }

    /**
     * @return string
     */
    public function getCodecTag()
    {
        return $this->codecTag;
    }

    /**
     * @return string
     */
    public function getSampleFmt()
    {
        return $this->sampleFmt;
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
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * @return string
     */
    public function getChannelLayout()
    {
        return $this->channelLayout;
    }

    /**
     * @return string
     */
    public function getTimebase()
    {
        return $this->timebase;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
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
    public function getNumFrames()
    {
        return $this->numFrames;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

}