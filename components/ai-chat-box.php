
<!-- Polyclinique Chat Box -->
<div id="ai-chat-box">
  <button id="chat-toggle">
    <div class="chat-icon">💬</div>
    <span>Chat</span>
  </button>

  <div id="chat-window">
    <div id="chat-header">
      <strong>La Médicale — Assistant</strong>
      <button id="close-chat">×</button>
    </div>

    <div id="chat-messages">
      <div class="hint"></div>
    </div>

    <div id="chat-input-area">
      <input id="chat-input" type="text" placeholder="Type here..." autocomplete="off"/>
      <button id="send-btn">➤</button>
    </div>
  </div>
</div>

<style>
#ai-chat-box { position: fixed; bottom:25px; right:25px; font-family:'Poppins',sans-serif; z-index:9999; }
#chat-toggle { display:flex; align-items:center; gap:8px; background:#0d6efd; color:white; border:none; border-radius:30px; padding:12px 18px; cursor:pointer; font-size:15px; font-weight:500; box-shadow:0 4px 10px rgba(0,0,0,0.2); transition:all 0.3s ease; }
#chat-toggle:hover { background:#0954c6; transform:translateY(-2px); }
.chat-icon { background:white; color:#0d6efd; border-radius:50%; width:25px; height:25px; display:flex; align-items:center; justify-content:center; font-size:16px; }
#chat-window { display:none; flex-direction:column; position:absolute; bottom:70px; right:0; width:360px; height:500px; border-radius:15px; background:#fff; box-shadow:0 4px 20px rgba(0,0,0,0.2); overflow:hidden; }
#chat-header { background:#0d6efd; color:white; padding:10px 15px; display:flex; justify-content:space-between; align-items:center; }
#close-chat { background:transparent; border:none; color:white; font-size:20px; cursor:pointer; }
#chat-messages { flex:1; overflow-y:auto; padding:12px; background:#f8f9fa; }
#chat-input-area { display:flex; border-top:1px solid #ddd; }
#chat-input { flex:1; padding:10px; border:none; outline:none; font-size:14px; }
#send-btn { background:#0d6efd; color:white; border:none; padding:10px 15px; cursor:pointer; font-size:16px; transition:0.3s; }
#send-btn:hover { background:#0954c6; }
.msg.user { text-align:right; background:#cfe2ff; margin:6px 0; padding:6px 10px; border-radius:10px; }
.msg.bot { text-align:left; background:#e9ecef; margin:6px 0; padding:6px 10px; border-radius:10px; font-style:italic; }
.service-btn { display:inline-block; margin:4px 2px; padding:6px 10px; background:#0d6efd; color:white; border-radius:10px; cursor:pointer; font-size:13px; }
.service-btn:hover { background:#0954c6; }
</style>

<script>
window.onload = ()=>{
const chatToggle=document.getElementById('chat-toggle');
const chatWindow=document.getElementById('chat-window');
const closeChat=document.getElementById('close-chat');
const sendBtn=document.getElementById('send-btn');
const chatInput=document.getElementById('chat-input');
const chatMessages=document.getElementById('chat-messages');

let userName='';
let language='';
let stage='language'; // language -> name -> chatting

// Offline FAQ
const faqList = [

{
keywords:["amasaha","ifunguye","24/7","hours"],
answer:{
rw:"Polyclinique La Médicale ifunguye amasaha 24 kuri 24, iminsi 7 mu cyumweru. Dutanga serivisi z'ubuvuzi ku manywa no nijoro harimo consultation, laboratoire, radiology, pediatrie, gynecology ndetse na emergency services. Ndetse dufite ambulance ihora yiteguye gutabara abarwayi igihe cyose bibaye ngombwa.",
en:"Polyclinique La Médicale is open 24 hours a day, 7 days a week. We provide continuous medical services including consultations, laboratory diagnostics, radiology, pediatrics, gynecology and emergency care. Our ambulance service is also available at any time for urgent medical transport."
}
},

{
keywords:["founder","dr kanimba","yashinzwe","history"],
answer:{
rw:"Polyclinique La Médicale yashinzwe mu mwaka wa 1991 na Dr Pierre Celestin Kanimba. Iyi clinique izwi cyane ku izina rya 'Kwa Kanimba'. Yatangiye ari ivuriro rito ariko yaje gukura igera ku rwego rwo gutanga serivisi z'ubuvuzi zizewe mu Rwanda hose ndetse ifite amashami mu turere dutandukanye.",
en:"Polyclinique La Médicale was founded in 1991 by Dr Pierre Celestin Kanimba. It is widely known as 'Kwa Kanimba'. What began as a small medical practice has grown into a trusted healthcare provider in Rwanda, with several branches across the country and partnerships with major insurance providers."
}
},

{
keywords:["services","serivisi","departments"],
answer:{
rw:"Polyclinique La Médicale itanga serivisi zitandukanye z’ubuvuzi binyuze mu mashami atandukanye. Muri zo harimo: General Consultation (kwivuza rusange), Medical Emergency (ubutabazi bwihuse ku barwayi), Hospitalization (kwita ku barwayi), Internal Medicine (ubuvuzi bw’indwara z’abakuru), Pediatrics (ubuvuzi bw’abana), Gynecology (ubuvuzi bw’abagore), Orthopedics (indwara z’amagufa n’imitsi), Dentist (ubuvuzi bw’amenyo), Ophthalmology (ubuvuzi bw’amaso), Laboratory (gupima indwara zitandukanye), Radiography – X-Ray (gufata amafoto y’imbere mu mubiri), Echographie / Ultrasound (gupima hifashishijwe ultrasound), CT Scan (isuzuma ryimbitse ry’umubiri), Endoscopy (gupima indwara zo mu nda hifashishijwe camera), Dental OPG Scan na Dental X-Ray (gupima amenyo), ndetse na Minor Surgery aho hakorerwa ubuvuzi bworoheje bwo kubaga.",
en:"Polyclinique La Médicale offers a comprehensive range of healthcare services through several specialized departments. These include General Consultation, Medical Emergency services, Hospitalization, Internal Medicine for adult diseases, Pediatrics for child healthcare, Gynecology for women's health, Orthopedics for bone and joint conditions, Dental care services, Ophthalmology for eye care, Laboratory diagnostics, Radiography (X-Ray) imaging services, Echography (Ultrasound), CT Scan advanced imaging, Endoscopy for digestive system examination, Dental OPG Scan and Dental X-Ray diagnostics, as well as Minor Surgery for safe and controlled minor surgical procedures."
},
subKeywords: {
"General Consultation": ["general consultation","kwivuza rusange","consultation","consult"],
"Medical Emergency": ["medical emergency","utabazi bwihuse","emergency","urgence"],
"Hospitalization": ["hospitalization","kwita ku barwayi","hospital","inpatient"],
"Internal Medicine": ["internal medicine","indwara z'abakuru","adult diseases","medicine"],
"Pediatrics": ["pediatrics","ubuvuzi bw'abana","children","kids"],
"Gynecology": ["gynecology","ubuvuzi bw'abagore","women health","obgyn"],
"Orthopedics": ["orthopedics","amagufa","imitsi","bone","joint"],
"Dentist": ["dentist","amenyo","dental","teeth"],
"Ophthalmology": ["ophthalmology","amaso","eye","vision"],
"Laboratory": ["laboratory","lab","gupima","tests"],
"Radiography": ["radiography","x-ray","ama foto","imaging"],
"Echography": ["echography","ultrasound","scan","gupima"],
"CT Scan": ["ct scan","scan","imaging","isuzuma ryimbitse"],
"Endoscopy": ["endoscopy","camera","gupima mu nda","digestive"],
"Dental OPG Scan": ["dental opg","opg scan","dental scan","amenyo"],
"Dental X-Ray": ["dental x-ray","x-ray teeth","amenyo x-ray"],
"Minor Surgery": ["minor surgery","kubaga","surgery","small operation"]
}
},

{
keywords:["contact","telephone","phone","helpdesk"],
answer:{
rw:"Ushobora kuvugana n'abakozi ba Polyclinique La Médicale igihe cyose. Reception: +250 781 132 237, Mobile: +250 788 305 661. Ushobora kandi kohereza email kuri polycliniquelamedicale@gmail.com. Abakozi bacu ba helpdesk bahora biteguye kugufasha ku bibazo byose byerekeye serivisi z'ubuvuzi.",
en:"You can contact Polyclinique La Médicale at any time through our helpdesk. Reception phone: +250 781 132 237, Mobile: +250 788 305 661. You may also email us at polycliniquelamedicale@gmail.com. Our support team is always ready to assist you with medical inquiries or service information."
}
},

{
keywords:["ambulance","emergency","urgence"],
answer:{
rw:"Polyclinique La Médicale itanga serivisi za ambulance zikorwa amasaha 24 kuri 24. Iyi serivisi ikoreshwa mu gutabara abarwayi bari mu bihe byihutirwa no kubageza ku ivuriro vuba kandi mu mutekano. Ushobora guhamagara +250 789 000 111 igihe cyose ukeneye ubufasha bwihuse.",
en:"Polyclinique La Médicale offers 24/7 ambulance and emergency services. This service helps transport patients quickly and safely during medical emergencies. You can call +250 789 000 111 at any time if urgent medical transport is required."
}
},

{
keywords:["branches","amashami","location"],
answer:{
rw:"Polyclinique La Médicale ifite amashami mu bice bitandukanye by'u Rwanda harimo Kigali (HQ hafi ya St Famille Catholic Church), Huye mu Majyepfo, Musanze mu Majyaruguru, Rubavu mu Burengerazuba ndetse na Ngoma mu Ntara y'Iburasirazuba. Ibi bituma abarwayi benshi bashobora kubona serivisi z'ubuvuzi hafi yabo.",
en:"Polyclinique La Médicale has several branches across Rwanda including Kigali Headquarters near St Famille Catholic Church, Huye in the Southern Province, Musanze in the Northern Province, Rubavu in the Western Province, and Ngoma in the Eastern Province. These locations help patients access healthcare services more easily."
}
},

{
keywords:["lab","results","laboratory"],
answer:{
rw:"Serivisi za laboratoire muri Polyclinique La Médicale zikoresha ikoranabuhanga rigezweho mu gupima indwara zitandukanye. Ab patients bashobora kwakira ibisubizo bya laboratoire ndetse bakamenyeshwa igihe report yabo yabonetse. Ibi bituma ubuvuzi bugenda vuba kandi bukaba bwizewe.",
en:"The laboratory at Polyclinique La Médicale uses modern diagnostic technology to perform a wide range of medical tests. Patients can receive notifications when their laboratory reports are ready and access their results quickly, helping doctors provide faster and more accurate treatment."
}
},

{
keywords:["insurance","partners"],
answer:{
rw:"Polyclinique La Médicale ikorana n'ibigo byinshi by'ubwishingizi n'amashyirahamwe mu Rwanda. Ibi bituma abarwayi benshi bashobora kwivuza bakoresheje insurance zabo. Mu bafatanyabikorwa harimo ibigo by'ubwishingizi, amabanki, amashuri n'ibindi bigo bikorana n'ivuriro mu rwego rwo guteza imbere ubuvuzi bwiza.",
en:"Polyclinique La Médicale works with many insurance companies and organizations in Rwanda. This allows patients to receive medical services using their health insurance. Our partners include insurance providers, banks, educational institutions, and other organizations supporting quality healthcare services."
}
}

];

// ===== Utilities =====
function appendMessage(text,who='bot'){
  const el=document.createElement('div'); el.className='msg '+(who==='user'?'user':'bot'); el.innerHTML=text; chatMessages.appendChild(el);
  chatMessages.scrollTop=chatMessages.scrollHeight;
}

function appendButtons(options){
  const container=document.createElement('div');
  for(const opt of options){
    const btn=document.createElement('span');
    btn.className='service-btn';
    btn.innerHTML=opt.label;
    btn.onclick=()=> handleSend(opt.value);
    container.appendChild(btn);
  }
  chatMessages.appendChild(container);
  chatMessages.scrollTop=chatMessages.scrollHeight;
}

function findBestMatch(text){
  const t=text.toLowerCase();
  const candidates=[];
  for(const item of faqList){
    for(const kw of item.keywords){
      if(t.includes(kw.toLowerCase())){candidates.push({item,kwLength:kw.length}); break;}
    }
  }
  if(candidates.length===0) return null;
  candidates.sort((a,b)=>b.kwLength - a.kwLength);
  return candidates[0].item;
}

// ===== Event Listeners =====
chatToggle.addEventListener('click',()=>{ chatWindow.style.display=chatWindow.style.display==='flex'?'none':'flex'; });
closeChat.addEventListener('click',()=> chatWindow.style.display='none');
sendBtn.addEventListener('click',()=>handleSend());
chatInput.addEventListener('keypress',e=>{if(e.key==='Enter') handleSend();});

// ===== Handle input =====
function handleSend(input=null){
  const text=input||chatInput.value.trim();
  if(!text) return;
  if(!input) appendMessage(text,'user');
  chatInput.value='';

  // Language selection
  if(stage==='language'){
    if(text.toLowerCase().includes('kinyarwanda')||text.toLowerCase().includes('rw')) language='rw';
    else language='en';
    stage='name';
    appendMessage(language==='rw'?"Muraho! Watubwira izina ryawe?":"Hello! What's your name?");
    return;
  }

  // Name input
  if(stage==='name'){
    userName=text; stage='chatting';
    appendMessage(language==='rw'?"Muraho "+userName+"! Twabasha gute?":"Hello "+userName+"! How can we help you?");
    appendButtons([
      {label:language==='rw'?'Serivisi':'Services', value:'services'},
      {label:language==='rw'?'Amasaha':'Hours', value:'hours'},
      {label:language==='rw'?'Founder':'Founder', value:'founder'},
      {label:language==='rw'?'Contact':'Contact', value:'contact'}
    ]);
    return;
  }

  // Chatting
  if(stage==='chatting'){
    const match=findBestMatch(text);
    if(match){
      const reply=(match.answer[language]||match.answer['en']).replace(/\[name\]/g,userName);
      typeWriter(reply,()=>{ 
        appendMessage(language==='rw'?"Murakoze "+userName+", nta kindi kibazo mubaza?":"Thank you "+userName+", no other questions?"); 
      });
      return;
    }

    // Unknown question
    typeWriter(language==='rw'?"Kubusobanuro burambuye "+userName+", mwahamagara +250 788 123 456 cyangwa info@clinic.example":"For detailed info "+userName+", call +250 788 123 456 or polycliniquelamedicale@gmail.com",()=>{
      appendMessage(language==='rw'?"Murakoze "+userName+", nta kindi kibazo mubaza?":"Thank you "+userName+", no other questions?");
    });
  }
}

// ===== Typing animation =====
function typeWriter(text, callback){
  let i=0; const el=document.createElement('div'); el.className='msg bot'; chatMessages.appendChild(el);
  function typing(){
    if(i<text.length){ el.innerHTML+=text.charAt(i); i++; chatMessages.scrollTop=chatMessages.scrollHeight; setTimeout(typing,30); }
    else if(callback) callback();
  }
  typing();
}

// ===== Initial hint =====
setTimeout(()=>appendMessage("Muraho! / Hello! Please type your language: 'Kinyarwanda' or 'English'.",'bot'),300);
}


</script>

