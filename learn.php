
<html>

<head>
  <meta charset="UTF-8">
   <link rel="stylesheet" href="./style.css">
     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.5/p5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.5/addons/p5.dom.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
  <script src="../lib/p5.speech.js"></script>
  
  <title>learning mechanism for industrial energy management expert system</title>
  
  

<script>
  var ongea;
var energy;
var message;

function setup() {
  
  
  
  var ongea = new p5.Speech();
  ongea.setVoice('Alice');

  let lang = navigator.language || 'en-US';
  let speechRec = new p5.SpeechRec(lang);
  
 speechRec.onResult = showResult; // bind callback function to trigger when speech is recognized
speechRec.start(); // start listening
  speechRec.continuous = true; // do continuous recognition
  speechRec.onEnd= maliza;

  function maliza(){ speechRec.start();} 
  
function showResult()
{
  if(speechRec.resultValue){
  let message = input_box.value(speechRec.resultString);
console.log(speechRec.resultString);
 
  }
}
let bot = new RiveScript();

const message_container = document.querySelector('.messages');
const form = document.querySelector('form');
const input_box = document.querySelector('input');

const brains = [
  'https://raw.githubusercontent.com/adamngaila/indust_es/master/asset/learning/star.rive',
  'https://raw.githubusercontent.com/adamngaila/indust_es/master/asset/learning/macro.rive'
];

bot.loadFile(brains).then(botReady).catch(botNotReady);

form.addEventListener('submit', (e) => {
  e.preventDefault();
  selfReply(input_box.value);
  input_box.value='';
});

function botReply(message){
  message_container.innerHTML += `<div class="bot">${message}</div>`;
  location.href = '#edge';
}


function selfReply(message){
  message_container.innerHTML += `<div class="self">${message}</div>`;
  location.href = '#edge';
  
  bot.reply("local-user", message).then(function(reply) {
    botReply(reply);
    ongea.speak(reply);
     ongea.setVoice('Alice');

  });
}

function botReady(){
  bot.sortReplies();
  botReply('Hello there you can type or speak too am listening');
}

function botNotReady(err){
  console.log("An error has occurred.", err);
}
}
  
</script>
  
  </head>
  <body>
    <div class="chat">
      <div class="messages"></div>
      <div id="edge"></div>
      <form class="actions">
        <input type="text" placeholder="press 'Enter' to send...">
      </form>     
    </div>
    
    <script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
  

  
  

   <!--<script  src="./script.js"></script>-->


</body>

</html>
