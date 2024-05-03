<?php 


class Post {

    public $title;
    public $date;
    public $user;
    public $gender;
    public $tags;
    public $media;
    


    public function __construct(string $title, $date, string $user, string $gender, array $tags, $media,  )
    {
        $this->title = $title;
        $this->date = $date;
        $this->user = $user;
        $this->gender = $gender;
        $this->tags = $tags;
        $this->media = $media;
        
    }

    public function formatDate()
    {
        return date('d/m/Y', strtotime($this->date));
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function getTags()
    {
        return $this->tags;
    }
    
    public function getUser()
    {
        return $this->user;
    }

    public function getGender()
    {
        return $this->gender;
    }






}












?>