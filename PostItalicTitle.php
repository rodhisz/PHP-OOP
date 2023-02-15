<?php
class PostItalicTitle implements PostInterface
{
    private $title;
    private $content;
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function getTitle()
    {
        return sprintf('<i>%s</i>', $this->title);
    }
    public function getContent()
    {
        return $this->content;
    }
}
