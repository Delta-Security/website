var text=[
    "The most storage possible!",
    "The best innovation since ovhs new hosting area!",
    "Ultimate Solution for the Best Price!",
    "The ultimate host for your team!",];
    
    var counter=0;
    var elem=document.getElementById("heroText");
    var inst=setInterval(change,6000);
    function change(){elem.innerHTML=text[counter];
        counter++;if(counter>=text.length){counter=0}}
