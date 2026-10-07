<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Relatório | VetCare</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            font-family: Arial, Helvetica, sans-serif;

            background:
                linear-gradient(135deg, #0d332c, #1da77a);

            min-height: 100vh;

            padding: 40px 20px;

            color: #20332f;
        }


        .container {

            max-width: 1000px;

            margin: auto;

            background: #f6faf8;

            border-radius: 30px;

            overflow: hidden;

            box-shadow: 0 30px 80px rgba(0,0,0,.30);

        }


        /* CABEÇALHO */

        .header {

            background: #123d35;

            color: white;

            padding: 35px 45px;

            display: flex;

            justify-content: space-between;

            align-items: center;

        }


        .logo {

            display: flex;

            align-items: center;

            gap: 12px;

            font-size: 25px;

            font-weight: bold;

        }


        .logo-icon {

            width: 50px;

            height: 50px;

            border-radius: 15px;

            background: #1da77a;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 27px;

        }


        .status {

            background: #1da77a;

            padding: 10px 18px;

            border-radius: 30px;

            font-weight: bold;

        }


        /* SUCESSO */

        .success {

            padding: 25px 45px;

            background: #dff7ed;

            color: #126348;

            font-weight: bold;

            border-bottom: 1px solid #c9e9dd;

        }


        /* CONTEÚDO */

        .content {

            padding: 45px;

        }


        .title {

            margin-bottom: 30px;

        }


        .title small {

            color: #1da77a;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 2px;

        }


        .title h1 {

            color: #123d35;

            font-size: 35px;

            margin-top: 8px;

        }


        /* PET CARD */

        .pet {

            background: white;

            border-radius: 25px;

            padding: 30px;

            display: flex;

            align-items: center;

            gap: 25px;

            margin-bottom: 30px;

            box-shadow: 0 10px 30px rgba(0,0,0,.06);

        }


        .pet-icon {

            width: 100px;

            height: 100px;

            border-radius: 25px;

            background: #dff7ed;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 55px;

        }


        .pet h2 {

            color: #123d35;

            margin-bottom: 8px;

        }


        .pet p {

            color: #71807c;

            margin: 5px 0;

        }


        /* GRID */

        .grid {

            display: grid;

            grid-template-columns: repeat(2,1fr);

            gap: 20px;

        }


        .card {

            background: white;

            padding: 25px;

            border-radius: 20px;

            box-shadow: 0 8px 25px rgba(0,0,0,.05);

            border-left: 5px solid #1da77a;

        }


        .card small {

            color: #7a8985;

            display: block;

            margin-bottom: 8px;

            font-weight: bold;

        }


        .card strong {

            color: #123d35;

            font-size: 18px;

        }


        /* VALOR */

        .payment {

            margin-top: 30px;

            background: #123d35;

            color: white;

            border-radius: 25px;

            padding: 30px;

            display: flex;

            justify-content: space-between;

            align-items: center;

        }


        .payment p {

            color: #bfd1cb;

            margin-bottom: 8px;

        }


        .payment h2 {

            font-size: 40px;

            color: #5ee0ae;

        }


        .discount {

            color: #9ceacb;

            margin-top: 5px;

        }


        /* OBSERVAÇÃO */

        .observation {

            background: #fff9e8;

            margin-top: 25px;

            padding: 25px;

            border-radius: 20px;

            border-left: 5px solid #e9b949;

        }


        .observation h3 {

            margin-bottom: 10px;

            color: #715a20;

        }


        .observation p {

            color: #665a39;

            line-height: 1.6;

        }


        /* BOTÕES */

        .actions {

            display: flex;

            gap: 15px;

            margin-top: 35px;

        }


        .button {

            flex: 1;

            text-align: center;

            padding: 16px;

            border-radius: 13px;

            text-decoration: none;

            font-weight: bold;

            border: none;

            cursor: pointer;

            font-size: 15px;

        }


        .back {

            background: #123d35;

            color: white;

        }


        .print {

            background: #1da77a;

            color: white;

        }


        .back:hover {

            background: #0d2f29;

        }


        .print:hover {

            background: #168a65;

        }


        /* RESPONSIVO */

        @media(max-width:700px) {

            .header {

                flex-direction: column;

                gap: 20px;

                text-align: center;

            }


            .content {

                padding: 25px;

            }


            .grid {

                grid-template-columns: 1fr;

            }


            .pet {

                flex-direction: column;

                text-align: center;

            }


            .payment {

                flex-direction: column;

                gap: 20px;

                text-align: center;

            }


            .actions {

                flex-direction: column;

            }

        }


        @media print {

            body {

                background: white;

                padding: 0;

            }


            .container {

                box-shadow: none;

            }


            .actions {

                display: none;

            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- CABEÇALHO -->

    <div class="header">

        <div class="logo">

            <div class="logo-icon">
                🐾
            </div>

            VetCare

        </div>


        <div class="status">

            ✓ Confirmado

        </div>

    </div>


    <div class="success">

        ✅ Atendimento registrado com sucesso no sistema.

    </div>


    <div class="content">


        <div class="title">

            <small>Prontuário</small>

            <h1>
                Resumo do atendimento
            </h1>

        </div>


        <!-- PET -->

        <div class="pet">

            <div class="pet-icon">

                <?php

                if ($dados['especie'] == "Cachorro") {

                    echo "🐶";

                } elseif ($dados['especie'] == "Gato") {

                    echo "🐱";

                } elseif ($dados['especie'] == "Ave") {

                    echo "🦜";

                } elseif ($dados['especie'] == "Cavalo") {

                    echo "🐴";

                } else {

                    echo "🐾";

                }

                ?>

            </div>


            <div>

                <h2>

                    <?php

                    echo htmlspecialchars(
                        $dados['animal']
                    );

                    ?>

                </h2>


                <p>

                    <?php

                    echo htmlspecialchars(
                        $dados['especie']
                    );

                    ?>

                    •
                    <?php

                    echo htmlspecialchars(
                        $dados['idade']
                    );

                    ?>

                    anos

                </p>


                <p>

                    Classificação:
                    <strong>

                        <?php

                        echo htmlspecialchars(
                            $dados['classificacao']
                        );

                        ?>

                    </strong>

                </p>

            </div>

        </div>


        <!-- DADOS -->

        <div class="grid">


            <div class="card">

                <small>TUTOR</small>

                <strong>

                    <?php

                    echo htmlspecialchars(
                        $dados['nome']
                    );

                    ?>

                </strong>

            </div>


            <div class="card">

                <small>TELEFONE</small>

                <strong>

                    <?php

                    echo htmlspecialchars(
                        $dados['telefone']
                    );

                    ?>

                </strong>

            </div>


            <div class="card">

                <small>SEXO</small>

                <strong>

                    <?php

                    echo htmlspecialchars(
                        $dados['sexo']
                    );

                    ?>

                </strong>

            </div>


            <div class="card">

                <small>DATA DO ATENDIMENTO</small>

                <strong>

                    📅

                    <?php

                    echo htmlspecialchars(
                        $dados['data']
                    );

                    ?>

                </strong>

            </div>


            <div class="card">

                <small>SERVIÇO</small>

                <strong>

                    🩺

                    <?php

                    echo htmlspecialchars(
                        $dados['servico']
                    );

                    ?>

                </strong>

            </div>


            <div class="card">

                <small>STATUS</small>

                <strong>

                    🟢

                    <?php

                    echo htmlspecialchars(
                        $dados['status']
                    );

                    ?>

                </strong>

            </div>


        </div>


        <!-- PAGAMENTO -->

        <div class="payment">

            <div>

                <p>Valor do atendimento</p>

                <h2>

                    R$

                    <?php

                    echo number_format(
                        $dados['valorFinal'],
                        2,
                        ',',
                        '.'
                    );

                    ?>

                </h2>


                <?php

                if ($dados['desconto'] > 0) {

                    echo "

                    <div class='discount'>

                        Desconto de 10% aplicado:
                        R$ " .

                        number_format(
                            $dados['desconto'],
                            2,
                            ',',
                            '.'
                        )

                        . "

                    </div>";

                }

                ?>

            </div>


            <div>

                💳 Pagamento na clínica

            </div>

        </div>


        <!-- OBSERVAÇÕES -->

        <?php

        if (!empty($dados['observacoes'])) {

        ?>

            <div class="observation">

                <h3>
                    📝 Observações
                </h3>

                <p>

                    <?php

                    echo nl2br(
                        htmlspecialchars(
                            $dados['observacoes']
                        )
                    );

                    ?>

                </p>

            </div>

        <?php

        }

        ?>


        <!-- BOTÕES -->

        <div class="actions">

            <a
                href="view.php"
                class="button back"
            >
                ← Novo atendimento
            </a>


            <button
                onclick="window.print()"
                class="button print"
            >
                🖨️ Imprimir relatório
            </button>

        </div>


    </div>

</div>


</body>

</html>