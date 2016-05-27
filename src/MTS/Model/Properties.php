<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:28
 */

namespace MTS\Model;


class Properties
{

    public function __construct($format = null, $streams = null, $fileSize = '', $fileFormat = '', $duration = '', $height = '', $width = '', $fps = '', $bitrate = '')
    {
        $this->format = $format;
        $this->streams = $streams;
        $this->fileSize = $fileSize;
        $this->fileFormat = $fileFormat;
        $this->duration = $duration;
        $this->height = $height;
        $this->width = $width;
        $this->fps = $fps;
        $this->bitrate = $bitrate;
    }

    /**
     * 格式信息
     *
     * @var FormatInfo
     */
    protected $format = null;

    /**
     * 流信息
     *
     * @var StreamsInfo
     */
    protected $streams = null;

    /**
     * FileSize
     *
     * @var string
     */
    protected $fileSize = '';

    /**
     * FileFormat
     *
     * @var string
     */
    protected $fileFormat;

    /**
     * Duration
     *
     * @var string
     */
    protected $duration = '';

    /**
     * Height
     *
     * @var string
     */
    protected $height = '';

    /**
     * Width
     *
     * @var string
     */
    protected $width = '';

    /**
     * fps
     *
     * @var string
     */
    protected $fps = '';

    /**
     * Bitrate
     *
     * @var string
     */
    protected $bitrate = '';

    /**
     * @return string
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
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
    public function getHeight()
    {
        return $this->height;
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
    public function getFps()
    {
        return $this->fps;
    }

    /**
     * @return string
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * @return FormatInfo
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @return StreamsInfo
     */
    public function getStreams()
    {
        return $this->streams;
    }



}