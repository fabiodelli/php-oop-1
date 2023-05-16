<?php
class Movie
{
    private $title;
    private $genere;
    private $duration;

    public function __construct($title, $genere, $duration)
    {
        $this->title = $title;
        $this->genere = $genere;
        $this->duration = $duration;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getGenere()
    {
        return $this->genere;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}