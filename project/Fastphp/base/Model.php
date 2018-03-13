<?php

/**
 * @Author: 13453
 * @Date:   2018-03-12 13:56:36
 * @Last Modified by:   13453
 * @Last Modified time: 2018-03-12 13:56:38
 */
namespace fastphp\base;

use fastphp\db\Sql;

class Model extends Sql
{
    protected $model;

    public function __construct()
    {
        // 获取数据库表名
        if (!$this->table) {

            // 获取模型类名称
            $this->model = get_class($this);

            // 删除类名最后的 Model 字符
            $this->model = substr($this->model, 0, -5);

            // 数据库表名与类名一致
            $this->table = strtolower($this->model);
        }
    }
}