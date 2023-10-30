<?php

require_once $dir.'model/TaskModel.php';
require_once $dir.'view/TaskView.php';

class TaskController {

    private $model;
    private $view;

    public function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    // /add-task-action
    public function addTaskAction(){ // Ajout d'une tâche
       $this->model->addTask($_POST['task_name']);
       header("Location: tasklist");
       die;
    }

    public function completedTaskAction(){ // Marquer une tâche comme terminée
        $this->model->completedTask($_POST['task_id']);
        header("Location: tasklist");
    }

    public function removeTaskAction() { // Supprimer une tache
        $this->model->removeTask($_POST['task_id']);
        header("Location: tasklist");
    }

    // /tasklist
    public function listTasksAction(){ // Permet de lister nos taches

        $tasks = $this->model->getTasks();
        $this->view->displayTasks($tasks);
        
    }

    // /add-task
    public function formAddTaskAction(){
        $this->view->displayAddTaskForm();
    }

}