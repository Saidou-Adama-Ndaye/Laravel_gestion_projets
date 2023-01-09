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
                <h1 style="font-size:50px; color:white">Formulaire Modification Phase</h1>
            </div>
            <br>
            <form style="border: 5px solid #AED6F1;width:50%; background-color:#AED6F1" method="POST" action="{{ route('updated.phase', ['id' =>$phase->id])}}">
                <div style="background-color: white; width:50%">
                @csrf
                <input type="hidden" name="id" value="{{$phase->projet_id}}">
                <label for="">Nom</label><br>
                <input type="text" required name="nom"  value="{{$phase->nom}}" placeholder="Nom"><br><br>
                <label for="">Durée</label><br>
                <input type="number" required name="duree"  value="{{$phase->duree}}" placeholder="duree"><br><br>
                <label for="">Priorité</label><br>
                <input type="text" required name="priorite"  value="{{$phase->priorite}}" placeholder="priorite"><br><br>
                <input type="submit" name="" value="Modifier"><br><br>
                </div>
            </form>
        </center>
        
       
    </body>
</html>