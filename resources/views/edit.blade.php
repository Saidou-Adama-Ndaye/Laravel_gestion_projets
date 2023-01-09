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
                <h1 style="font-size:50px; color:white">Formulaire de modification</h1>
            </div>
            <br>
            <form  style="border: 5px solid #AED6F1;width:50%; background-color:#AED6F1" method="POST" action="{{ route('update.projet', ['id' =>$projet->id]) }}">
                <div style="background-color: white; width:50%">
                @csrf
                <label for="">Nom</label><br>
                <input type="text" required name="nom" value="{{$projet->nom}}" placeholder="Nom"><br><br>
                <label for="">Description</label><br>
                <input type="text" required name="description" value="{{$projet->description}}" placeholder="Description"><br><br>
                <label for="">Date de debut</label><br>
                <input type="date" required name="date_debut" value="{{$projet->date_debut}}" placeholder="Date de debut"><br><br>
                <label for="">Date de fin</label><br>
                <input type="date" required name="date_fin" value="{{$projet->date_fin}}" placeholder="Date de fin"><br><br>

                <input type="submit" name="" value="Modifier"><br><br>
                </div>

            </form>
        </center>
        
       
    </body>
</html>