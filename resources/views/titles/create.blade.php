<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
</head>
@component('components.header')
@endcomponent

<body>

<div class="container">
  
  <div>
    <h2>Add New Title</h2>
  </div>
  <div>
    <a href="{{ route('titles.index') }}">&lt; back</a>
  </div>

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="card text-left">
  <form action="{{ route('titles.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label"><strong>name</strong></label>
      <input type="text" id="name" name="name" class="form-control-sm">
    </div>
    <div class="mb-3">
      <label for="time" class="form-label"><strong>time</strong></label>
      <input min="0" max="10" type="number" id="time" name="time" class="form-control-sm">
    </div>
    <div class="mb-3">
      <label for="color" class="form-label"><strong>color</strong></label>
      <input type="color" id="color" name="color" class="form-control form-control-color" value="#D9E61E">
    </div>
    <button type="submit" class="btn btn-primary ">send</button>
  </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </div>
</body>

</html>