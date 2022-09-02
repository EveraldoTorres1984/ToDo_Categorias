<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar tarefa
                </a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do dia</h2>
                        <div class="graph_header-line"></div>
                        Data
                    </div>
                    <div class="graph_header-subtitle">
                        Tarefas: <strong>3/6</strong>
                    </div>
                    <div class="graph_placeholder">

                    </div>
                    <div class="tasks_left_footer">
                       <img src="/assets/images/icon-info.png">
                       Restam 3 tarefas a serem realizadas
                    </div>
                   
                </section>
                <section class="list">
                    <div class="list_header">
                        <select class="list_header-select">
                            <option value="1">Todas as tarefas</option>
                        </select>
                    </div>
                    <div class="task_list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" />
                                <div class="task_title">Título da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"> </div>
                                <div>Titulo da tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/images/icon-edit.png"></a>
                                <a href="#">
                                    <img src="/assets/images/icon-delete.png"></a>
                            </div>
                        </div>
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" />
                                <div class="task_title">Título da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"> </div>
                                <div>Titulo da tarefa</div>
                            </div>
                            <div class="actions">
                                Editar - Excluir
                            </div>

                        </div>
                </section>

            </main>
        </div>
    </div>
</body>

</html>
