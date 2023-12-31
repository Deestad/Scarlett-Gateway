<?php
ini_set('display_errors',0);
require("cookie_token.php");
if (!isset($_COOKIE["login_grant"]) && !password_verify($cookie_value, $_COOKIE["login_grant"])){
    ini_set('display_errors',1);
    header( 'HTTP/1.0 404 Not found', TRUE, 404 );die("<h2>404 Not Found</h2> The document/file requested was not found on this server.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- THIS IS BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- OUR STYLESHEETS-->
    <link rel="stylesheet" href="../CSS/default.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script type="text/javascript" src="../JS/main.js"></script>


    <title>Scarlett Gateway</title>
</head>

<body>
    <header>
        <nav id="navigator">
            <h1 id="gateway-title">The Scarlett Gateway</h1>
            <div id="nav-aligner">
            <a class="nav-items" href="../index.php"> HOME</a>
            |<a class="nav-items" href="linkway.php"> ACESSOS</a>
            | <a class="nav-items"
                href="https://docs.google.com/spreadsheets/d/1xp1tSz4B5aT1WFty3ImLFywiyFaMKQlb0sEmKRVkaIA/edit#gid=0"
                target="_blank">GATEWAY DO DRIVE</a>

            </div>
        </nav>
    </header>
    <div id="main-functionality">
        <div id="left-menu">
            <div id="menu-items-container">
                <button id="menu-button-1" class="menu-buttons" onclick="ChangeLeftMenuButtonColors(this.id);"><img
                        src="../Images/commonroute.svg">Rota
                    Comum</button>
                <button id="menu-button-2" class="menu-buttons" onclick="ChangeLeftMenuButtonColors(this.id);"><img
                        src="../Images/academic.svg">Rota
                    acadêmica</button>
                <button id="menu-button-3" class="menu-buttons" onclick="ChangeLeftMenuButtonColors(this.id);"><img
                        src="../Images/linguistic.svg">Rota
                    linguística</button>
            </div>
        </div>
        <!-- LINK BOX -->
        <main id="common-route">
            <div class="common-gateway-wrapper">
                <p id="datetime-common">
                    Olá, Kaldwin. <br>
                    <b>Hoje é x z z</b>
                </p>
                <div id="buttons-positioner">
                    <div class="btn-group common-gateway">
                        <button type="button" id="uffs" class="btn btn-success dropdown-toggle dropbutton"
                            onclick="ToggleDropdown(this.id)">
                            UFFS
                        </button>
                        <div id="dropdown-uffs" class="dropdown" style="display:none">
                            <br>
                            <a class="dropdown-i" href="https://www.uffs.edu.br/" target="_blank">UFFS</a>
                            <a class="dropdown-i" href="https://sigaa.uffs.edu.br/sigaa/?modo=classico"
                                target="_blank">Sigaa</a>
                            <a class="dropdown-i" href="https://www.instagram.com/uffs.campuschapeco/"
                                target="_blank">Instagram UFFS</a>
                        </div>
                    </div>
                    <div class="btn-group common-gateway">
                        <button type="button" id="redes" class="btn btn-success dropdown-toggle dropbutton"
                            onclick="ToggleDropdown(this.id)">
                            Redes sociais
                        </button>
                        <div id="dropdown-redes" class="dropdown" style="display:none">
                            <br>
                            <a class="dropdown-i" href="https://www.instagram.com/" target="_blank">Instagram</a>
                            <a class="dropdown-i" href="https://www.youtube.com/" target="_blank">Youtube</a>
                            <a class="dropdown-i" href="https://discord.com/login" target="_blank">Discord</a>
                            <a class="dropdown-i" href="https://www.reddit.com/?rdt=36202" target="_blank">Reddit</a>
                            <a class="dropdown-i" href="https://github.com/" target="_blank">GitHub</a>
                            <a class="dropdown-i" href="https://br.linkedin.com/" target="_blank">LinkedIn</a>
                        </div>
                    </div>
                    <div class="btn-group common-gateway">
                        <button type="button" id="financeiro" class="btn btn-success dropdown-toggle dropbutton"
                            onclick="ToggleDropdown(this.id)">
                            Financeiro
                        </button>
                        <div id="dropdown-financeiro" class="dropdown" style="display:none">
                            <br>
                            <a class="dropdown-i"
                                href="https://docs.google.com/spreadsheets/d/1LKPkl0TJE3BQN_10CLXieqDmBJWrsbV1o9RQvJ17cRQ/edit?usp=drive_web&ouid=102193530454541694197"
                                target="_blank">Planilha dos Gastos e Renda</a>
                            <a class="dropdown-i" href="https://keep.google.com/" target="_blank">Google Keep</a>
                        </div>
                    </div>
                    <div class="btn-group common-gateway">
                        <button type="button" id="leituras" class="btn btn-success dropdown-toggle dropbutton"
                            onclick="ToggleDropdown(this.id)">
                            Leitura e Filosofia
                        </button>
                        <div id="dropdown-leituras" class="dropdown" style="display:none">
                            <br>
                            <a class="dropdown-i"
                                href="https://docs.google.com/spreadsheets/d/1N-3LsTQDOJtUUZEgfzTTJdrSe5JDCAxqiThD_ysjbxI/edit#gid=0"
                                target="_blank">Gateway do Shadow</a>
                            <a class="dropdown-i"
                                href="https://docs.google.com/spreadsheets/d/1zx3VMxc9jHVQKFlEsvECwNqTcXCmhaByYSgOug7Ax90/edit?usp=drive_web&ouid=102193530454541694197"
                                target="_blank">Leituras</a>
                            <a class="dropdown-i"
                                href="https://onedrive.live.com/?id=5BA21C0B629B23E3%21138&cid=5BA21C0B629B23E3"
                                target="_blank">Biblioteca de Luftschlössen</a>
                            <a class="dropdown-i"
                                href="https://docs.google.com/spreadsheets/d/1I0OwfPpr7VkuuJ2J0KMm4gFX-XoMDhYU0X9awyMvuHU/edit#gid=0"
                                target="_blank">Dicionário da Academia Real</a>
                            <a class="dropdown-i"
                                href="https://docs.google.com/spreadsheets/d/1J00H1WW3eswXuC_uq5LT2bUz1IpMKJetbXP3jteBRpI/edit#gid=0"
                                target="_blank">Análise Histórico-Temporal</a>
                        </div>
                    </div>
                    <div class="btn-group common-gateway">
                        <button type="button" id="ferramentas" class="btn btn-success dropdown-toggle dropbutton"
                            onclick="ToggleDropdown(this.id)">
                            Ferramentas
                        </button>
                        <div id="dropdown-ferramentas" class="dropdown" style="display:none">
                            <br>
                            <a class="dropdown-i" href="http://gmail.com/" target="_blank">Gmail</a>
                            <a class="dropdown-i" href="https://calendar.google.com/calendar/u/0/r?pli=1"
                                target="_blank">Google Calendário</a>
                            <a class="dropdown-i" href="https://drive.google.com/drive/my-drive" target="_blank">Google
                                Drive</a>
                            <a class="dropdown-i" href="https://www.ilovepdf.com/" target="_blank">iLovePDF</a>
                            <a class="dropdown-i" href="https://www.ilovepdf.com/" target="_blank">YTS5</a>
                        </div>
                    </div>

                    <div class="btn-group common-gateway">
                        <button type="button" id="pirataria" class="btn btn-success dropdown-toggle dropbutton"
                            onclick="ToggleDropdown(this.id)">
                            Pirataria Multilingue
                        </button>
                        <div id="dropdown-pirataria" class="dropdown" style="display:none">
                            <br>
                            <a class="dropdown-i" href="https://www1.123moviesto.pw/" target="_blank">123Movies -
                                Inglês</a>
                            <a class="dropdown-i" href="http://aniplay.co/" target="_blank"> Aniplay - Animes -
                                Italiano</a>
                            <a class="dropdown-i" href="http://waystreaming.com/" target="_blank">Waystreaming - Filmes
                                -
                                Francês</a>
                            <a class="dropdown-i" href="https://www.ilovepdf.com/" target="_blank">Seriesly - Filmes -
                                Espanhol Europeu</a>
                            <a class="dropdown-i" href="http://guardaserie.events/" target="_blank">Guardaserie - Séries
                                -
                                Italiano</a>
                        </div>

                    </div>
                </div>
                <div class="widget-box">
                    <div class="widget">
                        <iframe id="google-calendar"
                            src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%239E69AF&ctz=America%2FSao_Paulo&mode=MONTH&hl=pt_BR&title=Eventos%20esperados&showTz=0&showPrint=0&src=a2FsbGlkZGVsQGdtYWlsLmNvbQ&color=%23039BE5"
                            style="border: 0" width="800" height="300" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
                <div class="widget-box">
                    <div class="widget">
                        <form action="formhandler.php" id="stickyform" method="post"> 
                            <textarea required type="text" id="sticky" name="sticky"><?php 
                                try {
                                    require_once("../phpconnect.php");
                                    $result = $conn->query("SELECT contents FROM sticky WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
                                    echo $result['contents'];
                                } catch (PDOException $e) {
                                    die("Query failed." . $e->getMessage());
                                }?> </textarea>
                        </form>
                    </div>

                    <div class="widget">

                    </div>
                </div>


            </div>


    </div>
    </div>

    </main>
    </div>
</body>

</html>