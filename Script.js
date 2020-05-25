// TODO: Vet ej om man ska använda i regga.html eller Registrers.php
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




function ValideraRegg()// TODO: Skapa filter för värderna.
// TODO: Hasha & salta lösenordet.
{
  var email = document.Registrera.email.value;
  var username = document.Registrera.username.value;
  var password = document.Registrera.password.value;
  var emailkrav1 = email.indexOf('@');
  var emailkrav2 = email.lastindexOf('.')


  if (email.trim() == "") {
    alert("Du behöver fylla i en giltig Email adress")
  } else if (username.trim() == "") {
    alert("Du behöver välja ett användarnamn")
  } else if ((emailkrav1 < 0) || emailkrav1 > emailkrav2) {
    alert("Email-adressen verkar ha fel format, vänligen försök igen")

  } else if ((password.trim() == "") || (password.lenght < 5)) {
    alert("Lösenordet måste vara minst fem tecken")
  } else {
    alert("Välkommen till GolfGear ditt konto är nu skapat!")
  }


}

function ValideraInlogg() // TODO: Bygg ut denna för att förhindra att användare skriver in fel saker //
 {
  var username = document.Inlogg.username.value;
  var password = document.Inlogg.password.value;

  if (username.trim() == "") {
    alert("Fyll i ditt användarnamn för att logga in")
  } else if (password.trim() == "") {
    alert("Fyll i ditt lösenord för att logga in")
  } else {
    alert("Välkommen hoppas du finner din vistelse givande")
  }


}
