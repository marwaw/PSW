var help;
var helpTexts = [ "Tutaj wpisz swoje imie",
  "Tutaj wpisz swoje nazwisko",
  "Wybierz z listy/wpisz miesiąc, w którym się urodziłeś/urodziłaś",
  "Tutaj wpisz swój adres email",
  "Podaj swój numer telefonu",
  "Wybierz przedział, który określa Twój wiek",
  "Ten przycisk wysyła Twój wypełniony formularz ",
  "Ten przycisk czyści cały formularz",
   "" ];

function init() {
  help = document.getElementById("help");

  // register listeners
   registerListeners(document.getElementById( "name" ), 0 );
   registerListeners(document.getElementById( "surname" ), 1 );
   registerListeners(document.getElementById( "birthMonth" ), 2 );
   registerListeners(document.getElementById( "email" ), 3 );
   registerListeners(document.getElementById( "phone" ), 4 );
   registerListeners(document.getElementById( "age" ), 5 );
   registerListeners(document.getElementById( "submit-btn" ), 6 );
   registerListeners(document.getElementById( "reset" ), 7 );
}

function registerListeners( object, messageNumber )
{
   object.addEventListener( "focus", 
      function() { help.innerHTML = helpTexts[ messageNumber ]; },
      false );
   object.addEventListener( "blur", 
      function() { help.innerHTML = helpTexts[ 8 ]; }, false );
}

function noRobotFunction() {
    var counter = 1;
    var correct = false;
  
  do {
      var wynik = parseInt(prompt("Podaj wynik: 123 + 11"));
      if (wynik == 134) {
        correct = true;
        window.alert("wysłane");
      }
      else {
        ++counter;
      }
  }
  while (!correct & counter <= 3);

  if (!correct) {
    window.alert("Coś jest nie tak...");
  }
  
}

window.addEventListener( "load", init, false );