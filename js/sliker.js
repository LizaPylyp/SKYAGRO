let offset = 0;
const slikerLine = document.querySelector('.video-works');

document.querySelector('.video-nextt').addEventListener('click', function(){
offset=offset +353;
if (offset >1412) {
  offset = 0;
}
slikerLine.style.left = -offset + 'px';
});

document.querySelector('.video-prew').addEventListener('click',function(){
  offset= offset - 353;
  if (offset <0){
    offset= 1412;
  }
  slikerLine.style.left = -offset + 'px';
});