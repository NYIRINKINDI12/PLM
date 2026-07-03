document.addEventListener("DOMContentLoaded", function(){

const chatToggle = document.getElementById("chat-toggle");
const chatWindow = document.getElementById("chat-window");
const closeChat = document.getElementById("close-chat");
const sendBtn = document.getElementById("send-btn");
const chatInput = document.getElementById("chat-input");
const chatMessages = document.getElementById("chat-messages");

let userName = "";
let language = "";
let stage = "language";

/* =========================
   FAQ DATABASE
========================= */

const faqList = [

{
keywords:["amasaha","hours","open"],
answer:{
rw:"Polyclinique la Médicale ifunguye amasaha 24/7.",
en:"Polyclinique la Médicale is open 24/7."
}
},

{
keywords:["services","serivisi"],
answer:{
rw:"Dutanga Consultation, Laboratory, Dental, Radiology, Vaccination na Minor Surgery.",
en:"We offer Consultation, Laboratory, Dental, Radiology, Vaccination and Minor Surgery."
}
},

{
keywords:["contact","telephone","phone"],
answer:{
rw:"Hamagara: +250 781 132 237",
en:"Call us: +250 781 132 237"
}
},

{
keywords:["location","aho","where"],
answer:{
rw:"Dufite amashami Kigali na Huye.",
en:"We have branches in Kigali and Huye."
}
}

];


/* =========================
   MESSAGE FUNCTIONS
========================= */

function addMessage(text,type="bot"){

const msg = document.createElement("div");
msg.className = "msg " + type;
msg.innerHTML = text;

chatMessages.appendChild(msg);
chatMessages.scrollTop = chatMessages.scrollHeight;

}


/* =========================
   TYPING ANIMATION
========================= */

function showTyping(){

const typing = document.createElement("div");
typing.className = "typing";
typing.id = "typing";

typing.innerHTML = "<span></span><span></span><span></span>";

chatMessages.appendChild(typing);
chatMessages.scrollTop = chatMessages.scrollHeight;

}

function removeTyping(){

const typing = document.getElementById("typing");
if(typing) typing.remove();

}


/* =========================
   BUTTON OPTIONS
========================= */

function showButtons(options){

const container = document.createElement("div");

options.forEach(opt=>{

const btn = document.createElement("span");
btn.className = "service-btn";
btn.innerText = opt.label;

btn.onclick = ()=> handleUserInput(opt.value);

container.appendChild(btn);

});

chatMessages.appendChild(container);

}


/* =========================
   FAQ MATCH
========================= */

function findAnswer(text){

text = text.toLowerCase();

for(let item of faqList){

for(let key of item.keywords){

if(text.includes(key)){
return item.answer[language] || item.answer["en"];
}

}

}

return null;

}


/* =========================
   USER INPUT HANDLER
========================= */

function handleUserInput(input=null){

const text = input || chatInput.value.trim();

if(!text) return;

if(!input){
addMessage(text,"user");
}

chatInput.value="";


/* LANGUAGE */

if(stage==="language"){

if(text.toLowerCase().includes("kinya")) language="rw";
else language="en";

stage="name";

showTyping();

setTimeout(()=>{

removeTyping();

addMessage(
language==="rw"
?"Muraho! Watubwira izina ryawe?"
:"Hello! What is your name?"
);

},800);

return;

}


/* NAME */

if(stage==="name"){

userName=text;

stage="chatting";

showTyping();

setTimeout(()=>{

removeTyping();

addMessage(
language==="rw"
?"Muraho "+userName+"! Twagufasha iki?"
:"Hello "+userName+"! How can we help you?"
);

showButtons([

{
label: language==="rw"?"Serivisi":"Services",
value:"services"
},

{
label: language==="rw"?"Amasaha":"Hours",
value:"hours"
},

{
label: language==="rw"?"Contact":"Contact",
value:"contact"
},

{
label: language==="rw"?"Location":"Location",
value:"location"
}

]);

},800);

return;

}


/* NORMAL CHAT */

if(stage==="chatting"){

const answer = findAnswer(text);

showTyping();

setTimeout(()=>{

removeTyping();

if(answer){

addMessage(answer);

}else{

addMessage(
language==="rw"
?"Kubindi bisobanuro waduhamagara kuri +250 781 132 237."
:"For more information call +250 781 132 237."
);

}

},900);

}

}


/* =========================
   EVENTS
========================= */

chatToggle.onclick = ()=>{

chatWindow.style.display =
chatWindow.style.display==="flex"
?"none"
:"flex";

};

closeChat.onclick = ()=>{

chatWindow.style.display="none";

};

sendBtn.onclick = ()=> handleUserInput();

chatInput.addEventListener("keypress",function(e){

if(e.key==="Enter"){
handleUserInput();
}

});


/* =========================
   INITIAL MESSAGE
========================= */

setTimeout(()=>{

addMessage("Muraho / Hello 👋 Please type: Kinyarwanda or English");

},600);

});