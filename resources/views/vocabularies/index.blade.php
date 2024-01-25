
@component('components.header')
@endcomponent
<body>
<div class="container">
  <h1>Vocabularies</h1>
  <a class="btn btn-link btn-sm" type="button" href="{{ route('vocabularies.create')}}">CREATE</a>
  <table class="table table-striped">

{{-- title_idのソート設定部分 --}}
    @sortablelink('title_id', 'TitleID')
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-expand" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z" />
    </svg>
 
    <tr>
      <th scope="col">Title ID</th>
      <th scope="col">Word</th>
      <th scope="col">Mean</th>
      <th scope="col">Example</th>
      <th scope="col">Action</th>
      <tbody>
    </tr>

    @foreach ($vocabularies as $vocabulary)
    <tr>
      <td>{{ $vocabulary->title_id}}</td>
      <td>{{ $vocabulary->word }}</td>
      <td>{{ $vocabulary->mean }}</td>
      <td>{{ $vocabulary->example }}</td>
     
      
      <td>
        <form action="{{ route('vocabularies.destroy', $vocabulary->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
          <a href="{{ route('vocabularies.show', $vocabulary->id) }}">Show</a>
          <a href="{{ route('vocabularies.edit', $vocabulary->id) }}">Edit</a>
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
  {{ $vocab->links() }}
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>