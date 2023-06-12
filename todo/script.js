const inbox = document.getElementById("inbox");
const list_cont = document.getElementById("list-cont");

function addTask(){
    if(inbox.value === ''){
        alert("plead write something!");
    }
    else{
        let li = document.createElement('li');
        li.innerHTML = inbox.value;
        list_cont.appendChild(li);
        let span = document.createElement('span');
        span.innerHTML = "\u00d7"
        li.appendChild(span);
    }
    inbox.value = '';
    saveData();
}
list_cont.addEventListener("click", function(e){
    if (e.target.tagName === "LI") {
            e.target.classList.toggle("checked");
            saveData();

    } else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
        saveData();
    }
}, false);

function saveData(){
    localStorage.setItem("data", list_cont.innerHTML);
}
function showTask(){
    list_cont.innerHTML = localStorage.getItem("data");
}
showTask();