<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:36
 */

namespace MTS\Model;


class InputAudio
{

    public function __construct($channels = '', $samplerate = '')
    {
        $this->channels = $channels;
        $this->samplerate = $samplerate;
    }

    /**
     * 源媒体音频声道数
     *
     * @var string
     */
    protected $channels = '';

    /**
     * 源媒体音频采样率
     *
     * @var string
     */
    protected $samplerate = '';

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
    public function getSamplerate()
    {
        return $this->samplerate;
    }


}