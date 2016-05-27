<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 上午11:27
 */

namespace MTS\Model;


class TemplateVideo
{

    public function __construct($codec = '', $profile = '', $bitrate ='', $crf = '', $width = '', $height ='' , $fps = '', $gop = '')
    {
        $this->codec = $codec;
        $this->profile = $profile;
        $this->bitrate = $bitrate;
        $this->crf = $crf;
        $this->width = $width;
        $this->height = $height;
        $this->fps = $fps;
        $this->gop = $gop;
    }

    /**
     * Codec
     *
     * @var string
     */
    protected $codec;

    /**
     * Profile
     *
     * @var string
     */
    protected $profile;

    /**
     * Bitrate
     *
     * @var string
     */
    protected $bitrate;

    /**
     * Crf
     *
     * @var string
     */
    protected $crf;

    /**
     * Width
     *
     * @var string
     */
    protected $width;

    /**
     * Height
     *
     * @var string
     */
    protected $height;

    /**
     * Fps
     *
     * @var string
     */
    protected $fps;

    /**
     * Gop
     *
     * @var string
     */
    protected $gop;

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


}