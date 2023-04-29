let offset = 0;
const sliderLine = document.querySelector('.video-works');

document.querySelector('.video-nextt').addEventListener('click', function(){
offset = offset + 353;
if (offset >1059) {
  offset = 0;
}
sliderLine.style.left = -offset + 'px';
});

document.querySelector('.video-prew').addEventListener('click', function(){
  offset = offset - 353;
  if (offset <0) {
    offset = 1059;
  }
  sliderLine.style.left = -offset + 'px';
  });