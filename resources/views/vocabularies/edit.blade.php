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
  <h2>Edit Vocabulary</h2>
</div>
<div>
  <a href="{{ route('vocabularies.index') }}">back</a>
</div>
<div class="card text-left">
<form action="{{ route('vocabularies.update', $vocabulary->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div>
    <strong>Word:</strong>
    <input type="text" name="word" placeholder="{{ $vocabulary->word }}">
  </div>
  <div>
    <strong>Mean:</strong>
    <input type="text" name="mean" placeholder="{{ $vocabulary->mean }}">
  </div>
  <div>
    <strong>Example:</strong>
    <input type="text" name="example" placeholder="{{ $vocabulary->example }}">
  </div>
  <div>
    <strong>Title:</strong>
    <select name="title_id">
      @foreach($titles as $title)
      @if($users == $title->user_id)

      <option value="{{ $title->id }}">{{ $title->name }}</option>
      @endif
      @endforeach
    </select>
  </div>
  <div>
    <button type="submit">submit</button>
  </div>

</form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>

