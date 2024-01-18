
  @component('components.header')
  @endcomponent

<body>
<div class="container">
    
  <h1>Title</h1>

{{-- Titleのcreateボタン --}}
  <a class="btn btn-outline-secondary" type="button" href="{{ route('titles.create')}}">CREATE</a>
 
{{-- Titleができたら文面で表示する --}} 
  @if (session('flash_message'))
  <p>{{ session('flash_message') }}</p>
  @endif

{{-- titleがあったら表示する標題の部分 --}} 
  @if($titles->isNotEmpty())
  @foreach($titles as $title)

  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $title->name }}" aria-expanded="true" aria-controls="collapseOne" style="background-color: {{ $title->color }}; ">
          {{ $title->name }}
        </button>
      </h2>
{{-- titleがあったら表示する中身の部分 --}} 
      <div id="{{ $title->name }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
         
            <p><strong>ID: </strong>{{ $title->id }}</p>
            <p><strong>TIME: </strong>{{ $title->time }}</p>
            <span><strong>COLOR:</strong></span>
            <p style="background-color: {{ $title->color }}; width: 75px;">{{ $title->color }}</p>
            <form action="{{ route('titles.destroy', $title->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
              <a class="btn btn-outline-secondary" type="button" href="{{ route('titles.show', $title->id) }}">GO Test</a>
              <a class="btn btn-outline-secondary" type="button" href="{{ route('titles.edit', $title->id) }}">Edit</a>
              @csrf
              @method('DELETE')
              <button class="btn btn-outline-secondary" type="submit">Delete</button>
            </form>
          </div>
        </div>
    </div>
  </div>  
@endforeach
{{-- Titleが何もない時にnothingと表示する --}}
@else
<p>nothing</p>
@endif  
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

