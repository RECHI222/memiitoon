<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
  <title>title</title>
</head>

<body>
  @component('components.header')
  @endcomponent
  <div class="container">
    <main>


      <h1>Title</h1>
      <a class="btn btn-outline-secondary" type="button" href="{{ route('titles.create')}}">CREATE</a>
      @if (session('flash_message'))
      <p>{{ session('flash_message') }}</p>
      @endif

      @if($titles->isNotEmpty())
      @foreach($titles as $title)

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: {{ $title->color }}; ">
              {{ $title->name }}
            </button>
          </h2>

          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <article>
                <p><strong>ID: </strong>{{ $title->id }}</p>
                <p><strong>TIME: </strong>{{ $title->time }}</p>
                <span><strong>COLOR:</strong></span>
                <p style="background-color: {{ $title->color }}; width: 75px;">{{ $title->color }}</p>
                <form action="{{ route('titles.destroy', $title->id) }}" method="POST">
                  <a class="btn btn-outline-secondary" type="button" href="{{ route('titles.show', $title->id) }}">GO Test</a>
                  <a class="btn btn-outline-secondary" type="button" href="{{ route('titles.edit', $title->id) }}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-secondary" type="submit">Delete</button>
                </form>

              </article>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <p>nothing</p>
      @endif
    </main>

  </div>
  <!--   
   <div id="app">
    <example-component></example-component>
  <div><h1>helooo</h1></div>
    <h1>HEloo</h1>
  </div> -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>