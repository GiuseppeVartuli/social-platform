<?php 


class Post {

    public $title;
    public $date;
    public $user;
    public $tags;
    public $media;


    public function __construct(string $title, $date, $user, array $tags, $media )
    {
        $this->title = $title;
        $this->date = $date;
        $this->user = $user;
        $this->tags = $tags;
        $this->media = $media;
    }

    public function formatDate() {
        return date('d/m/Y', strtotime($this->date));
}

}










?>