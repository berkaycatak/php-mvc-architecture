<?php


class uyeler extends controller
{
    public function index()
    {
        $this->render("uyeler/index");
    }

    public function listele($id)
    {
        if ($id)
        {
            echo '<br> parametre = ' . $id;
        }
    }

    public function goruntule()
    {

    }
}