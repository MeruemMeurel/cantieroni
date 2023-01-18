
// verifico se sono loggato. Se sono loggato vado a scelta cantieri altrimenti vado a login
var currentUser=null;  
let rc=fetch('http://localhost/cantieroni/API/Utente/me.php',{credentials: 'include'})
        .then((response) => {
              if(response.ok) {   
                return response.json();
              }
              throw new Error(response.statusText);
        })
        .then((data) => {
                // Login effettuato
                currentUser = data;


        }).catch((err) => {
            document.location='index.html';                        
        });
