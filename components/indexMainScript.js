//language-select open on click

let langToggle = document.getElementById('langBanner');
    langToggle.style.visibility = 'hidden';
function langSelector() {
        if (langToggle.style.visibility === 'hidden'){
            langToggle.style.visibility = 'visible';
        }
        else {
            langToggle.style.visibility = 'hidden';
        }
    }

//nav-bar image trigger  

/*let menuTriggr = document.querySelector('header-trigger');
let menu = document.querySelector('main-header-container');

    menu.setAttribute('margin-top: -1%');*/



/*nav-bar items auto-move on hover TODO - return
let url = location.href; 

document.getElementById('about').onclick {
        location.href = url + "#about";
        history.replaceState(null,null,url);
}
*/


//grabber for skills horizontal table rows 

const skillSliders = document.querySelectorAll('.skills-table');
let skillsSliderDown = false;
let skillsSliderStartX;
let scrollLeft;

skillSliders.forEach(skillsSlider => {
    skillsSlider.addEventListener('mousedown', (e) => {
        skillsSliderDown = true;
        skillsSliderStartX = e.pageX - skillsSlider.offsetLeft;
        scrollLeft = skillsSlider.scrollLeft;
      });
      skillsSlider.addEventListener('mouseleave', () => {
        skillsSliderDown = false;
      });
      skillsSlider.addEventListener('mouseup', () => {
        skillsSliderDown = false;
      });
      skillsSlider.addEventListener('mousemove', (e) => {
        if(!skillsSliderDown) return;
        e.preventDefault();
        const x = e.pageX - skillsSlider.offsetLeft;
        const walk = (x - skillsSliderStartX) * 3; //scroll-fast
        skillsSlider.scrollLeft = scrollLeft - walk;
        console.log(walk);
      });
})
////////grabber for samples videos\\\\\\\\\\\\\
const videoGrabber = document.querySelector('.samples-gallery-container');
let videoGrabDown = false;
let videoStartX;
let videoScrollLeft;

    videoGrabber.addEventListener('mousedown', (anchor) => {
        videoGrabDown = true;
        videoStartX = anchor.pageX - videoGrabber.offsetLeft;
        videoScrollLeft = videoGrabber.scrollLeft;
      });
      videoGrabber.addEventListener('mouseleave', () => {
        videoGrabDown = false;
      });
      videoGrabber.addEventListener('mouseup', () => {
        videoGrabDown = false;
      });
      videoGrabber.addEventListener('mousemove', (anchor) => {
        if(!videoGrabDown) return;
        anchor.preventDefault();
        const anchorCalc = anchor.pageX - videoGrabber.offsetLeft;
        const moveFast = (anchorCalc - videoStartX) * 3; //scroll-fast
        videoGrabber.scrollLeft = videoScrollLeft - moveFast;
        console.log(moveFast);
      });

/*
slidingTable.addEventListener('mousemove', (e) => {
    e.preventDefault();
        if(!mouseDown) {
            return; //return the position where grab stopped.
        }
    const posX = e.pageX - slidingTable.offsetLeft; //calculate destination position of grab action
    const endPosX = posX - startPosX; //calculate the pixels distance between start and final destination of grab
    slidingTable.movedDistance = movedDistance - endPosX;
    }
);

slidingTable.addEventListener('mousedown', startGrab, false);
slidingTable.addEventListener('mouseup', stopGrab, false);
slidingTable.addEventListener('mouseleave', stopGrab, false);
*/

//CV Selector\\


/*
  function cvEnW(){
    try{
      cv.src = `${cvSrcPrelim}1k8WFHafKLtaVBhBO2EGw3g8o4kDBRIOY/preview`;
      console.log('fetched English Day CV');
    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }  
  function cvEnB(){
    try{
      cv.src = `${cvSrcPrelim}1gCSmMaG2lGkz8lCXT2DrqUOtbcpN5aRN/preview`;
      console.log('fetched English Night CV');
    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }
  function cvEsW(){
    try{
      cv.src = `${cvSrcPrelim}1VKEAntz8tO1txPGVal3gsByv2Y2L2qXs/preview`;
      console.log('fetched Spanish Day CV');

    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }
  function cvEsB(){
    try{
      cv.src = `${cvSrcPrelim}117BMfDPlDjomaQxhx9ov6yzmTJ02MsLB/preview`;
      console.log('fetched Spanish Night CV');
    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }
  function cvFrW(){
    try{
      cv.src = `${cvSrcPrelim}1GcoHr3VIvGC7a-aeUO5PyJyWRaR5ltU9/preview`;
      console.log('fetched French Day CV');
    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }
  function cvFrB(){
    try{
      cv.src = `${cvSrcPrelim}11F6gKzy1YmGEStHw44TYjGVE8q_Nrpad/preview`;
      console.log('fetched French Night CV');
    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }
  function cvPtW(){
    try{
      cv.src = `${cvSrcPrelim}1yvNs_uAYmp4fTjJ0uZblexs9uTzcAHWw/preview`;
      console.log('fetched Portuguese Day CV');
    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }
  function cvPtB(){
    try{
      cv.src = `${cvSrcPrelim}18yeTZJQQKf6OjOBn71Bu4BggVO270vNU/preview`;
      console.log('fetched Portuguese Night CV');
    }
    catch(err){
      console.log(`Sorry, something went wrong with fetching the cv. ${err} `)
    }
  }
*/
const cvSrcPrelim = `https://drive.google.com/file/d/`;
let cvEncodArr = [
                '1k8WFHafKLtaVBhBO2EGw3g8o4kDBRIOY',
                '1gCSmMaG2lGkz8lCXT2DrqUOtbcpN5aRN',
                '1VKEAntz8tO1txPGVal3gsByv2Y2L2qXs',
                '117BMfDPlDjomaQxhx9ov6yzmTJ02MsLB',
                '1GcoHr3VIvGC7a-aeUO5PyJyWRaR5ltU9',
                '11F6gKzy1YmGEStHw44TYjGVE8q_Nrpad',
                '1yvNs_uAYmp4fTjJ0uZblexs9uTzcAHWw',
                '18yeTZJQQKf6OjOBn71Bu4BggVO270vNU',
            ];               
let cvEncoding;               
      //ENGLISH
      cvEnW.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[0];
      }); 
      cvEnB.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[1];
      });
      //SPANISH
      cvEsW.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[2];
      });
      cvEsB.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[3];
      });
      //FRENCH
      cvFrW.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[4];
      });
      cvFrB.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[5];
      });
      //PORTUGUESE
      cvPtW.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[6];
      });
      cvPtB.addEventListener('click', ()=>{
        cvEncoding = cvEncodArr[7];
      });
//RUNTIME EXEC
let cv = document.getElementById('cv');
      fetchCV.addEventListener('click', ()=>{
          cv.src = `${cvSrcPrelim}${cvEncoding}/preview`;
          console.log(cv.src);
          console.log('fetched CV');
      });  

