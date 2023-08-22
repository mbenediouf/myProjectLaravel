<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="py-5" style="display: flex;">
                <a href="/ajouter" class="btn btn-primary me-2">ajouter un etudiant</a>
                <h3>Crud in laravel</h3>
                </div>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif
            </div>
        </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Numero carte </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $ide = 1;
    @endphp
    @foreach($etudiants as $etudiant)
    <tr>
      <th scope="row">{{ $ide }}</th>
      <td>{{ $etudiant->prenom }}</td>
      <td>{{ $etudiant->nom }}</td>
      <td>{{ $etudiant->numero_carte }}</td>
      <td>
        <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
        <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @php
    $ide += 1;
    @endphp
    @endforeach
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>