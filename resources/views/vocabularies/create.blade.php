
@component('components.header')
@endcomponent

<body> 
<div class="container">
  <div>
    <h2>Add New Vocabulary</h2>
  </div>
  <div>
    <a href="{{ route('vocabularies.index') }}">back</a>
  </div>

  {{-- vocabを作成する要素 --}}
  <div class="card text-left">
    <form action="{{ route('vocabularies.store') }}" method="POST">
    @csrf

    <div>
      <strong>Word:</strong>
      <input type="text" name="word" placeholder="word">
    </div>
    <div>
      <strong>Mean:</strong>
      <input type="text" name="mean">
    </div>
    <div>
      <strong>Example:</strong>
      <input type="text" name="example">
    </div>
    <div>
      <strong>Title:</strong>
      <select name="title_id">
        @foreach($titles as $title)
{{-- ログインしたユーザのTitleが選べるように --}}
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
