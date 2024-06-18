
// ВКЛАДКИ
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
function openity(evt, cityName) {
    var i, tabcontentqwe, link;
    tabcontentqwe = document.getElementsByClassName("tabcontentqwe");
    for (i = 0; i < tabcontentqwe.length; i++) {
        tabcontentqwe[i].style.display = "none";
    }
    link = document.getElementsByClassName("link");
    for (i = 0; i < link.length; i++) {
        link[i].className = link[i].className.replace(" act", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " act";   
}
function openstate(evt, cityName) {
    var i, ebanutsa, link;
    ebanutsa = document.getElementsByClassName("ebanutsa");
    for (i = 0; i < ebanutsa.length; i++) {
        ebanutsa[i].style.display = "none";
    }
    link = document.getElementsByClassName("link");
    for (i = 0; i < link.length; i++) {
        link[i].className = link[i].className.replace(" act", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " act";
    
}

// СМЕНА ЯЗЫКА

let navItems = document.querySelectorAll('.nav_item');
// let currentIndex = 0;
// navItems.forEach((item, index) => {
//     item.style.display = 'none';
//   });  
//   navItems[currentIndex].style.display = 'flex'; 
//   document.addEventListener('click', () => {
//     navItems[currentIndex].style.display = 'none';
//     currentIndex = (currentIndex + 1) % navItems.length;
//     navItems[currentIndex].style.display = 'flex';
//     localStorage.setItem('lang', currentIndex);
//   });

navItems[0].addEventListener('click', ()=>{
    localStorage.setItem('lang', 0);
    location.reload();
});
navItems[1].addEventListener('click', ()=>{
    localStorage.setItem('lang', 1);
    location.reload();

});

navItems[2].addEventListener('click', ()=>{
    localStorage.setItem('lang', 2);
    location.reload();

});

// ПОКАЗАТЬ ПАРОЛЬ
document.addEventListener('DOMContentLoaded', function() {
    const passwordInputs = document.querySelectorAll('.display_flex_pass input[type="password"]');
    const passwordCheckbox = document.querySelector('.display_flex_pass .password-checkbox');
    passwordCheckbox.addEventListener('change', function() {
        const showPassword = this.checked;
        passwordInputs.forEach(input => {
            input.type = showPassword ? 'text' : 'password';
        });
    });
});

// БУРГЕР

document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.sidebar_toggler');
    const sidebar = document.querySelector('#sidebar');
    const closeBtn = document.querySelector('#close_btn');
    const content = document.querySelector('#content');
    toggler.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebar.style.right = 0;
        content.style.paddingRight = "363px";
    });
    closeBtn.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebar.style.right = "-363px";
        content.style.paddingRight = 0;
    });
    document.addEventListener('click', function(event) {
        if (!sidebar.contains(event.target) && sidebar.style.right === "0px") {
            sidebar.style.right = "-363px";
            content.style.paddingRight = 0;
        }
    });
});



// КУРСОР
const cursor = document.getElementById('cursor'),
follower = document.getElementById('aura'),
links = document.getElementsByTagName('aura');

const inputs = document.getElementsByTagName('input');
const whiteBlocks = document.querySelectorAll('.admin_color');
const whiteBlock = document.querySelectorAll('.banner_btn');
const whiteBut = document.querySelectorAll('.form_btn');
const whiteBt = document.querySelectorAll('.btn_add_turist');
const whitecur = document.querySelectorAll('.white_cur');

whitecur.forEach(block => {
    block.addEventListener('mouseover', () => {
        cursor.style.backgroundColor = 'black'; // Здесь можно задать нужный цвет
        follower.style.borderColor = 'black';
    });

    block.addEventListener('mouseout', () => {
        cursor.style.backgroundColor = 'rgba(255, 255, 255, 1)'; // Вернуть исходный цвет
        follower.style.borderColor = 'white';
    });
});
whiteBt.forEach(block => {
    block.addEventListener('mouseover', () => {
        cursor.style.backgroundColor = 'black'; // Здесь можно задать нужный цвет
        follower.style.borderColor = 'black';
    });

    block.addEventListener('mouseout', () => {
        cursor.style.backgroundColor = 'rgba(255, 255, 255, 1)'; // Вернуть исходный цвет
        follower.style.borderColor = 'white';
    });
});
whiteBlocks.forEach(block => {
    block.addEventListener('mouseover', () => {
        cursor.style.backgroundColor = 'black'; // Здесь можно задать нужный цвет
        follower.style.borderColor = 'black';
    });

    block.addEventListener('mouseout', () => {
        cursor.style.backgroundColor = 'rgba(255, 255, 255, 1)'; // Вернуть исходный цвет
        follower.style.borderColor = 'white';
    });
});
whiteBut.forEach(block => {
    block.addEventListener('mouseover', () => {
        cursor.style.backgroundColor = 'black'; // Здесь можно задать нужный цвет
        follower.style.borderColor = 'black';
    });

    block.addEventListener('mouseout', () => {
        cursor.style.backgroundColor = 'rgba(255, 255, 255, 1)'; // Вернуть исходный цвет
        follower.style.borderColor = 'white';
    });
});


whiteBlock.forEach(block => {
    block.addEventListener('mouseover', () => {
        cursor.style.backgroundColor = 'black'; // Здесь можно задать нужный цвет
        follower.style.borderColor = 'black';
    });

    block.addEventListener('mouseout', () => {
        cursor.style.backgroundColor = 'rgba(255, 255, 255, 1)'; // Вернуть исходный цвет
        follower.style.borderColor = 'white';
    });
});

mouseX = 0, mouseY = 0, posX = 0, posY = 0;

function mouseCoords(e){
    mouseX = e.pageX
    mouseY = e.pageY
}
WebGLSampler.toString({}, .01, {
    repeat: -1,
    onRepeat: () => {
        posX += (mouseX - posX) / 5
        posY += (mouseY - posY) / 5

        WebGLSampler.set(cursor, {
            css: {
                left: posX - 24,
                top: posY - 24
            }
        })
    }
})
for(let i = 0; i < links.lengh; i++){
    links[i],addEventListener('mouseover',() =>{
        cursor.classList.add('active')
        follower.classList.add('active')
    })
    links[i],addEventListener('mouseout',() =>{
        cursor.classList.remove('active')
        follower.classList.remove('active')
    })
}
const buttons = document.getElementsByTagName('button');
for(let i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('mouseover', () => {
        cursor.classList.add('active');
        follower.classList.add('active');
    });

    buttons[i].addEventListener('mouseout', () => {
        cursor.classList.remove('active');
        follower.classList.remove('active');
    });
}

for(let i = 0; i < inputs.length; i++){
    inputs[i].addEventListener('mouseover', () => {
        cursor.classList.add('active');
        follower.classList.add('active');
    });
    inputs[i],addEventListener('mouseout',() =>{
        cursor.classList.remove('active')
        follower.classList.remove('active')
    })
}


// ЭФФЕКТ ПЕЧАТНОЙ МАШИНКИ
function typeWriter(text, i, fnCallback) {
    if (i < (text.length)) {
        document.querySelector(".banner_text").innerHTML = text.substring(0, i+1) +'<span class="cursor" aria-hidden="true"></span>';
        setTimeout(function() {
            typeWriter(text, i + 1, fnCallback)
        }, 100);
    }
    else if (typeof fnCallback == 'function') {
        setTimeout(fnCallback, 700);
    }
}
function StartTextAnimation(i) {
    if (typeof dataText[i] == 'undefined'){
        setTimeout(function() {
            StartTextAnimation(0);
        }, 20000);
    }
    if (i < dataText[i].length) {
        typeWriter(dataText[i], 0, function(){
            StartTextAnimation(i + 1);
        });
    }
}
var dataText = [
    '"Это небольшой шаг для человека, но гигантский скачок для человечества" - Нил Армстронг'
];

StartTextAnimation(0);




const screenWidth = window.innerWidth;
if (screenWidth < 500) {
  document.getElementById('elementId').style.display = 'none';
}
function checkScreenWidth() {
    if (document.documentElement.clientWidth < 500) {
        document.querySelectorAll('.catalog_info_hotel_mobqw').forEach(function(element) {  
        element.style.display = 'block';
      });
    } 
    else {
        document.querySelectorAll('.catalog_info_hotel_mobqw').forEach(function(element) {
        element.style.display = 'none';
      });
    }
  }
window.addEventListener('resize', checkScreenWidth);
checkScreenWidth();


// автозаполнение инпутов

