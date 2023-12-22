<?php

namespace MVC\Model;

use MVC\Model\Crud as CrudAlias;

class Team extends CrudAlias
{
    private string $name;
    private string $coach;
    private string $captain;
    private string  $formation;
    private array $players = []; // Array to hold player objects
    private string $stadium;
    private string $founded;

    public function __construct(string $name,string $captain , string $coach ,string $formation, string $stadium, array $players, string $founded)
    {
        $this -> name =$name;
        $this -> captain = $captain;
        $this -> coach = $coach;
        $this -> formation = $formation;
        $this -> stadium = $stadium;
        $this -> players = $players;
        $this -> founded = $founded;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCoach(): string
    {
        return $this->coach;
    }

    public function setCoach(string $coach): void
    {
        $this->coach = $coach;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function setCaptain(string $captain): void
    {
        $this->captain = $captain;
    }

    public function getFormation(): string
    {
        return $this->formation;
    }

    public function setFormation(string $formation): void
    {
        $this->formation = $formation;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function setPlayers(array $players): void
    {
        $this->players = $players;
    }

    public function getStadium(): string
    {
        return $this->stadium;
    }

    public function setStadium(string $stadium): void
    {
        $this->stadium = $stadium;
    }

    public function getFounded(): string
    {
        return $this->founded;
    }

    public function setFounded(string $founded): void
    {
        $this->founded = $founded;
    }



}