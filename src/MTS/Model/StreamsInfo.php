<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:20
 */

namespace MTS\Model;


class StreamsInfo
{

    public function __construct($videoStreamList = [], $audioStreamList = [], $subtitleStreamList = [])
    {
        $this->videoStreamList = $videoStreamList;
        $this->audioStreamList = $audioStreamList;
        $this->subtitleStreamList = $subtitleStreamList;
    }

    /**
     * 视频流列表
     *
     * @var array
     */
    protected $videoStreamList = [];

    /**
     * 音频流列表
     *
     * @var array
     */
    protected $audioStreamList = [];

    /**
     * 字幕流列表
     *
     * @var array
     */
    protected $subtitleStreamList = [];

    /**
     * @return array
     */
    public function getVideoStreamList()
    {
        return $this->videoStreamList;
    }

    /**
     * @return array
     */
    public function getAudioStreamList()
    {
        return $this->audioStreamList;
    }

    /**
     * @return array
     */
    public function getSubtitleStreamList()
    {
        return $this->subtitleStreamList;
    }


}