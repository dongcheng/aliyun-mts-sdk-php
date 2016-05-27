<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:27
 */

namespace MTS\Model;


class WaterMarkTemplate
{

    public function __construct($id = '', $name = '', $width = 0, $height = 0, $dx = 0, $dy = 0, $referPos = '', $type = '', $state = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->dx = $dx;
        $this->dy = $dy;
        $this->referPos = $referPos;
        $this->type = $type;
        $this->state = $state;
    }

    /**
     * 水印模板ID
     *
     * @var string
     */
    protected $id = '';

    /**
     * 水印模板名称
     *
     * @var string
     */
    protected $name = '';

    /**
     * 宽
     *
     * @var int
     */
    protected $width = 0;

    /**
     * 高
     *
     * @var int
     */
    protected $height = 0;

    /**
     * 水平偏移量
     *
     * @var int
     */
    protected $dx = 0;

    /**
     * 垂直偏移量
     *
     * @var int
     */
    protected $dy = 0;

    /**
     * 水印位置
     *
     * @var string
     */
    protected $referPos = '';

    /**
     * 水印类型
     *
     * @var string
     */
    protected $type = '';

    /**
     * 水印模板的状态
     *
     * @var string
     */
    protected $state = '';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getDx()
    {
        return $this->dx;
    }

    /**
     * @return int
     */
    public function getDy()
    {
        return $this->dy;
    }

    /**
     * @return string
     */
    public function getReferPos()
    {
        return $this->referPos;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

}