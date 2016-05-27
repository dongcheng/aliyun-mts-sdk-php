<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/25
 * Time: 下午1:49
 */

namespace MTS\Model;


class MediaInfoJobList
{

    public function __construct(array $mediaInfoJobList)
    {
        $this->mediaInfoJobList = $mediaInfoJobList;
    }

    /**
     * @return array
     */
    public function getMediaInfoJobList()
    {
        return $this->mediaInfoJobList;
    }

    /**
     * 媒体信息作业列表
     *
     * @var array
     */
    protected $mediaInfoJobList = [];
}