<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Product Manager </title>
    <link rel="icon" href="favicon.ico">
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>

<nav class="navbar navbar-default">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('products') }}">Product Manager</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="/products">All</a></li>
        <li><a href="/products/create">Create Product</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>