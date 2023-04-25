<?php

namespace neuralpin\temporalrender;

class htmlRender{
    private string $html;

    public function __construct( string $filepath, array $arguments = [] ){
        if( file_exists($filepath) ){
            ob_start();
            extract($arguments);
            require $filepath;
            $this->html = ob_get_contents();
            ob_end_clean();
        }else{
            throw new \Exception("File not found: " . $filepath);
        }
    }

    public function __toString(){
        return $this->html;
    }
}