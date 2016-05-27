<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:20
 */

namespace MTS\Model;


class Segment
{

    public function __construct($duration = '')
    {
        $this->duration = $duration;
    }

    /**
     * 分片时长
     *
     * @var string
     */
    protected $duration = '';

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
}