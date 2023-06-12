//sidebar
const feed = document.querySelectorAll('.feed');
const mainSearch = document.querySelector('#search1');

const menuItems = document.querySelectorAll('.menu-item');

const msgNotify = document.querySelector('#message-notify');
const messages = document.querySelector('.messages');
const message = document.querySelectorAll('.msg');
const msgSearch = document.querySelector('#msg-search');

const theme = document.querySelector('#theme');
const themeMod = document.querySelector('.custom-theme');
const fontSz = document.querySelectorAll('.choose-size span');
const palet = document.querySelectorAll('.choose-color span');
const bg1 = document.querySelector('.bg1');
const bg2 = document.querySelector('.bg2');
const bg3 = document.querySelector('.bg3');

var root = document.querySelector(':root');

//remove all class from mi
const changeActive = () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
} 

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        changeActive();
        item.classList.add('active');
        if(item.id == 'notify'){
            document.querySelector('.min').style.display = 'block';
            document.querySelector('.notify-pop').style.display = 'block';
            document.querySelector('.notify-count').style.display = 'none';
        }else{
            document.querySelector('.notify-pop').style.display = 'none';
            document.querySelector('.min').style.display = 'none';
        }
    })
})
document.querySelector('.min').addEventListener('click', () =>{
    document.querySelector('.notify-pop').style.display = 'none';
    document.querySelector('.min').style.display = 'none';
})

//main search
const searchMain = () => {
    const inp = mainSearch.value.toLowerCase();
    feed.forEach(capt => {
        let disp = capt.querySelector('.capt').textContent.toLowerCase();
        if(disp.indexOf(inp) != -1){
            capt.style.display = 'block';
        }else{
            capt.style.display = 'none';
        }
    })
}
mainSearch.addEventListener('keyup', searchMain);

//message search
const searchMsg = () => {
    const val = msgSearch.value.toLowerCase();
    message.forEach(user => {
        let name = user.querySelector('h5').textContent.toLowerCase();
        if(name.indexOf(val) != -1){
            user.style.display = 'flex';
        }else{
            user.style.display = 'none';
        }
    })
}
msgSearch.addEventListener('keyup', searchMsg);

//messages highlight
msgNotify.addEventListener('click', () => {
    messages.style.boxShadow = '0 0 1rem var(--primary)';
    setTimeout(() => {
        messages.style.boxShadow = 'none';
    }, 2000);
    document.querySelector('.msg-count').style.display = 'none';
})

//theme
theme.addEventListener('click', () => {
    themeMod.style.display = 'grid';
});
themeMod.addEventListener('click', (e) =>{
    if(e.target.classList.contains('close')){
        themeMod.style.display = 'none';
        changeActive();
    }
})
//font

const removeSelect = () => {
    fontSz.forEach(size => {
        size.classList.remove('active');
    })
}
fontSz.forEach(size => {
    let fontSz;
    size.addEventListener('click', () => {
        removeSelect();
        size.classList.toggle('active');
        if(size.classList.contains('font-size-1')){
            fontSz = '10px';
        }else if(size.classList.contains('font-size-2')){
            fontSz = '13px';
        }else if(size.classList.contains('font-size-3')){
            fontSz = '16px';
        }else if(size.classList.contains('font-size-4')){
            fontSz = '19px';
            root.style.setProperty('--str', '-25rem');
        }else if(size.classList.contains('font-size-5')){
            fontSz = '22px';
            root.style.setProperty('--stl', '-1rem');
            root.style.setProperty('--str', '-30rem');
        }
        document.querySelector('html').style.fontSize = fontSz;
    })
})

//color
palet.forEach(color => {
    color.addEventListener('click', () => {
        palet.forEach(color => {
            color.classList.remove('active');})
        let primaryHue;
        if (color.classList.contains('color-1')) {
            primaryHue = 252;
        } else if (color.classList.contains('color-2')){
            primaryHue = 50;
        } else if (color.classList.contains('color-3')){
            primaryHue = 352;
        } else if (color.classList.contains('color-4')){
            primaryHue = 152;
        } else if (color.classList.contains('color-5')){
            primaryHue = 202;
        }
        color.classList.add('active')
        root.style.setProperty('--phue', primaryHue);
    })
})

//bg
let lcl;
let wcl;
let dcl;

const changeBG = () => {
    root.style.setProperty('--lcl', lcl)
    root.style.setProperty('--wcl', wcl)
    root.style.setProperty('--dcl', dcl)
} ;

bg1.addEventListener('click', () => {
    dcl = '17%';
    wcl = '100%';
    lcl = '95%';

    bg1.classList.add('active');
    bg2.classList.remove('active');
    bg3.classList.remove('active');
    changeBG();
})

bg2.addEventListener('click', () => {
    dcl = '95%';
    wcl = '20%';
    lcl = '15%';

    bg1.classList.remove('active');
    bg2.classList.add('active');
    bg3.classList.remove('active');
    changeBG();
})

bg3.addEventListener('click', () => {
    dcl = '95%';
    wcl = '10%';
    lcl = '0%';

    bg1.classList.remove('active');
    bg2.classList.remove('active');
    bg3.classList.add('active');
    changeBG();
})
