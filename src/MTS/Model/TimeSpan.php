<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:16
 */

namespace MTS\Model;


class TimeSpan
{

    public function __construct($seek = '', $duration = '')
    {
        $this->seek = $seek;
        $this->duration = $duration;
    }

    /**
     * 开始时间
     *
     * @var string
     */
    protected $seek = '';

    /**
     * 延续时间
     *
     * @var string
     */
    protected $duration = '';

    /**
     * @return string
     */
    public function getSeek()
    {
        return $this->seek;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }


}