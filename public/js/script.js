var accueil = document.getElementById("accueil-a");
var trend = document.getElementById("tendances-a");
var abo = document.getElementById("abo-a");

$(trend).click(function(){
   $(accueil).removeClass("actived");
   $(abo).removeClass("actived");
   $(this).addClass("actived");
});

$(accueil).click(function(){
   $(trend).removeClass("actived");
   $(abo).removeClass("actived");
   $(this).addClass("actived");
});

$(abo).click(function(){
   $(accueil).removeClass("actived");
   $(trend).removeClass("actived");
   $(this).addClass("actived");
});

