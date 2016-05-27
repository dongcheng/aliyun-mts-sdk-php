<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午3:39
 */

namespace MTS\Model;


class VideoStream
{

    public function __construct($index = '', $codecName = '', $codecLongName = '', $profile = '', $codecTimeBase = '', $codecTagString = '', $codecTag = '', $width = '', $height = '', $hasBFrames = '', $sar = '', $dar = '' , $pixFmt = '', $level = '', $fps = '', $avgFPS = '', $timebase = '', $startTime = '', $duration = '', $bitrate = '', $numFrames = '', $lang = '')
    {
        $this->index = $index;
        $this->codecLongName = $codecLongName;
        $this->codecName = $codecName;
        $this->profile = $profile;
        $this->codecTimeBase = $codecTimeBase;
        $this->codecTagString = $codecTagString;
        $this->codecTag = $codecTag;
        $this->width = $width;
        $this->height = $height;
        $this->hasBFrames = $hasBFrames;
        $this->sar = $sar;
        $this->dar = $dar;
        $this->pixFmt = $pixFmt;
        $this->level = $level;
        $this->fps = $fps;
        $this->avgFPS = $avgFPS;
        $this->timebase = $timebase;
        $this->startTime = $startTime;
        $this->duration = $duration;
        $this->bitrate = $bitrate;
        $this->numFrames = $numFrames;
        $this->lang = $lang;

    }

    /**
     * 视频流序号，标识视频流在整个媒体流中的位置
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
     * 编码预置
     *
     * @var string
     */
    protected $profile = '';

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
     * @var strign
     */
    protected $codecTag = '';

    /**
     * 视频分辨率宽 数字
     *
     * @var string
     */
    protected $width = '';

    /**
     * 视频分辨率长 数字
     *
     * @var string
     */
    protected $height = '';

    /**
     * 是否有B帧
     *
     * @var string
     */
    protected $hasBFrames = '';

    /**
     * 编码信号分辨率比
     *
     * @var string
     */
    protected $sar = '';

    /**
     * 编码显示分辨率比
     *
     * @var string
     */
    protected $dar = '';

    /**
     * 像素格式
     *
     * @var string
     */
    protected $pixFmt = '';

    /**
     * 编码等级
     *
     * @var string
     */
    protected $level = '';

    /**
     * 帧率 数字
     */
    protected $fps = '';

    /**
     * 平均帧率
     *
     * @var string
     */
    protected $avgFPS = '';

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
     * @var lang
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
    public function getProfile()
    {
        return $this->profile;
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
     * @return strign
     */
    public function getCodecTag()
    {
        return $this->codecTag;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getHasBFrames()
    {
        return $this->hasBFrames;
    }

    /**
     * @return string
     */
    public function getSar()
    {
        return $this->sar;
    }

    /**
     * @return string
     */
    public function getDar()
    {
        return $this->dar;
    }

    /**
     * @return string
     */
    public function getPixFmt()
    {
        return $this->pixFmt;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return mixed
     */
    public function getFps()
    {
        return $this->fps;
    }

    /**
     * @return string
     */
    public function getAvgFPS()
    {
        return $this->avgFPS;
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
     * @return lang
     */
    public function getLang()
    {
        return $this->lang;
    }

}