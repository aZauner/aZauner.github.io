<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Organize | Projekte</title>
    <link rel="icon" href="../img/icon.png"> 
    <link rel="stylesheet" href="../css/projectsStyle.css">
    <script src="../script/projects.js" defer></script>
</head>
<body>
    <div id="indexWrapper">
        <nav>
            <div id="homeLink">
                <a href="index.html">AllOrganize</a>
            </div>
            <div>
                <div>
                    <a href="calender.php">Kalender</a>
                </div>
                <div>
                    <a href="projects.php" id="active">Projekte</a>
                </div>
                
                <div>
                    <a href="index.html">Account</a>
                </div>
            </div>
        </nav>
        <main>
            <div id="projectsHeader">
                <h1>Projekte</h1>
            </div>
            <div id="projectsMain">
                
            </div>
            <div id="projectsFooter">
                <button class="projectsBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></svg>
                </button>
            </div>

        </main>
        <div id="valuesTable">
            <h1>Projekt erstellen</h1>
                <div id="projInput">
                    <div id="projLabels">
                        <h2>Projektname</h2>
                        <h2>Datum</h2>
                        <h2>Kunden</h2>
                    </div>
                    <div id="projInputs">
                    </div>
                </div>
                <div id="errorDiv">

                </div>
                <div id="projBtns">
                    <button id="projAdd">Erstellen</button>
                    <button id="projCancel">Abbrechen</button>
                </div>
        </div>

    </div>
</body>
</html>