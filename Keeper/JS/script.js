/*
*- - - - - - - - -- - - - - - -  @variables - - - - - - - - - - - --  - - -- - -
*/
let darkMode = document.querySelector('.dark-mode');
let lightMode = document.querySelector('.light-mode');
let listMode = document.querySelector('.list-mode');
let tableMode = document.querySelector('.table-mode');
let keeper = document.querySelector('.keeper');
let inputs = document.querySelectorAll('.keeper input');
let col_lg_4 = document.querySelectorAll('.col-lg-4');
let selectColor = document.querySelector('.colors');
/*
* - - - - - - - - - - - -  - @event_listeners - - - - - - - - - - - - - -
*/
darkMode.addEventListener('click', ()=>{
    changeMode(darkMode, lightMode)
    document.body.style.background = '#1C1B20';
    keeper.classList.add('mirror');
    inputs.forEach(el=>{
        el.classList.add('mir')
    })
})
//
lightMode.addEventListener('click', ()=>{
    changeMode(lightMode, darkMode)
    document.body.style.background = '#fff';
    keeper.classList.remove('mirror');
    inputs.forEach(el=>{
        el.classList.remove('mir')
    })
})
//
listMode.addEventListener('click', ()=>{
    changeMode(listMode, tableMode)
    for(let i = 0; i<col_lg_4.length; i++){
        col_lg_4[i].style.margin = '15px 0';
        col_lg_4[i].classList.remove('col-lg-4')
    }
})
//
tableMode.addEventListener('click', ()=>{
    changeMode(tableMode, listMode)
    for(let i = 0; i<col_lg_4.length; i++){
        col_lg_4[i].style.margin = '7px 0';
        col_lg_4[i].classList.add('col-lg-4')
    }
})
//
selectColor.addEventListener('change', (e)=>{
    keeper.style.backgroundColor = e.target.value;
    inputs.forEach(el=>{
        el.style.backgroundColor = e.target.value;
    })
})
/*
* @functions
*/
const changeMode = (element1, element2)=>{
    element1.style.display = 'none'
    element2.style.display = 'inline'
}
