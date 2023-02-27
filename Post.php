<?php
//1
// class Post
// {
//     private $title;
//     private $content;
//     public function __construct(string $title, string $content)
//     {
//         $this->title = $title;
//         $this->content = $content;
//     }
//     public function getTitle()
//     {
//         return $this->title;
//     }
//     public function getContent()
//     {
//         return $this->content;
//     }
// }

// 2
// class Post implements PostInterface
// {
//     private $title;
//     private $content;
//     public function __construct(string $title, string $content)
//     {
//         $this->title = $title;
//         $this->content = $content;
//     }
//     public function getTitle()
//     {
//         return $this->title;
//     }
//     public function getContent()
//     {
//         return $this->content;
//     }
// }

// class PostItalicTitle extends Post
// {
//     public function getTitle()
//     {
//         return sprintf('<i>%s</i>', parent::getTItle());
//     }
// }

//dengan return
class Post implements PostInterface
{
    private $title;
    private $content;
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getContent(): string
    {
        return $this->content;
    }
}


