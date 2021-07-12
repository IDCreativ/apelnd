console.log('JS OK');

// Toggle button
$( document ).ready(function()
{
  $('#toggleMenu').click(function()
  {
    $('#toggleMenu').toggleClass('active-toggle');
    console.log('Toggle menu');
  });
});

// Reveal menu
var $button = $("#toggleMenu")
var $dropdownNav = $("#menu-wrapper")

$($dropdownNav).click(function(event){
  $('body').toggleClass("show-menu");
})

$($button).click(function(event){
    $('body').toggleClass("show-menu");
})


var Affiche=document.getElementById("countdown");
function Rebour() {
    var date1 = new Date();
    var date2 = new Date ("Jun 26, 2021 09:00:00");
    var sec = (date2 - date1) / 1000;
    var n = 24 * 3600;
    if (sec > 0) {
        j = Math.floor (sec / n);
        h = Math.floor ((sec - (j * n)) / 3600);
        mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
        sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
        Affiche.innerHTML = "<div><span class=\"chiffre\">"+ j +"</span><span>jours</span></div><div><span class=\"chiffre\">"+ h +" </span><span>heures</span></div><div><span class=\"chiffre\">"+ mn +"</span><span>min</span></div><div><span class=\"chiffre\">"+ sec + "</span><span>sec</span></div>";
        window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";

    tRebour=setTimeout ("Rebour();", 1000);
    }
    else {
        Affiche.innerHTML = ""
    }
}
Rebour();