<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Organize | Registrieren</title>
    <link rel="icon" href="../img/icon.png"> 
    <link rel="stylesheet" href="../css/registerStyle.css">
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
                    <a href="projects.php">Projekte</a>
                </div>
                
                <div>
                    <a href="index.html">Account</a>
                </div>
            </div>
        </nav>
        <main>
            <div id="registerField">
                <h1>Registrierung</h1>
                <div id="registerInput">
                    <div id="registerLabels">
                        <h2>Vorname</h2>
                        <h2>Zuname</h2>
                        <h2>Email</h2>
                        <h2>Passwort</h2>
                        <h2>Bestätigen</h2>
                        <h2>Account Typ</h2>
                    </div>
                    <div id="registerInputs">
                        <input type="text" id="vname">
                        <input type="text" id="nname">
                        <input type="mail" id="mail">
                        <input type="password" id="pw1">
                        <input type="password" id="pw2">
                        <select name="accType" id="accType">
                            <option value="customer">Kunde</option>
                            <option value="worker">Arbeiter</option>
                        </select>
                    </div>
                </div>
                <div id="registerBtn">
                    <button id="registerButton">Registrieren</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>