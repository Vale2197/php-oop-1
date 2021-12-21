<?php

class Movie {

    public $gender;
    public $title;
    public $description;

    public function __construct(string $title, string $gender) {
    
        $this->title = $title;

        $this->gender = $gender;
    }

    public function setDescription(string $description) {
        return $this->description = $description;
    }

}


$titanic = new Movie('Titanic', 'dramma');
$titanic->setDescription('descrizione descrizione descrizione descrizione descrizione descrizione e descrizione');

$avatar = new Movie('Avatar', 'fantasy');
$avatar->setDescription('descrizione avatar, descrizione avatar, descrizione avatar descrizione avatar');

var_dump($titanic, $avatar);
?>