<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universitas Teknologi Bandung</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Your content goes here -->
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">DAULAH EL ISLAMI</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var successMessage = "{{ session('success') }}";
            var errorMessage = "{{ session('error') }}";
            
            if (successMessage) {
                toastr.success(successMessage, 'BERHASIL!');
            }
            
            if (errorMessage) {
                toastr.error(errorMessage, 'GAGAL!');
            }
        });
    </script>
</body>
</html>
