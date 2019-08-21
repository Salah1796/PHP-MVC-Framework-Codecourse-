<?php
class Home extends Controller
{
    public function index()
    {
        $users=User::all();
        //var_dump($users);
       // echo $users[0]['name'];
        $this->view('home/index', ['users' => $users]);

        //$this->view('home/index', ['name' => $user->name]);

        // $user=$this->model("User");
        // $user->name=$name;
        //echo "name:".$user->name;
        //$this->view('home/index', ['name' => $user->name]);


    }


}