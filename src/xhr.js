document.addEventListener("DOMContentLoaded",()=>{
    let target = document.querySelector('ul');
    let request = new XMLHttpRequest();
    request.onreadystatechange = function() {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
        let response = JSON.parse(this.responseText);
        //target.innerHTML += response[0].titre+" "+response[0].auteur;
        console.table(response)
        
        for(let index in response){
            console.log(response[index].titre)
            target.innerHTML+=`<li>${response[index].titre} : ${response[index].auteur}</li>`;
        }
    }
};
//requete
request.open("GET", "traitement.php?method=getUsers");
request.send(null);
})