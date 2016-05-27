<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 上午11:13
 */

namespace MTS\Model;


class QualityControl
{

    public function __construct($rateQuality = '', $methodStreaming = '')
    {
        $this->rateQuality = $rateQuality;
        $this->methodStreaming = $methodStreaming;
    }

    /**
     * 分辨率质量
     *
     * @var string
     */
    protected $rateQuality = '';

    /**
     * 输出方式流
     *
     * @var string
     */
    protected $methodStreaming = '';

    /**
     * @return string
     */
    public function getRateQuality()
    {
        return $this->rateQuality;
    }

    /**
     * @return string
     */
    public function getMethodStreaming()
    {
        return $this->methodStreaming;
    }


}