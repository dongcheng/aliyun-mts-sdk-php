<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午3:34
 */

namespace MTS\Model;


class FailReason
{

    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * 失败时错误码
     *
     * @var string
     */
    protected $code = '';

    /**
     * 失败时错误信息
     *
     * @var string
     */
    protected $message = '';

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }



}