<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #sidebar {
            position: fixed;
            height: 100%;
            width: 240px;
            top: 55px;
            left: 0;
            padding: 10px;
        }

        #main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Welcome, {{$user_name}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" style="margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile</button>
                    <li class="nav-item">
                        <a href="{{route('logout')}}"><button class="btn btn-success">Logout</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Analytics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Users
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-md-9" id="main-content">
                <!-- Main Content Area -->
                <h2>{{$user_name}}</h2>
                <p>This is your dashboard</p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">User Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="margin-left: -20px;">
                    <ul class="d-flex flex-row justify-content-between align-items-center" style="list-style: none;">
                        <li>Image</li>
                        <li>
                            <form action="{{route('upload')}}" method="post" enctype="multipart/form-data" class="d-flex align-items-center justify-content-end">
                                @csrf
                                <input type="file" name="profile_pic" id="profile_pic">
                                <input type="submit" value="Upload" class="btn btn-success">
                            </form>
                        </li>
                    </ul>
                    <ul class="d-flex flex-row justify-content-between align-items-center" style="list-style: none;">
                        <li>Name</li>
                        <li style="font-weight: bold;">{{$user_name}}</li>
                    </ul>
                    <ul class="d-flex flex-row justify-content-between align-items-center" style="list-style: none;">
                        <li>Email</li>
                        <li style="font-weight: bold;">{{$email}}</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="/edit">
                        <button type="button" class="btn btn-success">Edit Profile</button>
                    </a>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>