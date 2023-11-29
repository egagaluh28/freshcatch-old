<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
    <title>edit address</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .col {
            transition: background-color 0.3s ease;
            border-radius: 10px;
        }

        .col:hover {
            background-color: #e8e8e8;
        }

        .col a {
            text-decoration: none;
            color: #000;
        }

        .col a:hover {
            color: #33bbc5;
        }

        .col svg {
            fill: #33bbc5;
            margin-right: 10px;
        }

        .btn-custom {
            background-color: #19A7CE;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #33bbc5;
            color: #fff;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="image/logo romusha.png" width="auto" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishMarket">Fish Market</a>
                    </li>
                </ul>
                <a href="/cart" class="bi bi-cart-dash-fill" style="margin-right: 15px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z" />
                    </svg></a>
                    @if(!empty(session('user')))
                    <a href="/profil" class="bi bi-person-fill active"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                    height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
                    @else    
                    <a href="/login" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                    height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
                    @endif
                        
            </div>
        </div>
    </nav>

    <section class="h-100">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="text-white d-flex flex-row"
                    style="background-image: url('image/f6.jpg'); background-size: cover; height: 260px;">
                    <div class="ms-5 d-flex flex-column" style="width: 150px; margin-top: 2rem;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                            alt="Generic placeholder image" class="img-fluid img-thumbnail mb-2"
                            style="width: 150px; border-radius: 50%; margin-top: 8rem; z-index: 1">
                        <h4 class="text-center" data-mdb-ripple-color="dark"
                            style="z-index: 1; cursor: pointer; color: black;">
                            <span>John Doe</span>
                        </h4>
                    </div>
                </div>
                <div class="container card-body p-5 text-black ">
                    <div class="mb-5" style="margin-top: 3rem;">
                        <div class="container border bg-body rounded-4 shadow-sm p-4 mt-4">
                            <div class="row flex-column">
                                <form action="proses_edit_profile.php" method="post">
                                    <div class="col p-3 fs-5">
                                        <div class="form-group">
                                            <label for="name">name:</label>
                                            <input type="name" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>

                                    <div class="col p-3 fs-5">
                                        <div class="form-group">
                                            <label for="phone">No Telephone:</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" required>
                                        </div>
                                    </div>

                                    <div class="col p-3 fs-5">
                                        <div class="form-group">
                                            <label for="Description">Address:</label>
                                            <input type="text" class="form-control" id="Description" name="Description"
                                                required>
                                        </div>
                                    </div>

                                    <div class="mt-5 d-flex align-items-center justify-content-center">
                                        <button type="submit" class="btn btn-custom">Save Changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function saveChanges() {
            document.getElementById('editProfileForm').addEventListener('submit', function (e) {
                e.preventDefault();

                // Your code to handle form submission goes here

                // Close the modal after form submission (assuming the form is valid)
                $('#editProfileModal').modal('hide');
            });

            // JavaScript untuk mengubah latar belakang navbar saat di-scroll
            window.addEventListener("scroll", function () {
                var navbar = document.querySelector(".navbar");
                if (window.scrollY > 100) {
                    navbar.classList.add("navbar-white");
                } else {
                    navbar.classList.remove("navbar-white");
                }
            });
            // Add your custom logic for handling form submission and updating images
            // For example, you can use JavaScript to send the form data to the server
            console.log('Changes saved!');
        }
    </script>
</body>

</html>