let vname = document.getElementById("vname").value;
let nname = document.getElementById("nname").value;
let mail = document.getElementById("mail").values;
let pw1 = document.getElementById("pw1").value;
let pw2 = document.getElementById("pw2").value;
let registerBtn = document.getElementById("registerButton");

registerBtn.addEventListener('click', ()=>{
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4){
            response = this.responseText;
        }
    };

    if(pw1 === pw2){
        xhttp.open("GET", ("../sites/genAcc.php?vname=" + vname + "&nname="+nname+"&mail="+mail+"&pw="+pw1), true);
        xhttp.send();
        window.location.replace("account.php");
    } else{
        // Fehler meldung
    }
});