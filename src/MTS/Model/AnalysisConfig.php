<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/26
 * Time: 上午11:09
 */

namespace MTS\Model;


class AnalysisConfig
{
    public function __construct($qualityControl = null)
    {
        $this->qualityControl = $qualityControl;
    }

    /**
     * @return QualityControl
     */
    public function getQualityControl()
    {
        return $this->qualityControl;
    }

    /**
     * 质量控制
     *
     * @var QualityControl
     */
    protected $qualityControl = null;
}