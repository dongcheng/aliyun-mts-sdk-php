<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:48
 */

namespace MTS\Model;


class VideoCodec
{

    public function __construct($codec = '', $profile = '', $bitrate = '', $crf = '', $width = '', $height = '', $fps = '', $gop = '', $preset = '', $scanMode = '', $bufsize = '', $maxrate = '', $bitrateBnd = null, $pixFmt = '')
    {
        $this->codec = $codec;
        $this->profile = $profile;
        $this->bitrate = $bitrate;
        $this->crf = $crf;
        $this->width = $width;
        $this->height = $height;
        $this->fps = $fps;
        $this->gop = $gop;
        $this->preset = $preset;
        $this->scanMode = $scanMode;
        $this->bufsize = $bufsize;
        $this->maxrate = $maxrate;
        $this->bitrateBnd = $bitrateBnd;
        $this->pixFmt = $pixFmt;
    }

    /**
     * 编解码格式
     *
     * @var string
     */
    protected $codec = '';

    /**
     * 编码级别
     *
     * @var string
     */
    protected $profile = '';

    /**
     * 视频平均码率
     *
     * @var string
     */
    protected $bitrate = '';

    /**
     * 码率-质量控制因子
     *
     * @var string
     */
    protected $crf = '';

    /**
     * 宽
     *
     * @var string
     */
    protected $width = '';

    /**
     * 高
     *
     * @var string
     */
    protected $height = '';

    /**
     * 帧率
     *
     * @var string
     */
    protected $fps = '';

    /**
     * 关键帧间最大帧数
     *
     * @var string
     */
    protected $gop = '';

    /**
     * 视频算法器预置
     *
     * @var string
     */
    protected $preset = '';

    /**
     * 扫描模式
     *
     * @var string
     */
    protected $scanMode = '';

    /**
     * 缓冲区大小
     *
     * @var string
     */
    protected $bufsize = '';

    /**
     * 视频码率峰值
     *
     * @var string
     */
    protected $maxrate = '';

    /**
     * 视频平均码率范围
     *
     * @var BitrateBnd
     */
    protected $bitrateBnd = null;

    /**
     * 视频颜色格式
     *
     * @var string
     */
    protected $pixFmt = '';

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
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * @return string
     */
    public function getCrf()
    {
        return $this->crf;
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
    public function getFps()
    {
        return $this->fps;
    }

    /**
     * @return string
     */
    public function getGop()
    {
        return $this->gop;
    }

    /**
     * @return string
     */
    public function getPreset()
    {
        return $this->preset;
    }

    /**
     * @return string
     */
    public function getScanMode()
    {
        return $this->scanMode;
    }

    /**
     * @return string
     */
    public function getBufsize()
    {
        return $this->bufsize;
    }

    /**
     * @return string
     */
    public function getMaxrate()
    {
        return $this->maxrate;
    }

    /**
     * @return BitrateBnd
     */
    public function getBitrateBnd()
    {
        return $this->bitrateBnd;
    }

    /**
     * @return string
     */
    public function getPixFmt()
    {
        return $this->pixFmt;
    }

}