<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:39
 */

namespace MTS\Model;


class Pipeline
{

    public function __construct($id = '', $name = '', $state = '', $notifyConfig = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->state = $state;
        $this->notifyConfig = $notifyConfig;
    }

    /**
     * 管道ID
     *
     * @var string
     */
    protected $id = '';

    /**
     * 管道名称
     *
     * @var string
     */
    protected $name = '';

    /**
     * 管道状态
     *
     * @var string
     */
    protected $state = '';

    /**
     * MNS通知配置
     *
     * @var string
     */
    protected $notifyConfig = '';

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
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getNotifyConfig()
    {
        return $this->notifyConfig;
    }


}