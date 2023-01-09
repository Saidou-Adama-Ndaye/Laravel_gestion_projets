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
                <h1 style="font-size:50px; color:white">Liste des projets</h1>
            </div>
            <br>
            <br>
            <br>
            <div style="background-color: #AED6F1; width:80%">
                <div style="background-color: white; width:60%">
            <table style="width: 100%" border=1>
                <tr style="background-color:#AED6F1; color:white; font-size:20px;padding:5px">
                    <td>NOM</td>
                    <td>Descriptin</td>
                    <td>Date Debut</td>
                    <td>Date Fin</td>
                    <td>Details</td>
                    <td>Action</td>
                </tr>

                
            @if ($projets->count() > 0)
                        @foreach ($projets as $p) 
                            <tr>
                                <td>{{ $p->nom }}</td>
                                <td> {{ $p->description }} </td>
                                <td> {{$p->date_debut }} </td>
                                <td> {{$p->date_fin }} </td>
                                <td>
                                    <a style="color:green" href="{{route('detail.projet', ['id' =>$p->id])}}">INFO✏</a>
                                </td>
                                <td>
                                    <a style="color:red" href="{{route('delete.projet', ['id' =>$p->id])}}">DEL🗑</a>
                                    <a href="{{route('edit.projet', ['id' =>$p->id])}}">UPD✏</a>
                                </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun projet  dans la base</span>
            @endif 
                
            </table>
            <br>
            <br>
            <a style="border:1px solid; background:#AED6F1; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{route('ajout.projet')}}">
            Ajouter un projet</a>
                </div>
        </div>

        </center>
    </body>