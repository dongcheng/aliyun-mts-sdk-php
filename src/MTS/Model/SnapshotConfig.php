<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 下午5:25
 */

namespace MTS\Model;


class SnapshotConfig
{

    public function __construct($interval = '', $time = '', $num = '', $outputFile = null)
    {
        $this->interval = $interval;
        $this->time = $time;
        $this->num = $num;
        $this->outputFile = $outputFile;
    }

    /**
     * Interval
     *
     * @var string
     */
    protected $interval = '';

    /**
     * Time
     *
     * @var string
     */
    protected $time = '';

    /**
     * Num
     *
     * @var string
     */
    protected $num = '';

    /**
     * OutputFile
     *
     * @var OssFile
     */
    protected $outputFile = null;

    /**
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @return OssFile
     */
    public function getOutputFile()
    {
        return $this->outputFile;
    }

}