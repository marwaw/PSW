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
