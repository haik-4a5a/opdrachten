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

  function wCijfer2(){


                if(cijfer > 0 && cijfer < 50){
                    document.getElementById('resultaat').innerHTML+="<br>"+ "De beoordeling is een onvoldoende want + een ";
                  }else if(cijfer > 49 && cijfer < 60){
                    document.getElementById('resultaat').innerHTML+="<br>"+"De beoordeling is matig, want + een ";

                }else if(cijfer > 59 && cijfer < 75){
                    document.getElementById('resultaat').innerHTML+="<br>"+"De beoordeling is een voldoende,want " + "een";

                }else if(cijfer > 74 && cijfer < 101){
                    document.getElementById('resultaat').innerHTML+="<br>"+"De beoordeling is goed, want + een";

                }else{
                    document.getElementById('resultaat').innerHTML+="<br>"+"U voert een verkeerde cijfer in";

                }
            }


}


}
