<?php

namespace Framework;

class View
{
    private $file;
    private $title;

    public function render($template, $data = [])
    {
        $this->file = '../templates/'.$template.'.php';
        $content  = $this->renderFile($this->file, $data);
        $view = $this->renderFile(
            '../templates/base.php', [
            'title' => $this->title,
            'content' => $content
            ]
        );
        echo $view;
    }

    private function renderFile($file, $data)
    {
        if(file_exists($file)) {
            extract($data);
            ob_start();
            include $file;
            return ob_get_clean();
        }
    }
}
