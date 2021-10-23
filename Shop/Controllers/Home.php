<?php

class Home extends Controllers {

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $data["page_id"] = 1;
        $data["page_tag"] = "Home";
        $data["page_title"] = "Main";
        $data["page_name"] = "home";
        $data["page_content"] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $this->views->getView($this,"home", $data);
    }

    public function insertar(){
        $data = $this->model->setUser("Tomeu",45);
        print_r($data);
    }

    public function verUsuario($id){
        $data = $this->model->getUser($id);
        print_r($data);
    }

    public function actualizar(){
        $data = $this->model->updateUser(1,"Perrillo",19);
        print_r($data);
    }

    public function verUsuarios(){
        $data = $this->model->getUsers();
        print_r($data);
    }

    public function eliminarUsuario($id){
        $data = $this->model->delUser($id);
        print_r($data);
    }

}