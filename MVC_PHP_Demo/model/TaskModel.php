<?php


class TaskModel {

    public function __construct(){
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }        
    }

    public function getTasks() {
        return $_SESSION['tasks'];
    }

    public function addTask($name){
        $_SESSION['tasks'][] = ['name' => $name, 'completed' => false];
    }
    
    public function completedTask($id){
        $_SESSION['tasks'][$id]['completed'] = true;
    }
    
    public function removeTask($id) {
        foreach($_SESSION['tasks'] as $id => $task) {
            if($id == $_POST['task_id']){
                unset($_SESSION['tasks'][$id]);
            }
        }        
    }

}