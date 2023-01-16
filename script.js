const uploadArchive = document.getElementById('upload-btn');
const uploadModal = document.getElementById('upload-modal');
const createFolder = document.getElementById('createFolder-btn');
const ppalContainer = document.getElementById('main-container');
const onclickCreate = document.getElementsByClassName('onclickCreateFolder');
const backBtn = document.getElementById('backBtn')


uploadArchive.addEventListener("click", uploadFile)
uploadModal.addEventListener("click", uploadFile)
createFolder.addEventListener("click", createDirectory)

for(let folder of onclickCreate){

folder.addEventListener("click", navigate)
}
backBtn.addEventListener("click", navigateToRoot)

function uploadFile(e){
  if(uploadModal.classList.contains("d-none")) {
    uploadModal.classList.remove("d-none");
}else{
    uploadModal.classList.add("d-none");
} }

function createDirectory(e){
    fetch('./createFolder.php', {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
            let newFolder = document.createElement('p')
            newFolder.innerText = data.path
            ppalContainer.appendChild(newFolder)
        })
        .catch((err) => console.log("Request: ", err));    
}

function navigate(event){
  let path = event.target.getAttribute('path');
  console.log(path)
  fetch(`./navigate.php?path=${path}`, {
    method: "GET",
  }).then((res)=>{
    res.json()
  }).then((data)=>{
    console.log(data)
    window.location.href = "./index.php";
  })
  .catch((err) => console.log("Request: ", err));  
// window.location.href = `./navigate.php?path=${path}`
  
}

function reloadThePage(){
  window.location.reload();
} 

function navigateToRoot(){
  let path = './root'
   fetch(`./navigate.php?path=${path}`, {
    method: "GET",
  }).then((res)=>{
    res.json()
  }).then((data)=>{
    console.log(data)
    window.location.href = "./index.php";
  })
  .catch((err) => console.log("Request: ", err));  
}