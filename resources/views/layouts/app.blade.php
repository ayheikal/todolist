<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>todoList</title>
    <link rel="stylesheet"  href="/css/app.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    @include('inc.navbar')
    <div class="container" style="padding:15px">
        @include('inc.messages')
        @yield("content")
    </div>
    
</body>
</html>