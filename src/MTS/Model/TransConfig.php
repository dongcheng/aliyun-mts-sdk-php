<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:02
 */

namespace MTS\Model;


class TransConfig
{

    public function __construct($transMode = '')
    {
        $this->transMode = $transMode;
    }

    /**
     * 转码模式
     *
     * @var string
     */
    protected $transMode = '';

    /**
     * @return string
     */
    public function getTransMode()
    {
        return $this->transMode;
    }


}