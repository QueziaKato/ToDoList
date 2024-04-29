<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link  href="https://fonts-googleapis.com/css2?family-Ubuntu:wght0400;500;7068display=swap" rel="stylesheet">
    <title>Projeto Gerenciador de Tarefas </title>
</head>
<body>
       <div class= "container">
       <div class= "header">
      <h1>Gerenciador de Tarefas</h1>
       </div>
       <div class="form">
       <form action="" method="get">
       <label for="task_name"></label>
       <input type="text" name= "task_name" placeholder="Nome da Tarefa">
       <button type="submit">Inserir</button>
       </form>
        </div>
        <div class="separator">
        </div>
         <div class="list-tasks">
         <ul>
         <li>Tarefa 1</li>
         <li>Tarefa 2</li>
         <li>Tarefa 3</li>
         </ul>
         <ul>
         <?php
           if (isset($_SESSION['tasks'])) {
            foreach($_SESSION['tasks'] as $key => $task) {
            echo "<li>$task</li>";
            }
        }
        ?>
           </ul>
           </div>
           <form action= "" method="get">
           <input type= "hidden" name= "clear" value="clear">
           <button type= "submit" class="bnt-clear">Excluir Tarefas</button>
           </form><br>
                   <div class="footer">
        <p> Desenvolvido por Monolito PHP </p>
        </div>
        </div>
</body>
</html>
