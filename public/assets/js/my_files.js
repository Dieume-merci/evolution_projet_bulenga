function show_step(information){       
    document.getElementById("etape_1").style.display='none';
    document.getElementById("etape_2").style.display='none';
    document.getElementById("etape_3").style.display='none';
    document.getElementById("etape_4").style.display='none';
    document.getElementById(information).style.display='flex';
}
function show_stepp(information){       
    document.getElementById("etapee_1").style.display='none';
    document.getElementById("etapee_2").style.display='none';
    document.getElementById("etapee_3").style.display='none';
    document.getElementById("etapee_4").style.display='none';
    document.getElementById(information).style.display='flex';
}
function change_show_items(){
    var element_show=document.getElementById("etat_de_l_enfant").value;
    if (element_show!='') {
        document.getElementById('description').style.display='flex';
    } else {
        document.getElementById("description").style.display='none';  
    }    
}
function shorterror(){
    swal({
        title: "Element supprimé Avec Success",
        icon: "success",
        button: "Fermer",
        });
}