<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<div class="mx-auto" style="width: 500px;">
    <div class="jumbotron">
      <h1 class="display-4 text-center">Welcome!</h1>
      <p class="lead text-center">This is a books collection</p>
      <hr class="my-4">
      <p>See our collection?</p>
      <a href="{{ route('post.index') }}">
        <button class="btn btn-primary">Yes</button>
      </a> <br><br>
      <p>Add your own book?</p>
      <a href="{{ route('post.create') }}">
        <button class="btn btn-primary">Create</button>
      </a>
    </div>
  </div>
</body>
</html>
