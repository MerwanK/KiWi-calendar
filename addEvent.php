<!DOCTYPE html>
<html>
    <head>
        <title>Kiwi Calendar : Ajouter un évènement</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./main.css" />
        <link rel="stylesheet" href="./event.css" />
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen"
           href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
        <link rel="icon" type="image/png" href="favicon.png" />
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
    <body>
        <header id="title">
            <img alt="logo ESIR" src="./images/esir.png" />
            <a href="./index.php"><img class="rightLogo" alt="logo Kiwi" src="./images/KiWiCalendar.png" /></a>
        </header>

        <div id="descEvent">
              <h1>Ajouter un Évènement</h1>

              <form name="eventForm">
             Titre de l'évènement :<br>
             <input type="text" name="title">
             <br>
             Adresse du lieu :<br>
             <input type="text" name="address">
             <br>
             Date de début :<br>
             <div id="datetimepicker" class="input-append date">
               <input type="text" name="dtstart"></input>
               <span class="add-on">
                 <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
               </span>
             </div>
             <br>
             Date de fin :<br>
             <div id="datetimepicker2" class="input-append date">
               <input type="text" name="dtend"></input>
               <span class="add-on">
                 <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
               </span>
             </div>
             <br>
             Description de l'évènement :<br>
             <textarea name="description" rows="4" cols="50" form="eventForm">
             </textarea>
             <br>
             Site de l'évènement :<br>
             <input type="url" value="http://" name="site">
             <br>
             Image de l'évènement :<br>
             <input type="url" value="http://" name="urlImage">
             <br>
            Contact :<br>
             <input type="text" name="contact">
            </form>
            <button id="submit">Ajouter l'évènement !</button>


<script type="text/javascript"
 src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script type="text/javascript"
 src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
</script>
<script type="text/javascript"
 src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript"
 src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>
<script type="text/javascript">
  $('#datetimepicker').datetimepicker({
    format: 'dd/MM/yyyy hh:mm:ss',
    language: 'pt-BR'
  });
    $('#datetimepicker2').datetimepicker({
      format: 'dd/MM/yyyy hh:mm:ss',
      language: 'pt-BR'
    });
</script>

        </div>
    </body>
</html>
