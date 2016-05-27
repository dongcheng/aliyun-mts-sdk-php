<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午5:20
 */

namespace MTS\Model;


class OssFile
{

    public function __construct($bucket = '', $location = '', $object = '')
    {
        $this->bucket = $bucket;
        $this->location = $location;
        $this->object = $object;
    }

    /**
     * OSS的Bucket
     *
     * @var string
     */
    protected $bucket = '';

    /**
     * OSS的服务区域
     *
     * @var string
     */
    protected $location = '';

    /**
     * OSS的Object
     *
     * @var string
     */
    protected $object = '';
}