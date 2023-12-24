<?php

namespace MVC\Model;

class Team extends Crud
{
    private string $name;
    private string $coach;
    private string $captain;
    private string  $formation;
    private array $players = [];
    private string $stadium;
    private string $founded;

    public function insertTeam($table,$data){
        return $this->insert('teams',$data);
    }
    public function selectallteam()
    {
        return $this->select('teams');
    }

    public function selectTeam($id)
    {
        return $this->select('teams', $id);
    }

    public function updateTeam($table,array $data,int $id){
        
        return $this->update($table, $id,$data);
    }

    public function deleteTeam($id){
        return $this->delete('teams',$id);
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
