
@component('components.header')
@endcomponent

<body>  
<div class="container">
  <div>
    <h2>Show Vocabulary</h2>
  </div>
  <div>
    <a href="{{ route('vocabularies.index') }}">back</a>
  </div>

  <div class="card text-left">
  <div>
    <strong>Word:</strong>
    {{$vocabulary->word}}
  </div>
  <div>
    <strong>Mean:</strong>
    {{$vocabulary->mean}}
  </div>
  <div>
    <strong>Example:</strong>
    {{$vocabulary->example}}
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

