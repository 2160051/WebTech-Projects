  function nightModeActivated(){
    if( Number(sessionStorage.nightMode) == 0 ){
        sessionStorage.nightMode = 1;
        document.body.style.setProperty('--night-BG',"#fff");
        document.body.style.setProperty('--day-BG',"#1a1a1a");
     } else{
        sessionStorage.nightMode=0;
        document.body.style.setProperty('--day-BG',"#fff");
        document.body.style.setProperty('--night-BG',"#1a1a1a");
      }
   }
