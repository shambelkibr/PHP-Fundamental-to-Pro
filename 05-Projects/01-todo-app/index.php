<?php
/**
 * Simple Todo List Application
 * Demonstrates: Sessions, Forms, Arrays, Functions
 */

session_start();

// Initialize tasks array in session
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                addTask($_POST['task'] ?? '');
                break;
            case 'toggle':
                toggleTask($_POST['id'] ?? -1);
                break;
            case 'delete':
                deleteTask($_POST['id'] ?? -1);
                break;
        }
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

function addTask($task) {
    $task = trim($task);
    if (!empty($task) && strlen($task) <= 200) {
        $_SESSION['tasks'][] = [
            'id' => time() . rand(1000, 9999),
            'text' => htmlspecialchars($task, ENT_QUOTES, 'UTF-8'),
            'completed' => false,
            'created' => date('Y-m-d H:i:s')
        ];
    }
}

function toggleTask($id) {
    foreach ($_SESSION['tasks'] as &$task) {
        if ($task['id'] == $id) {
            $task['completed'] = !$task['completed'];
            break;
        }
    }
}

function deleteTask($id) {
    $_SESSION['tasks'] = array_filter($_SESSION['tasks'], function($task) use ($id) {
        return $task['id'] != $id;
    });
    $_SESSION['tasks'] = array_values($_SESSION['tasks']);
}

$tasks = $_SESSION['tasks'];
$totalTasks = count($tasks);
$completedTasks = count(array_filter($tasks, fn($t) => $t['completed']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - PHP</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 { color: #333; margin-bottom: 10px; }
        .stats { color: #666; font-size: 14px; margin-bottom: 20px; }
        .add-form { display: flex; gap: 10px; margin-bottom: 20px; }
        input[type="text"] {
            flex: 1;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="text"]:focus { outline: none; border-color: #667eea; }
        button {
            padding: 12px 24px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
        }
        button:hover { background: #5568d3; }
        .delete-btn { background: #e74c3c; padding: 6px 12px; font-size: 12px; }
        .delete-btn:hover { background: #c0392b; }
        .tasks { list-style: none; }
        .task {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
            gap: 10px;
        }
        .task:last-child { border-bottom: none; }
        .task.completed .task-text { text-decoration: line-through; color: #999; }
        .task-checkbox { width: 20px; height: 20px; cursor: pointer; }
        .task-text { flex: 1; color: #333; }
        .empty-state { text-align: center; padding: 40px; color: #999; font-size: 48px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 My Todo List</h1>
        <div class="stats">
            <?php echo $totalTasks; ?> tasks total • 
            <?php echo $completedTasks; ?> completed • 
            <?php echo $totalTasks - $completedTasks; ?> remaining
        </div>

        <form method="POST" class="add-form">
            <input type="hidden" name="action" value="add">
            <input type="text" name="task" placeholder="What needs to be done?" maxlength="200" required>
            <button type="submit">Add Task</button>
        </form>

        <?php if (empty($tasks)): ?>
            <div class="empty-state">📋<br><small style="font-size:16px">No tasks yet!</small></div>
        <?php else: ?>
            <ul class="tasks">
                <?php foreach ($tasks as $task): ?>
                    <li class="task <?php echo $task['completed'] ? 'completed' : ''; ?>">
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="action" value="toggle">
                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                            <input type="checkbox" 
                                   class="task-checkbox" 
                                   <?php echo $task['completed'] ? 'checked' : ''; ?>
                                   onchange="this.form.submit()">
                        </form>
                        <span class="task-text"><?php echo $task['text']; ?></span>
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
