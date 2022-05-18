<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JUSYAPP-GESTION</title>

</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">JUSYAPP</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">-
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('formulaire')}}">Formulaire</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('liste')}}" >Liste</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <h1 style="text-align: center;">Liste des étudiants</h1>


    <br><br>

    <div class="container">
        <a href="{{route('formulaire')}}">
            <button class="btn btn-success mb-3" style="margin-left: 1000;">Formulaire</button>
        </a>
        <table id="myTable" class="table table-striped table-bordered table-hover">

            <thead>
              <tr>
                <th scope="col">numero</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">genre</th>
                <th scope="col">adresse</th>
                <th scope="col">telephone</th>
                <th scope="col">email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($etudiants as $etudiant)
              <tr>
                <th scope="row">{{$etudiant->id}}</th>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->age}}</td>
                <td>{{$etudiant->genre}}</td>
                <td>{{$etudiant->adresse}}</td>
                <td>{{$etudiant->telephone}}</td>
                <td>{{$etudiant->mail}}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>

    <footer class="  bg-primary mt-3" style="height: 10vh;"> <br>
        <h3 style="text-align: center; font-family: arial; color: white;">Copyright@2022-designed Jusy</h3>
      </footer>

      <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>
</body>
</html>
