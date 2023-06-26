<?php
include_once('./func/func.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="input-caixa">
            <input type="text" id="pesquisa">
            <i class='bx bx-search'></i>
        </div>
    </header>

    <main>
        <ul class="foto">
            <li class="linha">
                <?php
                $listarCamisa = listar('*', 'produtos');

                if (is_array($listarCamisa)) {
                    foreach ($listarCamisa as $listarCamisaItem) {
                        $nome = $listarCamisaItem->nome;
                        $fotoProduto = $listarCamisaItem->fotoProduto;
                        // Resto do seu código dentro do loop


                ?>

                        <div class="conteudo">
                            <div class="camisa">
                                <img src="<?php echo $fotoProduto ?>" alt="">
                            </div>
                            <p><?php echo $nome ?></p>
                        </div>


                <?php
                    }
                }
                ?>
            </li>
        </ul>
    </main>
    <script src="script.js"></script>
</body>

</html>