<?php
namespace Moritz\Movies;
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 07.11.2017
 * Time: 09:03
 */

/**
 * Class Movie
 * @package Moritz\Movies
 *
 */
class Movie{
    var $Name;
    var $Rating;
    var $VideoURL;

    /**
     * Movie constructor.
     * @param string $Name Name des Films
     * @param int $Rating Rating des Films
     * @param string $VideoURL Link zum Film
     */
    public function __construct(string $Name, int $Rating, string $VideoURL){
        $this->Name = $Name;
        $this->Rating = $Rating;
        $this->VideoURL = $VideoURL;
    }

    /**
     * @return string Gibt den Namen des Films aus
     */
    public function getName(): string{
        return $this->Name;
    }

    /**
     * @return int Gibt das Rating aus
     */
    public function getRating(): int{
        return $this->Rating;
    }

    /**
     * @return string Gibt den VideoURL aus
     */
    public function getVideoURL(): string{
        return $this->VideoURL;
    }

    public function __toString(){
        return "Name: ".$this->Name.", Rating: ".$this->Rating.", VideoURL: ".$this->VideoURL;
    }
}