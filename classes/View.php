<?php
class View
{
    protected $arrData = [];

    public function assign($name, $value)
    {
        $this->arrData[$name] = $value;
    }

    public function display($template)
    {
        include $template;
    }

    public function render($template)
    {
        ob_start();
        $this->display($template);
        $bufferContents = ob_get_contents();
        ob_end_clean();
        return $bufferContents;
    }
}
