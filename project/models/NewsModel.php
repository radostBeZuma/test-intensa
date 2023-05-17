<?php
namespace Project\Models;
use Core\Base\Model;


class NewsModel extends Model
{
    public function index() {
        return $this->findMany('SELECT * FROM `news` order by `date_created` desc');
    }

    public function detail($id) {
        $query ='SELECT * FROM `news` WHERE `id` = ' . $id;
        return $this->findOne($query);
    }
}