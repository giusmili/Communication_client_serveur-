document.addEventListener("DOMContentLoaded",()=>{ //function principale DOM BOM
    console.log("loaded");
   
    $(function(){
        let $liste = $('ul');
        $.getJSON("traitement.php?method=getUsers",(data)=>{
            for(let i = 0; i < data.length; i++){
                
                $liste.append($('<li>', { text : data[i].titre+", Auteur : "+data[i].auteur}));
            }
            console.log(JSON.stringify(data))
        });

    });

});