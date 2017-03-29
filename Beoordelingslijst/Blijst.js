function wCijfer() {
  var cijfer = document.getElementById('Cijfer').value;
  var een = "het cijfer is " + cijfer ;
  console.log(cijfer);

switch (true) {
  case (cijfer <= 49):
    document.getElementById('resultaat').innerHTML += "<br>" + een + " en is dus onvoldoende";
    break;
  case (cijfer >= 50 && cijfer < 59 ):
  document.getElementById('resultaat').innerHTML += "<br>" + een + " en is dus matig";
    break;
  case (cijfer >= 60 && cijfer =< 74):
  document.getElementById('resultaat').innerHTML += "<br>" + een  + " en is dus voldoende";
    break;
  case (cijfer >= 75 && cijfer =< 100 ):
  document.getElementById('resultaat').innerHTML += "<br>" + een + " en is dus goed";
    break;
  default:

function manier1() {

}


}


}
