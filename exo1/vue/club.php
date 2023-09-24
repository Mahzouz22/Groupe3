<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit.php</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<style>
        .padding{
            padding-top: 90px;
        }
    </style>
<body class="padding">
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a href="" class="navbar-brand">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar"
                    aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navBar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">Link</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="navBarDropdown"
                                role="button" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu" aria-labelledby="navBarDropdown">
                                <li><a href="" class="dropdown-item">Action</a></li>
                                <li><a href="" class="dropdown-item">Another Action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="" class="dropdown-item">Something-else</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon">
                            <button type="button" class="btn btn-outline-success" id="button-addon">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>

<main>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-offset-lg-1 ms-2">
                <h4>Ajouter un club</h4>

            <form action="" id="form_addclub">
                
            <div class="col my-4">
                    <label for="ref" class="form-label fw-semibold">Code</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>

                <div class="col my-4">
                    <label for="libel" class="form-label fw-semibold">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>

                <div class="col my-4">
                    <label for="prix" class="form-label fw-semibold">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville">
                </div>

                <div class="col my-4">
                    <label for="selpays" class="form-label fw-semibold">NomPays</label>
                    <select name="selpays" id="selpays" class=form-select>
                    </select>
                </div>
    

                <div class="col my-4">
                    <input type="button" id="btnAjoutClub" value="Ajouter" class="form-control text-white bg-primary">
                </div>
            </form>

            </div>
        
            <div class="col-lg-7 table-responsive-md">
                <table class="table" id="tabClub">
                    <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Ville</th>
                            <th scope="col">NomPays</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

    
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>