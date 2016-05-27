<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:24
 */

namespace MTS\Model;


class WaterMark
{

    public function __construct($inputFile = null, $waterMarkTemplateId = '')
    {
        $this->inputFile = $inputFile;
        $this->waterMarkTemplateId = $waterMarkTemplateId;
    }

    /**
     * 水印输入文件
     *
     * @var OssFile
     */
    protected $inputFile = null;

    /**
     * 水印模板ID
     *
     * @var string
     */
    protected $waterMarkTemplateId = '';

    /**
     * @return OssFile
     */
    public function getInputFile()
    {
        return $this->inputFile;
    }

    /**
     * @return string
     */
    public function getWaterMarkTemplateId()
    {
        return $this->waterMarkTemplateId;
    }


}