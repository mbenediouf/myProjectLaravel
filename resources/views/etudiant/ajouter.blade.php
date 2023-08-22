<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <h3 class="py-3">Ajouter un etudiant</h3>
            @if (session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
            @endif

           <ul>
               @foreach($errors->all() as $error)
                  <li class="alert alert-danger">{{$error}}</li>
                @endforeach
           </ul>
            <div class="col-6">
            <form action="ajouter/traitement" method="POST">
                @csrf
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="id_card" class="form-label">Numero carte</label>
                <input type="text" class="form-control" id="id_card" name="numero_carte">
            </div>
            
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="/etudiant" class="btn btn-danger">Retour</a>
            
        </form>
            </div>
        </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>