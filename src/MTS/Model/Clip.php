<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:14
 */

namespace MTS\Model;


class Clip
{

    public function __construct($timeSpan = null)
    {
        $this->timeSpan = $timeSpan;
    }

    /**
     * 剪辑时间段
     *
     * @var TimeSpan
     */
    protected $timeSpan = null;

    /**
     * @return TimeSpan
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }
}