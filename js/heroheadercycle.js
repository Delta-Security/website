var text=[
    "The box with more storage than an actual box.",
    "The best thing since sliced bread. 🍞",
    "The something something something.",
    "The ultimate host for your grandma's photo collection.",];
    
    var counter=0;
    var elem=document.getElementById("heroText");
    var inst=setInterval(change,3500);
    function change(){elem.innerHTML=text[counter];
        counter++;if(counter>=text.length){counter=0}}