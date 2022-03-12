<?php


class controller
{
    public function render($file, $param = [])
    {
        return view::render($file, $param);
    }

    public function model($file)
    {
        if (file_exists(MODELS_PATH . "/" . $file . ".php"))
        {
            require_once MODELS_PATH . "/" . $file . ".php";
            if (class_exists($file))
            {
                return new $file;
            }
            else
            {
                exit($file . " bir class değil");
            }
        }
        else
        {
            exit($file . " model dosyası bulunamadı.");
        }
    }
}