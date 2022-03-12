<?php


class main extends controller
{
    public function index()
    {
        $this->model("uye")->uyeEkle();

        $this->render("index/index", []);
    }
}