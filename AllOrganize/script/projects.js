let projects = document.getElementById("projectsMain");
let projAddBtn = document.getElementsByClassName("projectsBtn");
let projCancel = document.getElementById("projCancel");
let valuesTable = document.getElementById("valuesTable");
let projGen = document.getElementById("projAdd");


projGen.addEventListener('click', ()=>{
    let name = document.getElementById("name").value;
    let date = document.getElementById("date").value;
    let kunden = document.getElementById("kunden").value;
    if(check()){
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.status == 200 && this.readyState == 4){
                response = this.responseText;
            }
        };
        
        xhttp.open("GET", ("../sites/readForm.php?name=" + name + "&date="+date+"&kunden="+kunden), true);
        xhttp.send();
        valuesTable.style.zIndex = 0;
        loadPage();
    }
});

projAddBtn[0].addEventListener('click', ()=>{
    valuesTable.style.zIndex = 2;
    let inputs = document.getElementById("projInputs");
    let error = document.getElementById("errorDiv");
    error.innerHTML = "";
    inputs.innerHTML = "";
    let input1 = document.createElement("input");
    let input2 = document.createElement("input");
    let input3 = document.createElement("input");

    input1.id = "name";
    input1.type = "text";
    input1.name = "name";
    
    input2.id = "date";
    input2.type = "date";
    input2.name = "date";

    // Select tag
    input3.id = "kunden";
    input3.type = "text";
    input3.name = "kunden";

    inputs.appendChild(input1);
    inputs.appendChild(input2);
    inputs.appendChild(input3);
});

projCancel.addEventListener('click', ()=>{
    valuesTable.style.zIndex = 0;
});

function loadPage(){
    projects.innerHTML = "";
    setTimeout(()=>{
        
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.status == 200 && this.readyState == 4){
                response = this.responseText;
                data = JSON.parse(this.response);
                for(let i = 0; i < data.length; i++){
                    
                    let project = document.createElement("div");
                    let projectHead = document.createElement("div");
                    let projectName = document.createElement("h2");
                    let projectDate = document.createElement("h2");
                    let projectKunden = document.createElement("h2");
                    let projectTasks = document.createElement("div");
                    
                    
                    for(let j = 0; j < data[i]["tasks"].length; j++){
                        let task = document.createElement("div");
                        let taskName = document.createElement("h3");
                        let taskDescr = document.createElement("h3");
                        let taskDate = document.createElement("h3");
                        let taskDel = document.createElement("button");
                        let taskCheck = document.createElement("button");
                        
                        task.classList.add("projectTask");
                        taskName.classList.add("taskName");
                        taskDescr.classList.add("taskDescr");
                        taskDate.classList.add("taskDate");
                        taskDel.classList.add("taskDel");
                        taskCheck.classList.add("taskCheck");
                        
                        taskName.innerText = data[i]["tasks"][j]["name"];
                        taskDescr.innerText = data[i]["tasks"][j]["descr"];
                        taskDate.innerText = data[i]["tasks"][j]["date"];
                        taskDel.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"/></svg>';
                        taskCheck.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"/></svg>';
                        
                        task.appendChild(taskName);
                        task.appendChild(taskDescr);
                        task.appendChild(taskDate);
                        task.appendChild(taskDel);
                        task.appendChild(taskCheck);
                        
                        projectTasks.appendChild(task);
                    }
    
                    let projectBtn = document.createElement("button");
    
                    project.classList.add("project");
                    projectHead.classList.add("projectHead");
                    projectName.classList.add("projectName");
                    projectDate.classList.add("projectDate");
                    projectKunden.classList.add("projectKunden");
                    projectTasks.classList.add("projectTasks");
                    projectBtn.classList.add("projectBtn");
    
                    projectBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></svg>';
    
                    projectName.innerText = data[i]["name"];
                    projectDate.innerText =  data[i]["date"].substring(8,10)+"."+data[i]["date"].substring(5,7)+"."+data[i]["date"].substring(0,4);
                    projectKunden.innerText = data[i]["kunden"];
    
                    project.id=i;
                    
                    projectHead.appendChild(projectName);
                    projectHead.appendChild(projectDate);
                    projectHead.appendChild(projectKunden);
    
                    project.appendChild(projectHead);
                    project.appendChild(projectTasks);
                    project.appendChild(projectBtn);
                    projects.appendChild(project);
                }   
            }
        };
        xhttp.open("GET", ("readJson.php?id=projects"), true);
        xhttp.send();
    },30);

}

loadPage();

function check(){
    let checkCount = 0;
    let name = document.getElementById("name").value;
    let date = document.getElementById("date").value;
    let kunden = document.getElementById("kunden").value;
    let error = document.getElementById("errorDiv");
    let btns = document.getElementById("projBtns");
    error.innerText = "";

    if(name.length <3){
        btns.style.marginTop = "3vh";
        let errorMsg = document.createElement("p");
        errorMsg.innerText = "Projektame: min. 3 Buchstaben";
        error.appendChild(errorMsg);
        checkCount++;
    }

    if(!isValidDate(date)){
        btns.style.marginTop = "3vh";
        const now = new Date();
        let dayNow = now.getDate();
        let monthNow = now.getMonth()+1;
        let yearNow = now.getFullYear();
        let errorMsg = document.createElement("p");
        errorMsg.innerText = "Datum: Muss nach dem "+dayNow+"."+monthNow+"."+yearNow+" sein";
        error.appendChild(errorMsg);
        checkCount++;
    }

    if(kunden.length <3){
        btns.style.marginTop = "3vh";
        let errorMsg = document.createElement("p");
        errorMsg.innerText = "Kunden: min. 1 Kunde";
        error.appendChild(errorMsg);
        checkCount++;
    }

    if(checkCount == 0){
        return true;
    } else {
        return false;
    }
}

function isValidDate(dateString){
    let parts = dateString.split("-");
    let day = parseInt(parts[2], 10);
    let month = parseInt(parts[1], 10);
    let year = parseInt(parts[0], 10);

    const now = new Date();
    let dayNow = now.getDate();
    let monthNow = now.getMonth()+1;
    let yearNow = now.getFullYear();

    if(year.toString().length == 4){
        if(year == yearNow){
            if(month > monthNow){
                return true;
            } else if(month == monthNow){
                if(day > dayNow){
                    return true;
                } else{
                    return false;
                }
            }
            return false;
        } else if(year > yearNow){
            return true;
        } else{
            return false;
        }
    } else {
        return false;
    }
};