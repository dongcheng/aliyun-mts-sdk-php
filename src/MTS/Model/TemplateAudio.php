<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 上午11:32
 */

namespace MTS\Model;


class TemplateAudio
{

    public function  __construct($codec = '', $samplerate = '', $bitrate = '', $channels = '')
    {
        $this->codec = $codec;
        $this->samplerate = $samplerate;
        $this->bitrate = $bitrate;
        $this->channels = $channels;
    }

    /**
     * Codec
     *
     * @var string
     */
    protected $codec = '';

    /**
     * Samplerate
     *
     * @var string
     */
    protected $samplerate = '';

    /**
     * Bitrate
     *
     * @var string
     */
    protected $bitrate = '';

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

    /**
     * Channels
     *
     * @var string
     */
    protected $channels = '';
}