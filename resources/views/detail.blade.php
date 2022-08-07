<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="BookStore/BookStoreStyle.css">
    <title>Contact</title>
  </head>
  <body>
    <div class = "Header">
        <h1>Happy Book Store</h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="classicCategory">Classic</a></li>
                <li><a class="dropdown-item" href="fantasyCategory">Fantasy</a></li>
                <li><a class="dropdown-item" href="horrorCategory">Horror</a></li>
                <li><a class="dropdown-item" href="historicalCategory">Historical</a></li>
                <li><a class="dropdown-item" href="literaryCategory">Literary</a></li>
                <li><a class="dropdown-item" href="romanceCategory">Romance</a></li>
                <li><a class="dropdown-item" href="shortStoriesCategory">Short Stories</a></li>
                <li><a class="dropdown-item" href="suspenseCategory">Suspense</a></li>
                <li><a class="dropdown-item" href="thrillersCategory">Thrillers</a></li>
                <li><a class="dropdown-item" href="biographiesCategory">Biographies</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="detail">Book Detail</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="box">
        <div class="row text-black">
            <div class="col-md-6" style="background-color: rgba(104, 89, 24, 0.705);">
                <h1>Book Detail</h1>
                <br>
                <h2>Title : Classic</h2>
                <h2>Author : Author 1</h2>
                <h2>Publisher : Publisher 1</h2>
                <h2>Year : 2001</h2>
                <h2>Description :</h2>
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
                    a type specimen book.</h3>
                
            </div>

            <div class="col-md-2 ms-2" style="background-color:rgba(104, 89, 24, 0.705);">
                <h1>Category</h1>
                <div class="row">
                    <div class="col-md-6">
                        @yield('category')
                    </div>
                    <div class="col-md-15 text-black">
                        <ul><a class="link-dark" href="classicCategory">Classics</a></ul>
                        <ul><a class="link-dark" href="fantasyCategory">Fantasy</a></ul>
                        <ul><a class="link-dark" href="horrorCategory">Horror</a></ul>
                        <ul><a class="link-dark" href="historicalCategory">Historical</a></ul>
                        <ul><a class="link-dark" href="literaryCategory">Literary</a></ul>
                        <ul><a class="link-dark" href="romanceCategory">Romance</a></ul>
                        <ul><a class="link-dark" href="shortStoriesCategory">Short Stories</a></ul>
                        <ul><a class="link-dark" href="suspenseCategory">Suspense</a></ul>
                        <ul><a class="link-dark" href="thrillersCategory">Thrillers</a></ul>
                        <ul><a class="link-dark" href="biographiesCategory">Biographies</a></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class = "Footer fixed-bottom">
      &copy; Happy Book Store 2021
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>