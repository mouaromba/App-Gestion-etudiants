<!DOCTYPE html>

<head>
    <title>formulaire</title>
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
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
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
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


    <h1 style="text-align: center;"> <marquee behavior="alternate" direction="">Veillez remplir le formulaire des etudiants</marquee>
    </h1>


    <div class="container">
        <a href="{{route('liste')}}">
            <button class="btn btn-primary mb-3">Liste des etudiants</button>
        </a>

        <form method="post" action="{{route('insertion')}}">
            @csrf
        <div class="row">
            <div class="form-group mb-3">
				<label class="col-sm-3 control-label"  >NOM</label>
				<div class="col-sm-6">
				<input type="text" name="nom" class="form-control" placeholder="Entrer le nom de l'étudiant">
				</div>
				</div>

                <div class="form-group mb-3" >
                    <label class="col-sm-3 control-label" >PRENOM</label>
                    <div class="col-sm-6">
                    <input type="text" name="prenom" class="form-control" placeholde="Entrer le prenom de l'étudiant">
                    </div>
                    </div>

                    <div class="form-group mb-3" >
                        <label class="col-sm-3 control-label" >AGE</label>
                        <div class="col-sm-6">
                        <input type="number" min="0" name="age" class="form-control" placeholder=" Entrer l'age de l'étudiant">
                        </div>
                        </div>

                    <div class="form-group mb-3">
                         <label class="col-sm-3 control-label">GENRE</label>
                         <div class="col-sm-6">
                         <select class="form-select" type="text" aria-label="Default select example" name="genre"  placeholder="Selectionner le genre">
                         <option selected > Genre </option>
                         <option value="Masculin">Masculin</option>
                         <option value="Feminin">Feminin</option>
                         </select>
                         </div>
                         </div>

                         <div class="form-group mb-3">
                            <label class="col-sm-3 control-label" >ADRESSE</label>
                            <div class="col-sm-6">
                            <input type="text" name="adresse" class="form-control" placeholder="Entrer l'adresse de l'étudiant">
                            </div>
                            </div>

                         <div class="form-group mb-3">
                            <label class="col-sm-3 control-label" >TELEPHONE</label>
                            <div class="col-sm-6">
                            <input type="number" min="0" name="telephone" class="form-control" placeholder="Entrer le numéro de telephone">
                            </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="col-sm-3 control-label" >EMAIL</label>
                                <div class="col-sm-6">
                                <input type="text" name="mail" class="form-control" placeholder="Example@gmail.com">
                                </div>
                                </div>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"   class="btn btn-primary " value="Valider">
				<a href="{{route('liste')}}" class="btn btn-danger">Annuler</a>
				</div>


        </div>

      </form>
    </div>

    <footer class="  bg-primary mt-3" style="height: 10vh;"> <br>
        <h3 style="text-align: center; font-family: arial; color: white;">Copyright@2022-designed Jusy</h3>
      </footer>
</body>

</html>
