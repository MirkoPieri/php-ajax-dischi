function init() {

  getElement(); //inizio pagina con tutti i dischi presenti

  $('button').click(function() {
    $('.container').html(""); //pilisco l'HTML dopo la pressione del cerca
    getElement();
    $('input').val(""); //pulisco cella input dopo la ricerca
  });

}

$(document).ready(init);


function getElement() {

  var search = $('header form input').val(); //prendo autore dall'input
  var query = {'autore': search}; //salvo la variabile
  console.log(search);

  $.ajax({
    url: 'object.php',
    method: 'GET',
    data: query,
    success: function(data) {
      console.log(data);
      print(data); //richiamo funzione per stampare
    },
    error: function(error) {
      alert("Errore", error);
    }
  })
} //funzione per scaricare i dati

function print(data) {

  var dataOrd = data.sort(); //tentativo di ordinamento per data di uscita
  console.log(dataOrd, 'ordinata');
  var source   = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  for (var i = 0; i < dataOrd.length; i++) {
    var context = {title: dataOrd[i].title, autore: dataOrd[i].autore, data: dataOrd[i].data};
    var html = template(context);

    $('.container').append(html);
  }
} //funzione per stampare a schermo i vari risultati
