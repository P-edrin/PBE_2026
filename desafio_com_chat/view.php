<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VetCare | Clínica Veterinária</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f7f6;
            color: #20332f;
        }

        /* MENU */

        header {
            height: 75px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 3px 20px rgba(0,0,0,0.08);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 25px;
            font-weight: bold;
            color: #123d35;
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            border-radius: 14px;
            background: #1da77a;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        nav {
            display: flex;
            gap: 28px;
        }

        nav a {
            text-decoration: none;
            color: #40534e;
            font-weight: bold;
            transition: .3s;
        }

        nav a:hover {
            color: #1da77a;
        }

        .btn-menu {
            background: #123d35;
            color: white;
            padding: 12px 20px;
            border-radius: 12px;
        }

        /* HERO */

        .hero {
            min-height: 620px;
            padding: 80px 7%;
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            align-items: center;
            gap: 50px;
            background: linear-gradient(135deg, #e9f8f3, #ffffff);
        }

        .badge {
            display: inline-block;
            background: #d8f4ea;
            color: #137357;
            padding: 10px 18px;
            border-radius: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 58px;
            line-height: 1.05;
            color: #123d35;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #1da77a;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.8;
            color: #60716d;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 16px 25px;
            border-radius: 13px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
        }

        .btn-primary {
            background: #123d35;
            color: white;
        }

        .btn-secondary {
            border: 2px solid #d4e2de;
            color: #123d35;
            background: white;
        }

        .hero-card {
            background: #123d35;
            min-height: 420px;
            border-radius: 40px;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 30px 60px rgba(18,61,53,.25);
        }

        .hero-circle {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: #1da77a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 150px;
        }

        .floating {
            position: absolute;
            background: white;
            padding: 15px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,.15);
            font-weight: bold;
        }

        .float-one {
            top: 30px;
            left: 25px;
        }

        .float-two {
            bottom: 30px;
            right: 25px;
        }

        /* ESTATÍSTICAS */

        .stats {
            padding: 30px 7%;
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 20px;
            background: white;
        }

        .stat {
            padding: 25px;
            border-right: 1px solid #e5ece9;
        }

        .stat:last-child {
            border: none;
        }

        .stat h2 {
            color: #123d35;
            font-size: 35px;
        }

        .stat p {
            color: #70817c;
            margin-top: 5px;
        }

        /* SEÇÕES */

        section {
            padding: 90px 7%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title small {
            color: #1da77a;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title h2 {
            font-size: 40px;
            color: #123d35;
            margin: 12px 0;
        }

        .section-title p {
            color: #71807c;
        }

        /* SERVIÇOS */

        .services {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
        }

        .service {
            background: white;
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 10px 35px rgba(0,0,0,.06);
            transition: .3s;
        }

        .service:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0,0,0,.10);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: #e1f7ef;
            border-radius: 17px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            margin-bottom: 22px;
        }

        .service h3 {
            color: #123d35;
            margin-bottom: 12px;
        }

        .service p {
            color: #71807c;
            line-height: 1.7;
        }

        /* AGENDAMENTO */

        .appointment {
            background: #123d35;
        }

        .appointment .section-title h2 {
            color: white;
        }

        .appointment .section-title p {
            color: #bfd1cb;
        }

        form {
            max-width: 1000px;
            margin: auto;
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 30px 70px rgba(0,0,0,.25);
        }

        .form-title {
            color: #123d35;
            margin-bottom: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 20px;
        }

        .field {
            margin-bottom: 20px;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-weight: bold;
            color: #344944;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #d6e1de;
            border-radius: 12px;
            font-size: 15px;
            outline: none;
            background: #fbfdfc;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #1da77a;
        }

        textarea {
            height: 130px;
            resize: vertical;
        }

        .submit {
            width: 100%;
            border: none;
            padding: 17px;
            border-radius: 13px;
            background: #1da77a;
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
        }

        .submit:hover {
            background: #168a65;
        }

        /* EQUIPE */

        .team {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
        }

        .doctor {
            background: white;
            padding: 30px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,.06);
        }

        .doctor-photo {
            width: 110px;
            height: 110px;
            margin: auto;
            border-radius: 50%;
            background: #dff5ed;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
        }

        .doctor h3 {
            margin: 18px 0 8px;
            color: #123d35;
        }

        .doctor p {
            color: #71807c;
        }

        /* FOOTER */

        footer {
            background: #092c26;
            color: white;
            padding: 50px 7%;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
        }

        footer h2 {
            margin-bottom: 15px;
        }

        footer p {
            color: #a9beb8;
            line-height: 1.7;
        }

        footer h3 {
            margin-bottom: 15px;
        }

        footer a {
            display: block;
            color: #a9beb8;
            text-decoration: none;
            margin: 10px 0;
        }

        footer a:hover {
            color: white;
        }

        .copyright {
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px solid #31544d;
            text-align: center;
            color: #8da59f;
        }

        /* RESPONSIVO */

        @media(max-width:900px) {

            .hero {
                grid-template-columns: 1fr;
            }

            .services,
            .team {
                grid-template-columns: 1fr 1fr;
            }

            .stats {
                grid-template-columns: 1fr 1fr;
            }

            nav {
                display: none;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:600px) {

            .hero h1 {
                font-size: 40px;
            }

            .services,
            .team,
            .stats,
            .form-grid {
                grid-template-columns: 1fr;
            }

            .hero-card {
                min-height: 320px;
            }

            .hero-circle {
                width: 220px;
                height: 220px;
                font-size: 100px;
            }

            form {
                padding: 25px;
            }

            .stat {
                border-right: none;
                border-bottom: 1px solid #e5ece9;
            }
        }
    </style>
</head>

<body>

<header>

    <div class="logo">
        <div class="logo-icon">🐾</div>
        VetCare
    </div>

    <nav>
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#equipe">Equipe</a>
        <a href="#agendamento">Agendamento</a>
    </nav>

    <a href="#agendamento" class="btn btn-primary">
        Agendar
    </a>

</header>


<!-- HERO -->

<section class="hero" id="inicio">

    <div>

        <span class="badge">
            🩺 Cuidado veterinário completo
        </span>

        <h1>
            Saúde e carinho para o seu
            <span>melhor amigo.</span>
        </h1>

        <p>
            A VetCare oferece atendimento veterinário,
            exames, vacinação, cirurgia e acompanhamento
            completo para cães, gatos e outros animais.
        </p>

        <div class="hero-buttons">

            <a href="#agendamento" class="btn btn-primary">
                📅 Agendar consulta
            </a>

            <a href="#servicos" class="btn btn-secondary">
                Conhecer serviços
            </a>

        </div>

    </div>


    <div class="hero-card">

        <div class="floating float-one">
            ⭐ Atendimento 5 estrelas
        </div>

        <div class="hero-circle">
            🐶
        </div>

        <div class="floating float-two">
            🩺 Cuidado especializado
        </div>

    </div>

</section>


<!-- ESTATÍSTICAS -->

<div class="stats">

    <div class="stat">
        <h2>1.200+</h2>
        <p>Pets atendidos</p>
    </div>

    <div class="stat">
        <h2>80+</h2>
        <p>Atendimentos por dia</p>
    </div>

    <div class="stat">
        <h2>15</h2>
        <p>Veterinários</p>
    </div>

    <div class="stat">
        <h2>10+</h2>
        <p>Anos de experiência</p>
    </div>

</div>


<!-- SERVIÇOS -->

<section id="servicos">

    <div class="section-title">

        <small>O que fazemos</small>

        <h2>Nossos serviços</h2>

        <p>
            Estrutura preparada para cuidar da saúde do seu animal.
        </p>

    </div>


    <div class="services">

        <div class="service">

            <div class="service-icon">🩺</div>

            <h3>Consultas</h3>

            <p>
                Atendimento clínico completo para acompanhar
                a saúde e o desenvolvimento do seu pet.
            </p>

        </div>


        <div class="service">

            <div class="service-icon">💉</div>

            <h3>Vacinação</h3>

            <p>
                Controle de vacinas e prevenção de doenças
                para manter seu animal protegido.
            </p>

        </div>


        <div class="service">

            <div class="service-icon">🔬</div>

            <h3>Exames</h3>

            <p>
                Exames laboratoriais para auxiliar no diagnóstico
                e tratamento.
            </p>

        </div>


        <div class="service">

            <div class="service-icon">🏥</div>

            <h3>Cirurgias</h3>

            <p>
                Procedimentos cirúrgicos realizados com
                acompanhamento veterinário.
            </p>

        </div>


        <div class="service">

            <div class="service-icon">🦷</div>

            <h3>Odontologia</h3>

            <p>
                Cuidados com dentes, gengiva e saúde bucal
                dos animais.
            </p>

        </div>


        <div class="service">

            <div class="service-icon">🚑</div>

            <h3>Emergência</h3>

            <p>
                Atendimento para situações que precisam
                de atenção veterinária.
            </p>

        </div>

    </div>

</section>


<!-- AGENDAMENTO -->

<section class="appointment" id="agendamento">

    <div class="section-title">

        <small>Agendamento</small>

        <h2>Marque uma consulta</h2>

        <p>
            Preencha os dados para registrar o atendimento.
        </p>

    </div>


    <form action="logica.php" method="POST">

        <h2 class="form-title">
            📋 Dados do atendimento
        </h2>


        <div class="form-grid">

            <div class="field">

                <label>Nome do tutor</label>

                <input
                    type="text"
                    name="nome"
                    placeholder="Digite o nome"
                    required
                >

            </div>


            <div class="field">

                <label>Telefone</label>

                <input
                    type="tel"
                    name="telefone"
                    placeholder="(19) 99999-9999"
                    required
                >

            </div>


            <div class="field">

                <label>Nome do animal</label>

                <input
                    type="text"
                    name="animal"
                    placeholder="Ex: Thor"
                    required
                >

            </div>


            <div class="field">

                <label>Espécie</label>

                <select name="especie" required>

                    <option value="">
                        Selecione
                    </option>

                    <option value="Cachorro">
                        🐶 Cachorro
                    </option>

                    <option value="Gato">
                        🐱 Gato
                    </option>

                    <option value="Ave">
                        🦜 Ave
                    </option>

                    <option value="Cavalo">
                        🐴 Cavalo
                    </option>

                    <option value="Outro">
                        🐾 Outro
                    </option>

                </select>

            </div>


            <div class="field">

                <label>Idade do animal</label>

                <input
                    type="number"
                    name="idade"
                    min="0"
                    max="100"
                    placeholder="Idade"
                    required
                >

            </div>


            <div class="field">

                <label>Sexo</label>

                <select name="sexo" required>

                    <option value="">
                        Selecione
                    </option>

                    <option value="Macho">
                        Macho
                    </option>

                    <option value="Fêmea">
                        Fêmea
                    </option>

                </select>

            </div>


            <div class="field">

                <label>Serviço</label>

                <select name="servico" required>

                    <option value="">
                        Selecione o serviço
                    </option>

                    <option value="Consulta">
                        Consulta - R$ 120
                    </option>

                    <option value="Vacinação">
                        Vacinação - R$ 90
                    </option>

                    <option value="Exame">
                        Exame - R$ 150
                    </option>

                    <option value="Cirurgia">
                        Cirurgia - R$ 850
                    </option>

                    <option value="Odontologia">
                        Odontologia - R$ 200
                    </option>

                    <option value="Emergência">
                        Emergência - R$ 250
                    </option>

                </select>

            </div>


            <div class="field">

                <label>Data</label>

                <input
                    type="date"
                    name="data"
                    required
                >

            </div>


            <div class="field full">

                <label>Observações / sintomas</label>

                <textarea
                    name="observacoes"
                    placeholder="Digite informações importantes sobre o animal..."
                ></textarea>

            </div>

        </div>


        <button type="submit" class="submit">
            🐾 Confirmar atendimento
        </button>

    </form>

</section>


<!-- EQUIPE -->

<section id="equipe">

    <div class="section-title">

        <small>Profissionais</small>

        <h2>Nossa equipe</h2>

        <p>
            Especialistas preparados para cuidar do seu pet.
        </p>

    </div>


    <div class="team">

        <div class="doctor">

            <div class="doctor-photo">
                👩‍⚕️
            </div>

            <h3>Dra. Ana Oliveira</h3>

            <p>Clínica Geral</p>

        </div>


        <div class="doctor">

            <div class="doctor-photo">
                👨‍⚕️
            </div>

            <h3>Dr. Carlos Mendes</h3>

            <p>Cirurgia Veterinária</p>

        </div>


        <div class="doctor">

            <div class="doctor-photo">
                👩‍⚕️
            </div>

            <h3>Dra. Mariana Silva</h3>

            <p>Dermatologia Animal</p>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <div class="footer-grid">

        <div>

            <h2>🐾 VetCare</h2>

            <p>
                Clínica veterinária dedicada ao cuidado,
                saúde e bem-estar dos animais.
            </p>

        </div>


        <div>

            <h3>Menu</h3>

            <a href="#inicio">Início</a>
            <a href="#servicos">Serviços</a>
            <a href="#equipe">Equipe</a>
            <a href="#agendamento">Agendamento</a>

        </div>


        <div>

            <h3>Contato</h3>

            <p>📞 (19) 99999-9999</p>
            <p>📧 contato@vetcare.com</p>
            <p>📍 Campinas - SP</p>

        </div>

    </div>


    <div class="copyright">

        © 2026 VetCare - Clínica Veterinária

    </div>

</footer>

</body>

</html>