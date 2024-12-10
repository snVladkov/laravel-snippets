<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- включваме bootstrap чрез cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- включваме sweetalert2 чрез cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">

    <title>Books</title>
</head>
<body class="d-flex h-100 text-center">
    @if (Session::has('success'))
        <script>
            Swal.fire({
                text: "{{ Session::get('success') }}",
                icon: "success"
            });
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            Swal.fire({
                text: "{{ Session::get('error') }}",
                icon: "error"
            });
        </script>
    @endif

    <div class="d-flex w-100 p-0 mx-auto flex-column">
        <nav class="navbar navbar-expand navbar-dark bg-dark py-3">
            <div class="container-fluid">
                <!-- Линкове в навигацията -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Добави книга</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Списък с книги</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="px-3 my-4">
            {{ $slot }}
        </main>

        <footer class="mt-auto text-white-50">
            <small>&copy; Books</small>
        </footer>
    </div>
</body>
</html>