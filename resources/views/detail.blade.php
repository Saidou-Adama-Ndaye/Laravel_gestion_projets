<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <center> 
            <div style="background:#AED6F1; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Détails du projet</h1>
            </div>
            <br>
            <p><span style="font-size:20px; color:#AED6F1; font-weight : bold;">Nom du projet : </span>{{$projet->nom}}</p>
            <p><span style="font-size:20px; color:#AED6F1; font-weight : bold;">Description du projet :  </span>{{$projet->description}}</p>
            <p><span style="font-size:20px; color:#AED6F1; font-weight : bold;">Date de debut du projet :  </span>{{$projet->date_debut}}</p>
            <p><span style="font-size:20px; color:#AED6F1; font-weight : bold;">Date de fin du projet :  </span>{{$projet->date_fin}}</p>
            <br>
            <br>
            <a style="border:1px solid; background:#AED6F1; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{route('phase.projet', ['id' =>$projet->id])}}">
            Ajouter une phase</a>
            <hr>
            <hr>
            <div style="background-color: #AED6F1; width:80%">
                <div style="background-color: white; width:60%">
            <table style="width:80%" border=1>
                <tr style="background-color:#AED6F1; color:white; font-size:20px;padding:5px">
                    <td>Nom</td>
                    <td>Durée</td>
                    <td>Priorité</td>
                    <td>Action</td>
                </tr>

                
            @if ($projet->phases->count() > 0)
                        @foreach ($projet->phases as $p) 
                            <tr>
                                <td>{{ $p->nom }}</td>
                                <td> {{ $p->duree }} </td>
                                <td> {{$p->priorite }} </td>
                                <td>
                                    <a style="color:red" href="{{route('supprimer.phase', ['id' =>$p->id])}}">DEL🗑</a>
                                    <a href="{{route('editer.phase', ['id' =>$p->id])}}">UPD✏</a>
                                </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun projet  dans la base</span> 
            @endif 
                
            </table>
                </div>
            </div>
            
        </center>
    </body>