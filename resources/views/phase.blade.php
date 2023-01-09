<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <center>
            <div style="background:#AED6F1; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Formulaire Ajout Phase</h1>
            </div>
            <br>
            <form  style="border: 5px solid #AED6F1;width:50%; background-color:#AED6F1" method="POST" action="{{route('store.phase')}}">
                <div style="background-color: white; width:50%">
                @csrf
                <input type="hidden" name="id" value="{{$id}}"><br><br>
                <label for="">Nom</label><br>
                <input type="text" required name="nom" placeholder="Nom"><br><br>
                <label for="">Durée</label><br>
                <input type="number" required name="duree" placeholder="duree"><br><br>
                <label for="">Priorité</label><br>
                <input type="text" required name="priorite" placeholder="priorite"><br><br>
                <input type="submit" name="" value="Ajouter"><br><br>

                </div>

            </form>
        </center>
        
       
    </body>
</html>