<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:39
 */

namespace MTS\Model;


class Container
{

    public function __construct($format = '')
    {
        $this->format = $format;
    }

    /**
     * 容器格式
     *
     * @var string
     */
    protected $format = '';

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }


}