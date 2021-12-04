<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAI - Reserva de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    body {
        background-image: linear-gradient(to right, blue, rgb(2, 0, 36));
    }

    .header {
        float: right;
    }

    .letra {
        font-size: small;
    }

    .texth3 {
        font-size: xx-large;
        color: white;
    }

    .imgsize {
        width: 35%;
        height: 35%;
    }

    ;
</style>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap5/js/bootstrap.min.js"></script>
    <br>
    <center>
        <div>
            <h3 class=texth3><b>Reserva Cars</b></h3>
        </div>
    </center>
    <center>
        <br>
        <a href="index.php"><button type="button" class="btn btn-primary">Pagina Inicial</button></a>
        <a href="cadcarro.php"><button type="button" class="btn btn-primary">Cadastrar Carro</button></a>
        <a href="cadfunc.php"><button type="button" class="btn btn-primary">Cadastrar Funcionário</button></a>
        <a href="reserva.php"><button type="button" class="btn btn-success">Reservar Carro</button></a>
    </center>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>&nbsp;&nbsp;Reservas</b></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-over">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Funcionário</th>
                                    <th scope="col">Carro</th>
                                    <th scope="col">Data Inicial</th>
                                    <th scope="col">Data Final</th>
                                    <th scope="col">Carro</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'conecta.php';
                                $pesquisa = mysqli_query($conn, "SELECT * FROM reserva");
                                $row = mysqli_num_rows($pesquisa);
                                if ($row > 0) {
                                    while ($registro = $pesquisa->fetch_array()) {
                                        echo '<tr>';
                                        echo '<td>' . $registro['id'] . '</td>';
                                        echo '<td>' . $registro['id_funcionario'] . '</td>';
                                        echo '<td>' . $registro['id_carro'] . '</td>';
                                        echo '<td>' . $registro['data_inicial'] . '</td>';
                                        echo '<td>' . $registro['data_final'] . '</td>';
                                        echo '<td>' . $registro['descricao'] . '</td>';
                                        echo '<td><a href="editafunc.php?id=' . $registro['id'] . '">Editar | <a href="excluirfunc.php?id=' . $registro['id'] . '">Excluir</a></td>';
                                        echo '</tr>';
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                } else {
                                }

                                ?>
                        </table>
                        <a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</body>

</html>