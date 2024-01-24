<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=M+PLUS+Rounded+1c:wght@500&family=Rubik+Burned&display=swap" rel="stylesheet">
  <title>MemiiToOn</title>
</head>

<nav class="navbar navbar-expand-sm" style="background-color: #BA64E8;">
  <div class="container-fluid">
    <a href="{{ url('/') }}" class="navbar-brand" style="font-family: 'Yuji Mai', serif;">MemiiToOn</a>


    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('titles.index') }}">Title</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('vocabularies.index') }}">Vocab</a>
      </li>

      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            ログアウト
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" onsubmit="return confirm('本当に削除しますか？')">
            @csrf
          </form>
{{-- 確認ボタンができてないため一旦中止--}}
          <!-- <a class="dropdown-item" href="{{ route('user.destroy') }}" onclick="event.preventDefault();
            document.getElementById('delete-form').submit();
            confirm('本当に削除しますか？');">
            削除
          </a>
          <form id="delete-form" action="{{ route('user.destroy') }}" method="POST" class="d-none" onsubmit="return confirm('本当に削除しますか？')">
            @csrf
            @method('DELETE') -->
          <!-- </form> -->
        </div>
      </li>
    </ul>
  </nav>
</html>