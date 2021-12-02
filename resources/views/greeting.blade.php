<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de l'info 2021</title>
    <link rel="stylesheet" href="https://unpkg.com/@vtmn/css" />
</head>
<body>
    <script src="main.js"></script>
    <div id="content">
        <div id="menu">
            <div class="vtmn-flex">
                <div class="block vtmn-flex vtmn-flex-row vtmn-flex-wrap" style="display: flex; flex-direction: row; align-items: center; padding: 10px">
                    <button class="vtmn-btn">Inscription</button>
                </div>
                <div class="block vtmn-flex vtmn-flex-row vtmn-flex-wrap" style="display: flex; flex-direction: row; align-items: center; padding: 10px">
                    <button class="vtmn-btn">Connexion</button>
                </div>
            </div>
            <div class="vtmn-toggle">
                <div class="vtmn-toggle_switch">
                    <input type="checkbox" id="theme" onchange="switch_theme()"/>
                    <span aria-hidden="true"></span>
                </div>
                <label for="theme">Thème sombre</label>
            </div>
        </div>
        @include('forumNoel')
    </div>
</body>
</html>