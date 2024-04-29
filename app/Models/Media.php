<?php 


class Media {
    
    
    public $type;
    public $path;


    public function __construct(string $type, string $path)
    {
        $this->type = $type;
        $this->path = $path;
    }
}











?>