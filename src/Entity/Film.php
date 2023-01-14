<?php

namespace App\Entity;


class Film
{
    private int $id;
    private string $titles;
    private int $date;

    // La fonction setType doit mettre à jour la valeur de l'attribut Type 
    public function setTitle(string $titles)
    {
        $this->titles = $titles;
        return $this;
    }

    public function getTitle()
    {
        return $this->titles;
    }

    public function setDate(int $date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }



    public function bornOrNot()
    {
        if ($this->date < 1997) {

            return "Je n'étais pas né à la sortie de ce film.";
        } else {

            return "J'étais né à la sortie de ce film.";
        }
    }
}
