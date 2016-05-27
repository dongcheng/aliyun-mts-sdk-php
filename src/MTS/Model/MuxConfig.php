<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:18
 */

namespace MTS\Model;


class MuxConfig
{

    public function __construct($segment = null)
    {
        $this->segment = $segment;
    }

    /**
     * 切片配置
     *
     * @var Segment
     */
    protected $segment = null;

    /**
     * @return Segment
     */
    public function getSegment()
    {
        return $this->segment;
    }


}