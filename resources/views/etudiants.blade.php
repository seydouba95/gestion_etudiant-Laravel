@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Liste des étudiants
                <a  style = "float : right" href = "{{route('etudiants.add')}}" class = "btn btn-xs  btn-success">Ajouter un étudiant</a>
                </div>

                <div class="panel-body">
                  <table class="table table-dark table-bordered table-hover">
     <thead>
     <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
         <th>Details</th>
          <th>Editer</th>
           <th>Supprimer</th>

        </tr>

    </thead>
    <tbody>
                @foreach ($etudiants as $etudiant )

               <tr>

                 <th>{{$etudiant->prenom}}</th>

                 <th>{{$etudiant->nom}}</th>

                 <th>{{$etudiant->email}}</th>
             <th>
               <a href="{{route('etudiants.show',['id'=>$etudiant->id])}}"  class = "btn btn-sm btn-primary">Détails</a>
          </th>

            <th>
               <a href=""  class = "btn btn-sm btn-warning">Editer</a>
          </th>
            <th>
               <a    href = "{{route('etudiants.delete',['id'=>$etudiant->id])}}"     class = "btn btn-sm btn-danger">Supprimer</a>
          </th>
          </tr>




             @endforeach


    </tbody>
  </table>
                </div>
                <div class = "text-center panel-footer">
                {{ $etudiants->links()  }}
                </div>
            </div>
        </div>
           <div class = " col-md-2">

            @if (Session::has('success'))
                <div  style="background-color:green" class="alert alert-error alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> {{Session::get('success')}}
</div>
          @endif

           </div>

    </div>
</div>



@endsection
