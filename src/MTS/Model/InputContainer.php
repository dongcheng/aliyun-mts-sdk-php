<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:35
 */

namespace MTS\Model;


class InputContainer
{

    public function __construct($format = '')
    {
        $this->format = $format;
    }

    /**
     * 源媒体音频格式，取值为alaw
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