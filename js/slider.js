let offset = 0;
const sliderLine = document.querySelector('.video-list');

document.querySelector('.video-next').addEventListener('click', function(){
offset = offset + 617;
if (offset >2468) {
  offset = 0;
}
sliderLine.style.left = -offset + 'px';
});

document.querySelector('.video-prev').addEventListener('click', function(){
  offset = offset - 617;
  if (offset <0) {
    offset = 2468;
  }
  sliderLine.style.left = -offset + 'px';
  }); 





   
  let offfset = 0;
  const slikerLine = document.querySelector('.video-works');
  
  document.querySelector('.video-nextt').addEventListener('click', function(){
  offfset=offfset +353;
  if (offfset >1059) {
    offfset = 0;
  }
  slikerLine.style.left = -offfset + 'px';
  });
  
  document.querySelector('.video-prew').addEventListener('click',function(){
    offfset= offfset - 353;
    if (offfset <0){
      offfset= 1059;
    }
    slikerLine.style.left = -offfset + 'px';
  });


  let offftset = 0;
  const slikcerLine = document.querySelector('.video-works');
  
  document.querySelector('.video-nexttt').addEventListener('click', function(){
  offftset=offftset +311;
  if (offftset >933) {
    offftset = 0;
  }
  slikcerLine.style.left = -offftset + 'px';
  });
  
  document.querySelector('.video-preww').addEventListener('click',function(){
    offftset= offftset - 311;
    if (offftset <0){
      offftset= 933;
    }
    slikcerLine.style.left = -offftset + 'px';
  });