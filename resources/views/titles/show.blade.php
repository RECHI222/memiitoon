<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
  <title>title show</title>
</head>
<body>
@component('components.header')
    @endcomponent
<div class="container">
  
    <h1>Play</h1>
    <a href="{{ route('titles.index') }}">&lt; back</a>
     
    
    
        <p><strong>TITLE: </strong>{{ $title->name }}</p>
        <p><strong>TIME:</strong>{{ $title->time }}</p>
        <div class="bg">
  
        
        <div id="show">
          <h1 id="showVocab" class="text-center display-1 fw-bold" ></h1>
          <h1 id="showMean" class="text-center display-1"></h1>

          <h1 class="text-center display-1 fw-bold" id="titleVocab">START!!</h1>
        </div>
        </div>
    
      <button onclick="startInterval()" id="startBtn">start</button>
      <button onclick="stopInterval()" id="stopBtn">stop</button>
      <button onclick="resetInterval()" id="resetBtn">reset</button>
  

</div>
<style>
  .bg{
    height: 450px;
    background-color: {{ $title->color }};
    padding-top: 170px;
  }

</style>
<script>
const showWords = <?php echo json_encode($words); ?>;
const showMeans = <?php echo json_encode($means); ?>;

const startBtn = document.getElementById('startBtn');
const stopBtn = document.getElementById('stopBtn');
const resetBtn = document.getElementById('resetBtn');
const titleVocab = document.getElementById('titleVocab');

let showMean = document.getElementById('showMean');
let showVcab = document.getElementById('showVocab');
let setTimer = {{ $title->time }} * 1000;
let show = document.getElementById('show');
let i = 0;
let stopTimer = setTimer * showWords.length + setTimer;

let intervalId;

function stopInterval(){
  clearInterval(intervalId);
  showMean.style.display = "block";
}

function startInterval(){
  titleVocab.style.display = "none";
  showMean.style.display = "none";
  showVocab.textContent = showWords[i]?.['word']; 
   showMean.textContent = showMeans[i]?.['mean']; 
   i++;
  intervalId = setInterval(() => {

   showVocab.textContent = showWords[i]?.['word']; 
   showMean.textContent = showMeans[i]?.['mean']; 
   i++;
  if(i > showWords.length){
    resetInterval();
    titleVocab.textContent = "Finish!!"
  }
   }, setTimer);
  }


function resetInterval(){
  clearInterval(intervalId);
  intervalId = undefined;
  i = 0;
  titleVocab.style.display = "block";
 
  showVocab.textContent = "";
  showMean.textContent = "";
}



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>