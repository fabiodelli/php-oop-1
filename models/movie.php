<?php
class Movie
{
    private $title;
    private $genre;
    private $duration;

    public function __construct($title, $genre, $duration)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}