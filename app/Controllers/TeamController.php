<?php

namespace MVC\Controllers;
use MVC\Model\Team;
class TeamController extends Controller
{

    public function index():void{
        $teams = new Team;
        $team = $teams->selectallteam();
        include "../app/View/index.php";
    }
    public function insert():void{
        include "../app/View/insert.php";
    }
    public function edit($id){
        $teams = new Team;
        $team = $teams->selectTeam($id)[0];
        include "../app/View/edit.php";
    }
    public function update(){
        $teamobj = new Team;
        $id = $_POST['id'];
        unset($_POST['id']);
        $team = $teams->updateTeam("teams",$_POST,$id);
        header('Location: /stadiumStream_MVC/Team');
    }


    public function delete()
    {
        $teams = new Team;
        $team = $teams->deleteTeam($id);
        header('Location: /stadiumStream_MVC/Team');

        // TODO: Implement create() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

}