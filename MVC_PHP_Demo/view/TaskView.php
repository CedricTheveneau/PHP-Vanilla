<?php

class TaskView {

    public function displayTasks($tasks){

        echo "<h1>Liste des tâches</h1>";
        foreach ($tasks as $id => $task) {
            echo $task['name'];
            if (!$task['completed']) {
                echo " <form method='post' action='complete-task'>
                        <input type='hidden' name='task_id' value='$id'>
                        <input type='submit' name='complete_task' value='Terminer'>
                      </form>";
            }
            $this->displayRemoveTaskForm($id);
            echo "<br>";
        }

    }

    public function displayAddTaskForm(){
        echo "<form method='post' action='add-task-action'>
                <input type='text' name='task_name' placeholder='Nom de la tâche'>
                <input type='submit' name='add_task' value='Ajouter'>
            </form>";
    }

    public function displayRemoveTaskForm($id){
        echo "<form method='post' action='remove-task'>
                <input type='hidden' name='task_id' value='$id'>
                <input type='submit' name='remove_task' value='Supprimer'>
            </form>";
    }

}