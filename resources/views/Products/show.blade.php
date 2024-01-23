<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Style for the title */
        title {
            color: #d53509; /* Bootstrap primary color */
            text-align: center;
            margin-top: 20px;
        }
        h1 {
            color: #d53509; /* Bootstrap primary color */
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>{{ $product->name }} Details</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong class="text-primary">Name:</strong> {{ $product->name }}</p>
                <p class="card-text"><strong class="text-primary">Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p class="card-text"><strong class="text-primary">Quantity:</strong> {{ $product->quantity }}</p>
                <p class="card-text"><strong class="text-primary">Categories:</strong> {{ $product->categories->implode('name', ', ') }}</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
