<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午7:58
 */

namespace MTS\Model;


class SnapshotJob
{

    public function __construct($id = '', $input = null, $snapshotConfig = null, $count = '', $state = '', $code = '', $message = '' ,$userData = '')
    {
        $this->id = $id;
        $this->input = $input;
        $this->snapshotConfig = $snapshotConfig;
        $this->count = $count;
        $this->state = $state;
        $this->code = $code;
        $this->message = $message;
        $this->userData = $userData;
    }

    /**
     * 截图作业ID
     *
     * @var string
     */
    protected $id = '';

    /**
     * 作业输入
     *
     * @var OssFile
     */
    protected $input = null;

    /**
     * 截图配置
     *
     * @var SnapshotConfig
     */
    protected $snapshotConfig = null;

    /**
     * 截取图片数量
     *
     * @var string
     */
    protected $count = '';

    /**
     * 截图状态
     *
     * @var string
     */
    protected $state = '';

    /**
     * 分析失败时错误码
     *
     * @var string
     */
    protected $code = '';

    /**
     * 分析失败时错误信息
     *
     * @var string
     */
    protected $message = '';

    /**
     * 用户自定义数据
     *
     * @var string
     */
    protected $userData = '';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return OssFile
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @return SnapshotConfig
     */
    public function getSnapshotConfig()
    {
        return $this->snapshotConfig;
    }

    /**
     * @return string
     */
    public function getCount()
    {
        return $this->count;
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

    /**
     * @return string
     */
    public function getUserData()
    {
        return $this->userData;
    }


}