document.getElementById('formulaire').addEventListener('submit', function(e){
    e.preventDefault();
    var data= new FormData(this);
    var xhr= new XMLHttpRequest();
    var button=document.getElementById('boutton');
    var success=document.getElementById('notification');
    var urlz=this.action;
    button.disabled=true;
    xhr.onreadystatechange= function(){
        if (this.readyState==4 && this.status==200) {
        var resultat= this.response;
        if (resultat==1){
          success.innerHTML="<div class='alert alert-success'>Operation Bien Réussie</div>";
           setTimeout(actualiser,3000);
            button.innerHTML="<span class='bi bi-yes'></span> Chargement!!!.......";
           function actualiser(){
            this.document.getElementById('formulaire').style.display="none";
            button.innerHTML="Enregistrer <i class='bi bi-save2'></i>";
            button.disabled=false;
             success.innerHTML="";
           }
        }
        else{
          success.innerHTML="<div class='alert alert-danger'>"+resultat+"</div>";
          button.disabled=false;
        }
        }
      };
      xhr.open("POST",urlz,true);
      xhr.send(data);
      return false;
    });

  document.getElementById('formulaire_deux').addEventListener('submit', function(e){
    e.preventDefault();
    var data= new FormData(this);
    var xhr= new XMLHttpRequest();
    var button=document.getElementById('boutton_deux');
    var success=document.getElementById('notification_deux');
    var urlz=this.action;
    button.disabled=true;
    xhr.onreadystatechange= function(){
        if (this.readyState==4 && this.status==200) {
        var resultat= this.response;
        if (resultat==1){
          success.innerHTML="<div class='alert alert-success'>Operation Bien Réussie</div>";
            setTimeout(actualiser,3000);
            button.innerHTML="<span class='bi bi-yes'></span> Chargement!!!.......";
            function actualiser(){
            this.document.getElementById('formulaire_deux').style.display="none";
            button.innerHTML="Enregistrer <i class='bi bi-save2'></i>";
            button.disabled=false;
              success.innerHTML="";
            }
        }
        else{
          success.innerHTML="<div class='alert alert-danger'>"+resultat+"</div>";
          button.disabled=false;
        }
        }
      };
      xhr.open("POST",urlz,true);
      xhr.send(data);
      return false;
    });
    document.getElementById('formulaire_trois').addEventListener('submit', function(e){
      e.preventDefault();
      var data= new FormData(this);
      var xhr= new XMLHttpRequest();
      var button=document.getElementById('boutton_trois');
      var success=document.getElementById('notification_trois');
      var urlz=this.action;
      button.disabled=true;
      xhr.onreadystatechange= function(){
          if (this.readyState==4 && this.status==200) {
          var resultat= this.response;
          if (resultat==1){
            success.innerHTML="<div class='alert alert-success'>Operation Bien Réussie</div>";
              setTimeout(actualiser,5000);
              button.innerHTML="<span class='bi bi-yes'></span> Chargement!!!.......";
              function actualiser(){
              this.document.getElementById('formulaire_trois').reset();
              button.innerHTML="Enregistrer <i class='bi bi-save2'></i>";
              button.disabled=false;
                success.innerHTML="";
              }
          }
          else{
            success.innerHTML="<div class='alert alert-danger'>"+resultat+"</div>";
            button.disabled=false;
          }
          }
        };
        xhr.open("POST",urlz,true);
        xhr.send(data);
        return false;
      });