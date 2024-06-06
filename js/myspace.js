
 //Pomodoro timer code
// declaring variables

let workTitle = document.getElementById('work');
let breakTitle = document.getElementById('break');

let workTime = 25;
let breakTime = 5;

let seconds = "00"

// display the timer
window.onload = () => {
    document.getElementById('minutes').innerHTML = workTime;
    document.getElementById('seconds').innerHTML = seconds;

    workTitle.classList.add('active');
}

// starting the timer
function start() {
    // change button reset or start
    document.getElementById('start').style.display = "none";
    document.getElementById('reset').style.display = "block";

    // changing the time
    seconds = 59;

    let workMinutes = workTime - 1;
    let breakMinutes = breakTime - 1;

    breakCount = 0;

    // countdown start
    let timerFunction = () => {
        //change the timer display
        document.getElementById('minutes').innerHTML = workMinutes;
        document.getElementById('seconds').innerHTML = seconds;

        // start
        seconds = seconds - 1;

        if(seconds === 0) {
            workMinutes = workMinutes - 1;
            if(workMinutes === -1 ){
                if(breakCount % 2 === 0) {
                    // start break
                    workMinutes = breakMinutes;
                    breakCount++

                    // change the panel
                    workTitle.classList.remove('active');
                    breakTitle.classList.add('active');
                }else {
                    // continue work
                    workMinutes = workTime;
                    breakCount++

                    // change the panel
                    breakTitle.classList.remove('active');
                    workTitle.classList.add('active');
                }
            }
            seconds = 59;
        }
    }

    // start countdown
    setInterval(timerFunction, 1000); // 1000 = 1s
}

//video slider code
//defining variables 

let slides = document.querySelectorAll('.slide_container');
let index = 0;

//next video button function
function next() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

//previous video button function
function prev() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}


 //note code
 //defining variables
const notesBox = document.querySelector(".note_box");
const noteBtn = document.querySelector(".note_btn");
let note = document.querySelectorAll(".note-input");

//check for notes in local storage when the browser is refreshed. If there's any, display them.
function displayNote(){
    notesBox.innerHTML = localStorage.getItem("note");
}
displayNote();
 
//function for storing data into the browsers' local storage
function amendStorage(){
    localStorage.setItem("note", notesBox.innerHTML);
}

 //creates a note container when button is clicked 
noteBtn.addEventListener("click", ()=>{
    //select 'note_box' and 'note_btn' elements
    let notesHolder = document.createElement("p");
    let image = document.createElement("img");

    //appending the paragraph and image to the 'note_box' element
    notesHolder.className = "note-input";
    notesHolder.setAttribute("contenteditable", "true");
    image.src = "images/trash.png";
    notesBox.appendChild(notesHolder).appendChild(image);
}) 

//deletes the note when 'img' element inside 'note_box' is clicked 
notesBox.addEventListener("click", function(i){
    if(i.target.tagName === "IMG"){
        i.target.parentElement.remove();
        amendStorage();
    }
    //update the content inside p tag 
    else if(i.target.tagName === "P"){
        note = document.querySelectorAll(".note-input");
        note.forEach(n => {
            n.onkeyup = function(){
                amendStorage();
            }
        })
    }
})
document.addEventListener("keydown", event =>{
    if(event.key === "Enter"){
        document.execCommand("insertLine");
        event.preventDefault();
    }
})

//code for task list
const userTask = document.getElementById("user-task");
const taskList = document.getElementById("taskListBox");

//function for inserting new tasks when add button is trigggered
function NewTask(){
    if(userTask.value === ''){
        alert("The field is empty!");
    }

    //whenever the button is triggered, a new task element is appended in the taskList element
    else{
        let list = document.createElement("li");
        list.innerHTML = userTask.value;
        taskList.appendChild(list);

        //inserting a span element which when clicked will delete the task
        let del = document.createElement("span");
        del.innerHTML = "\u00d7";
        list.appendChild(del);
    }
    userTask.value = "";
    storeTask();
}

//checking, unchecking and deleting the tasks
taskList.addEventListener("click", function(l){

    //when the taskLists' element 'li' is triggered, it will check the task
    if(l.target.tagName === "LI"){
        l.target.classList.toggle("item_checked");
        storeTask();
    }

    //if 'span' or delete option is clicked, it will remove its parent element task
    else if(l.target.tagName === "SPAN"){
        l.target.parentElement.remove();
        storeTask();
    }
}, false);

//function for storing users' task data so even if the browsers' refreshed the data will still be there
function storeTask(){
    localStorage.setItem("data", taskList.innerHTML);
}

//function to display the stored task list
function displayTask(){
    taskList.innerHTML = localStorage.getItem("data");
}
displayTask();