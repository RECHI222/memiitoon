
@component('components.header')
@endcomponent

<body>
<div class="container"> 
  <h1>Play</h1>
  <a href="{{ route('titles.index') }}">&lt; back</a>
  <p><strong>TITLE: </strong>{{ $title->name }}</p>
  <p><strong>TIME:</strong>{{ $title->time }}</p>
  <div style="text-align: right;">
    <button onclick="ribikBtn()" style="font-family:'Hachi Maru Pop', cursive;" >Type-A</button>
    <button onclick="delaBtn()" style="font-family:'Dela Gothic One', sans-serif;">Type-B</button>
    <button onclick="yujiBtn()" style="font-family:'Yuji Mai', serif;">Type-C</button>
    <button onclick="orignalBtn()">orignal</button>
  </div>
  <div class="bg">
    <div id="show">
{{-- wordを表示する --}}
      <h1 id="showVocab" class="text-center display-1 fw-bold deffontfam" ></h1>
{{-- meanを表示する --}}
      <h1 id="showMean" class="text-center display-1 deffontfam"></h1>
      <h1 class="text-center display-1 fw-bold deffontfam" id="titleVocab"> 
      START!!</h1>
    </div>
  </div>
  <button onclick="startInterval()" id="startBtn">start</button>
  <button onclick="stopInterval()" id="stopBtn">stop</button>
  <button onclick="resetAction()" id="resetBtn">reset</button>

</div>
<style>
  .bg{
    height: 450px;
    background-color: {{ $title->color }};
    padding-top: 170px;
  }
 .deffontfam {
  font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji', system-ui, -apple-system;
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


{{-- start,stop,resetボタンのところ --}}

  {{-- stopボタンのアクション --}}
  function stopInterval(){
    clearInterval(intervalId);
    showMean.style.display = "block";
  }


  {{-- startボタンのアクション --}}
    
  function startInterval(){
    titleVocab.style.display = "none";
    showMean.style.display = "none";
  {{-- ?はundefinedを表示するため --}}
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

  {{-- resetボタンのアクション --}}
  function resetInterval(){
    clearInterval(intervalId);
    intervalId = undefined;
    i = 0;
    titleVocab.style.display = "block";
    showVocab.textContent = "";
    showMean.textContent = "";
  }
  function resetAction(){
    resetInterval();
    titleVocab.textContent = "START!!";
  }

{{-- font変更のボタン類 --}}

  {{-- ribikボタンのアクション --}}
  function ribikBtn() {
    showVocab.style.fontFamily = "'Hachi Maru Pop', cursive";
    showMean.style.fontFamily = "'Hachi Maru Pop', cursive";
    titleVocab.style.fontFamily = "'Hachi Maru Pop', cursive";
  }
  function delaBtn() {
    showVocab.style.fontFamily = "'Dela Gothic One', sans-serif";
    showMean.style.fontFamily = "'Dela Gothic One', sans-serif";
    titleVocab.style.fontFamily = "'Dela Gothic One', sans-serif";
  }
  function yujiBtn() {
    showVocab.style.fontFamily = "'Yuji Mai', serif";
    showMean.style.fontFamily = "'Yuji Mai', serif";
    titleVocab.style.fontFamily = "'Yuji Mai', serif";
  }
  function orignalBtn() {
    showVocab.style.fontFamily = " 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji', system-ui, -apple-system";
    showMean.style.fontFamily = "'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji', system-ui, -apple-system";
    titleVocab.style.fontFamily = "'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji', system-ui, -apple-system";
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
