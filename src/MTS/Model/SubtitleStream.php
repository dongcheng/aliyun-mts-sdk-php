<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 16/5/24
 * Time: 下午4:18
 */

namespace MTS\Model;


class SubtitleStream
{

    public function __construct($index = '', $lang = '')
    {
        $this->index = $index;
        $this->lang = $lang;
    }

    /**
     * 字幕流序号，标识字幕流在整个媒体流中的位置
     *
     * @var string
     */
    protected $index = '';

    /**
     * 语言
     *
     * @var string
     */
    protected $lang = '';
}