<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:23
 */

namespace MTS\Model;


class FormatInfo
{

    public function __construct($numStreams = '', $numPrograms = '', $formatName = '', $formatLoneName = '', $startTime = '', $duration = '', $size = '', $bitrate = '')
    {
        $this->numStreams = $numStreams;
        $this->numPrograms = $numPrograms;
        $this->formatName = $formatName;
        $this->formatLongName = $formatLoneName;
        $this->startTime = $startTime;
        $this->duration = $duration;
        $this->size = $size;
        $this->bitrate = $bitrate;
    }

    /**
     * 媒体流总数
     *
     * @var string
     */
    protected $numStreams = '';

    /**
     * 节目流总数
     *
     * @var string
     */
    protected $numPrograms = '';

    /**
     * 容器/封装格式简述名
     *
     * @var string
     */
    protected $formatName = '';

    /**
     * 容器/封装格式长述名
     *
     * @var string
     */
    protected $formatLongName = '';

    /**
     * 起始时间
     *
     * @var string
     */
    protected $startTime = '';

    /**
     * 总时长
     *
     * @var string
     */
    protected $duration = '';

    /**
     * 文件大小
     *
     * @var string
     */
    protected $size = '';

    /**
     * 总码率
     *
     * @var string
     */
    protected $bitrate = '';

    /**
     * @return string
     */
    public function getNumStreams()
    {
        return $this->numStreams;
    }

    /**
     * @return string
     */
    public function getNumPrograms()
    {
        return $this->numPrograms;
    }

    /**
     * @return string
     */
    public function getFormatName()
    {
        return $this->formatName;
    }

    /**
     * @return string
     */
    public function getFormatLongName()
    {
        return $this->formatLongName;
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
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

}