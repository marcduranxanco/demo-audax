<!DOCTYPE html>
<html>
<head>
    <title>Audax Contracts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="{{ asset('js/contracts_filter.js')}}"></script>
</head>
<body>

@include('layouts.nav')

<div class="container">
    @yield('content')
</div>

</body>
</html>
