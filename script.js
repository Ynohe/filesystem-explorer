const uploadArchive = document.getElementById('upload-btn');
const uploadModal = document.getElementById('upload-modal');


uploadArchive.addEventListener("click", uploadFile)
uploadModal.addEventListener("click", uploadFile)

function uploadFile(e){
    if(uploadModal.classList.contains("d-none")) {
        uploadModal.classList.remove("d-none");
}else{
    uploadModal.classList.add("d-none");
} }