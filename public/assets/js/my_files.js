function show_step(information){       
    document.getElementById("etape_1").style.display='none';
    document.getElementById("etape_2").style.display='none';
    document.getElementById("etape_3").style.display='none';
    document.getElementById(information).style.display='flex';
}
function change_show_items(){
    var element_show=document.getElementById("etat_de_l_enfant").value;
    document.getElementById("deces").style.display='none';
    document.getElementById("mortne").style.display='none';
    document.getElementById("naissancevivante").style.display='none';
    document.getElementById(element_show).style.display='flex';
}