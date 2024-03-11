const inputBox = document.querySelector('.input-box')
const listContainer = document.getElementById("list-container");

// untuk memunculkan kegiatan ke interface
function addTask(){
    if(inputBox.value === ''){
        alert("Anda harus menulis sesuatu!")
    }
    else{
        let li = document.createElement("li");
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML = "\u00d7";
        li.appendChild(span);
    }
    inputBox.value = "";
    saveData();
}
 
// untuk ceklist bila kegiatan sudah done
listContainer.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
        saveData();
    }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
        saveData();
    }
}, false);

// untuk menyimpan kegiatan di interface
function saveData(){
    localStorage.setItem("data", listContainer.innerHTML);
}
function showTask(){
    listContainer.innerHTML = localStorage.getItem("data");
}
showTask();