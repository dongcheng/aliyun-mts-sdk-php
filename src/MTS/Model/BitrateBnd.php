<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:03
 */

namespace MTS\Model;


class BitrateBnd
{

    public function __construct($max = '', $min = '')
    {
        $this->max = $max;
        $this->min = $min;
    }

    /**
     * 总码率上限
     *
     * @var string
     */
    protected $max = '';

    /**
     * 总码率下限
     *
     * @var string
     */
    protected $min = '';

    /**
     * @return string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return string
     */
    public function getMin()
    {
        return $this->min;
    }


}