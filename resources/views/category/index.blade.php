

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .category-container {
            margin: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">My App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buyer.login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buyer.register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container category-container">
        <h2>Categories</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Garmin</h3>
                <p>Explore the latest Garmin products.</p>
            </div>
            <div class="col-md-4">
                <h3>Samsung</h3>
                <p>Discover Samsung's innovative technology.</p>
            </div>
            <div class="col-md-4">
                <h3>Xiaomi</h3>
                <p>Check out Xiaomi's affordable gadgets.</p>
            </div>
            <div class="col-md-4">
                <h3>MiBro</h3>
                <p>Find the best MiBro smartwatches.</p>
            </div>
            <div class="col-md-4">
                <h3>Haylou</h3>
                <p>Explore Haylou's stylish wearables.</p>
            </div>
            <div class="col-md-4">
                <h3>Huawei</h3>
                <p>Discover Huawei's cutting-edge devices.</p>
            </div>
            <div class="col-md-4">
                <h3>Casio</h3>
                <p>Check out Casio's classic watches.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>