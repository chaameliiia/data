window.addEventListener('DOMContentLoaded', function() {
  var navSel = document.querySelector('nav');
  var favBtn = document.querySelector('button');
  var isChecked, imgSrc;


  navSel.addEventListener('click', (e) => {
    // e.preventDefault();
    // e.target.style.color = '#f00';

    var target = e.target.textContent;
    localStorage.page = target;
  });
  var idx = 0;
  switch(localStorage.page) {
    // case 'index': navSel.children[0].style.color = '#f00'; break;
    // case 'company': navSel.children[1].style.color = '#f00'; break;
    // case 'service': navSel.children[2].style.color = '#f00'; break;
    // case 'mypage': navSel.children[3].style.color = '#f00'; break;

    case 'index': idx = 0; break;
    case 'company': idx = 1; break;
    case 'service': idx = 2; break;
    case 'mypage': idx = 3; break;
  }
  navSel.children[idx].style.color = '#f00';

  var imgArr = [];
  favBtn.addEventListener('click', () => {
    isChecked = document.querySelectorAll('input:checked');
    
    for(var i = 0; i < isChecked.length; i++) {
      // imgSrc = isChecked[i].nextElementSibling.src;
      // console.log(imgSrc);
      imgArr.push(isChecked[i].nextElementSibling.src);
    }
    console.log(imgArr);
    localStorage.favorites = imgArr;
    // console.log(localStorage.favorites);
  });

  var imgStr = localStorage.favorites;

  var outputImg = imgStr.split(',');
   // console.log(imgStr.split(','));
  // split('a'): a기준으로 문자열 잘라서 배열로 저장
  var docDiv = document.querySelector('div');
  var outputDiv = document.querySelector('.output');

  if(docDiv.classList.contains('output')) {
    for(var i = 0; i < outputImg.length; i++) {
      outputDiv.innerHTML += `<img src="${outputImg[i]}" alt="">`  
    }
  }
});