<?php

class Listing
{
    //分页参数
    private $pagesize;
    //当前页
    private $page;
    //总页数
    private $pages;
    private function __construct($pagesize,$page)
    {
        $this->pagesize=$pagesize;
        $this->page=$page;
    }

    public function fenye()
    {

        //当前页
        $start = $page - 5;
        $end = $page + 5;
        if ($page <= 6) {
            $start = 1;
            $end = 10;
        }
        if ($page >= $this->pages - 4) {
            $start = $this->pages - 9;
            $end = $this->pages;
        }
        if ($this->pages < 10) {
            $start = 1;
            $end = $this->pages;
        }
        //循环输出所有页码
        for ($i = $start; $i <= $end; $i++) {
            //当前页不加链接
            if ($page == $i) {
                echo "<span>$i</span>";
            } else {
                echo "<a href='list?page=$i'>$i</a>";
            }

        }
    }
}