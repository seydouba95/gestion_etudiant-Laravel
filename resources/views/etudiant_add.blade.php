@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div style="text-align:center" class="panel-heading"><hr>Ajout d'un étudiant</div>
             <hr>



                <div class="panel-body">

    <form action="{{route('etudiants.store')}}" method="post">
    {{ csrf_field() }}

     <div class ="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                    </div>
                       <div class ="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                    </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
      <div class ="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="phone" name="tel" id="tel" class="form-control">
                    </div>
                       <div class ="form-group">
                    <label for="dateNaiss">Date de Naissance</label>
                    <input type="date" name="dateNaiss" id="dateNaiss" class="form-control">
                    </div>

                       <div class ="form-group">
                    <label for="class">Classe</label>
                    <select name="classe_id" id="classe">
                    
                    @foreach ($classes as $classe )
                        <option value="{{$classe->id}}">{{$classe->nom}}</option>
                    @endforeach
                    </select>
                    </div>
  
  <button type="submit" class="btn btn-success">Enregistrer</button>
</form>

      

                </div>
            </div>
        </div>

        <div class="col-md-2">
          @if (Session::has('error'))
                <div  style="background-color:red" class="alert alert-error alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Erreur!</strong> {{Session::get('error')}}
</div>
          @endif

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
