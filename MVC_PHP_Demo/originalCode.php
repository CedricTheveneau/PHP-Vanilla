<?php
session_start();

// Initialisation de la liste de tâches
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Ajout d'une tâche
if (isset($_POST['add_task'])) {
    $_SESSION['tasks'][] = ['name' => $_POST['task_name'], 'completed' => false];
}

// Marquer une tâche comme terminée
if (isset($_POST['complete_task'])) {
    $_SESSION['tasks'][$_POST['task_id']]['completed'] = true;
}

// Supprimer une tache
if (isset($_POST['remove_task'])) {
    foreach ($_SESSION['tasks'] as $id => $task) {
        if ($id == $_POST['task_id']) {
            unset($_SESSION['tasks'][$id]);
        }
    }
}

// Affichage des tâches
?>
<h1>Liste des tâches</h1>
<?php foreach ($_SESSION['tasks'] as $id => $task) : ?>
    <?= $task['name'] ?>
    <?php if (!$task['completed']) : ?>
        <form method='post'>
            <input type='hidden' name='task_id' value='$id'>
            <input type='submit' name='complete_task' value='Terminer'>
        </form>
    <?php endif; ?>
    <form method='post'>
        <input type='hidden' name='task_id' value='$id'>
        <input type='submit' name='remove_task' value='Supprimer'>
    </form>
    <br>
<?php endforeach; ?>


<form method='post'>
    <input type='text' name='task_name' placeholder='Nom de la tâche'>
    <input type='submit' name='add_task' value='Ajouter'>
</form>