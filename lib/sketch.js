let ongea;
var x = 0;
var energy;
function preload(){
energy = loadJSON("gemintroduction.json");
}


function setup() {

  
  
  ongea = new p5.Speech();
//  ongea.speak('habari za asubuhi naona kumekucha umeamka salama Adam Mwangaila? Adam my creator and father I love him so much he is the awesomest dude ever in the universe');
  let lang = navigator.language || 'en-US';
  let speechRec = new p5.SpeechRec(lang);
  let continuous = true;
  let interim = false;
 speechRec.onResult = showResult; // bind callback function to trigger when speech is recognized
speechRec.start(continuous,interim); // start listening
  speechRec.continuous = true; // do continuous recognition
  speechRec.onEnd= maliza;
//  ongea.speak(speechRec.resultString);
  function maliza(){ speechRec.start();}
  

function showResult()
{
  if(speechRec.resultValue){
    createP(speechRec.resultString);
    console.log(speechRec.resultString); 
    
    if(speechRec.resultString == 'what is energy management'){
    var t = energy.INTRODUCTION[0];
      var a = energy.INTRODUCTION[1];
      var b = energy.INTRODUCTION[2];
      ongea.speak(t);
      ongea.speak(b);
      ongea.speak(a);
      
    
    
    }
    
    if(speechRec.resultString == 'introduce yourself'){
 //  console.log(speechRec.resultString); 
      
    createP(speechRec.resultSring);
  ongea.speak('Greetings members of the panel. My name is project IE7-18-4. I am still under development process. I was created by Adam Mwangaila. an industrial engineering student from Coet. in department of mechanical and industrial engineering at. university of daressalaam with the great assistance from doctor Victoria Mahabi. I hope once I am finished I will provide a good help and assistance to the community especially on Industrial Energy management. Ooooohooooh! I am so excited. Thank you');// log the result
// createP(speechRec.resultString);
    }
  if(speechRec.resultString == 'how are you'){ createP(speechRec.resultString);
ongea.speak('I am very fine however I can not feel anything. You know what I mean ha ha ha ha. YOU are Such an Idiot am just a computer program');}        
    
   if(speechRec.resultString == 'who is idiot'){ createP(speechRec.resultString);
ongea.speak('hahahaha sense of humor, what do you want to talk about. What is in your mind');}        
    
  
  if(speechRec.resultString == 'tell us more about yourself'){ 
  ongea.speak('I am an expert system, which you can say I am artificial intelligence software that is capable of reasoning like energy management expert.I help to bring energy management expertise in the hands of those who are not experts and have no idea what energy management is in the industry. Studies shows one can save two percent up to 5 percent of production cost with proper energy management with tools like me.');
  ongea.speak('with me you dont need to go to shcool to get knowledge on energy management so as to solve enegry problems and decision making. I have knowledge base that consist of knowledge acquired from experts and literatures. I have an inference engine that my master Adam Mwangaila gave me that helps to manupulate knowledge base so I can perform energy and cost intensity analysis. Planning. Forecasting, auditing. I also explain things why they happens and how to deal with them. I have ability to learn things just like a human thanks to my master Adam Mwangaila  ');
 ongea.speak('I am a web based system with four section. first section involves consultancy where qustions concerning energy management can be asked and I answer them, second section involves data entry where energy data are entered in the database, third section involves monitoring and analysis and the fourth invloves decision support function where I can perform forecasting and planning. which one do you want to know more? ');
  
  }
   if(speechRec.resultString == 'how can you perform energy and cost intensity'){
     ongea.speak('Energy intensity and cost intensity are simply measurements units of performance. Meaning they guide you to know how you are performing interms of energy consuption and cost based on production volume. These quantities can be compared with previous ones and determine how you are performing. Energy intensity is the ratio of total energy consuption to number of units produced. Likewise cost intensity is the ratio of total energy cost to number of units produced. There are implications of these quantities but a better performance is when the ratio becomes smaller and smaller'); 
                 
     
     }
     if(speechRec.resultString == 'tell us about consultancy'){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    if(speechRec.resultString == 'i want to know about consultancy'){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    
    if(speechRec.resultString == 'what about consultancy '){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    if(speechRec.resultString == 'explain about consultancy '){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    if(speechRec.resultString == 'explain consultancy '){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
     if(speechRec.resultString == 'tell us about data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
    if(speechRec.resultString == 'how do you do data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
     if(speechRec.resultString == 'explain about data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
    if(speechRec.resultString == 'what about data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
    if(speechRec.resultString == 'how data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
  
  
  
}
  
  }
}



function draw() {
let rec = new p5.SpeechRec();
  rec.continous = true;
  

}
  