


const OBG = [
    {
        id: 1,
        block: 1,
        floor: 1,
        numKv: 1,
        image: '',
        imageLocation: '',
        type: 1,
        m2: 12.2,
        room: 3,
        price: 4500,
        bron: false,
        sold: false,
        freed:false,  
    },
    {
        id: 2,
        block: 1,
        floor: 1,
        numKv: 2,
        image: '',
        imageLocation: '',
        type: 1,
        m2: 'lol',
        room: 3,
        price: 4500,
        bron: false,
        sold: false,
        freed:false,  
    },
    
]
const obg2=[
    peculiarities={
        level: 1,
        CU: 2,
        lojoe: true,
        balcon: true,
        sanzal: true
    },
    peculiarities={
        level: 1,
        CU: 2,
        lojoe: true,
        balcon: true,
        sanzal: true
    },
]




// выбор этажа (добавление и удаление класслв (актв))./////////
let parent = document.querySelector('.viborKv__right__items');
let menuItem = parent.querySelectorAll('.viborKv__right__item');
let vibor__block = document.querySelector('.vibor__block_svg');
let vibor_block_path = vibor__block.querySelectorAll('.vibor_block__path');
let vibor_kv__svg = document.querySelector('.vibor_kv__svg');
let vibor_kv__path = vibor_kv__svg.querySelectorAll('.vibor_kv__path');


parent.addEventListener('click', (event) => {
    let target = event.target;
    if (target.classList.contains('viborKv__right__item')) {
        for (let i = 0; i < menuItem.length; i++) {
            menuItem[i].classList.remove('viborKv__right__item-active');
        }
        target.classList.add('viborKv__right__item-active');
    }

});


vibor__block.addEventListener('click', event => {
    let target = event.target;
    if (target.classList.contains('vibor_block__path')) {
        for (let i = 0; i < vibor_block_path.length; i++) {
            vibor_block_path[i].classList.remove('vibor_block__path-active');
        }
        target.classList.add('vibor_block__path-active');
    }
})


vibor_kv__svg.addEventListener('click', event => {
    let target = event.target;
    if (target.classList.contains('vibor_kv__path')) {
        for (let i = 0; i < vibor_kv__path.length; i++) {
            vibor_kv__path[i].classList.remove('vibor_kv__path-active');
        }
        target.classList.add('vibor_kv__path-active');
    }
})



let vBlock = 1;
let vFloor = 1;
let vKvartira = 1;
function app(){

    const PlanRenderPadval = `
    <div class="vibor_kv__content__render">
    <img src="./images/plan_kv_podval.png" alt="">
        <svg class="vibor_kv__svg" width="930" height="630" viewBox="0 0 930 630" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="vibor_kv__path" data-room="1" d="M528.259 10.4067H868.564V217.632H595.749V126.852H528.259V10.4067Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="2" d="M672.209 320.267L734.472 288.5V227.11H928.864V414.849H878.008V619.697H672.209V320.267Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="3" d="M469.456 319.259H670.978V606.807H647.213V622.491H567.841H469.456V319.259Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="4" d="M267 395H362V320H460V619.5H366.5V605.5H267V395Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="5" d="M10 319H352V377.5L325 377V386.5H258V605H160V619.48H61.5V406.5H10V319Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="6" d="M59.9051 9H377V219.077H267.13V310.332H8V213.848H59.9051V9Z" fill="#1450A9" fill-opacity="0.69"/>
        </svg>
    </div>      
    `
    const PlanRender1 = `
    <div class="vibor_kv__content__render">
    <img src="./images/plan_kv_1.png" alt="">
        <svg class="vibor_kv__svg" width="930" height="630" viewBox="0 0 930 630" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="vibor_kv__path" data-room="1" d="M528.259 10.4067H868.564V217.632H595.749V126.852H528.259V10.4067Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="2" d="M672.209 320.267L734.472 288.5V227.11H928.864V414.849H878.008V619.697H672.209V320.267Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="3" d="M469.456 319.259H670.978V606.807H647.213V622.491H567.841H469.456V319.259Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="4" d="M267 395H362V320H460V619.5H366.5V605.5H267V395Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="5" d="M10 319H352V377.5L325 377V386.5H258V605H160V619.48H61.5V406.5H10V319Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="6" d="M59.9051 9H377V219.077H267.13V310.332H8V213.848H59.9051V9Z" fill="#1450A9" fill-opacity="0.69"/>
        </svg>
    </div>      
    `
    const PlanRender13 = `
    <div class="vibor_kv__content__render">
        <img src="./images/plan_kv_13.png" alt="">
        <svg class="vibor_kv__svg" width="930" height="630" viewBox="0 0 930 630" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="vibor_kv__path" data-room="1" d="M528.259 10.4067H868.564V217.632H595.749V126.852H528.259V10.4067Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="2" d="M672.209 320.267L734.472 288.5V227.11H928.864V414.849H878.008V619.697H672.209V320.267Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="3" d="M469.456 319.259H670.978V606.807H647.213V622.491H567.841H469.456V319.259Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="4" d="M267 395H362V320H460V619.5H366.5V605.5H267V395Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="5" d="M10 319H352V377.5L325 377V386.5H258V605H160V619.48H61.5V406.5H10V319Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="6" d="M59.9051 9H377V219.077H267.13V310.332H8V213.848H59.9051V9Z" fill="#1450A9" fill-opacity="0.69"/>
        </svg>
    </div>      
    `
    const PlanRender2_12 = `
    <div class="vibor_kv__content__render">
        <img src="./images/plan_kv_2-12.png" alt="">
        <svg class="vibor_kv__svg" width="930" height="630" viewBox="0 0 930 630" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="vibor_kv__path" data-room="1" d="M528.259 10.4067H868.564V217.632H595.749V126.852H528.259V10.4067Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="2" d="M672.209 320.267L734.472 288.5V227.11H928.864V414.849H878.008V619.697H672.209V320.267Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="3" d="M469.456 319.259H670.978V606.807H647.213V622.491H567.841H469.456V319.259Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="4" d="M267 395H362V320H460V619.5H366.5V605.5H267V395Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="5" d="M10 319H352V377.5L325 377V386.5H258V605H160V619.48H61.5V406.5H10V319Z" fill="#1450A9" fill-opacity="0.69"/>
            <path class="vibor_kv__path" data-room="6" d="M59.9051 9H377V219.077H267.13V310.332H8V213.848H59.9051V9Z" fill="#1450A9" fill-opacity="0.69"/>
        </svg>
    </div>      
    `

    window.addEventListener('click', e => {
        let target = e.target;
    
        // выбор блока
        if (target.hasAttribute('data-vybor_block')) {
            vBlock = target.getAttribute('data-vybor_block')
            document.querySelector('.vibor__kv__id__p').innerHTML = 'Блок №' + ' ' + vBlock;
            document.querySelector('.vibor_info__right_nameBlock_span').innerHTML = vBlock;
            window.scrollBy(0, 1000);

            if (vBlock == 13) {
                document.querySelector('.vibor_kv__content__render').remove();
                document.querySelector('.vibor_kv__content__left').insertAdjacentHTML("beforeend", PlanRender13);
            }
            else {
                document.querySelector('.vibor_kv__content__render').remove();
                document.querySelector('.vibor_kv__content__left').insertAdjacentHTML("beforeend", PlanRender2_12);
            }
        }
        // выбор этажа
        if (target.hasAttribute('data-vibor-etaj')) {
            vFloor = target.getAttribute('data-vibor-etaj');
            document.querySelector('.vibor_info__right_nameEtaj__span').innerHTML = ' ' + vFloor;

            if(vFloor == 1){
                document.querySelector('.vibor_kv__content__render').remove();
                document.querySelector('.vibor_kv__content__left').insertAdjacentHTML("beforeend", PlanRender1);
            }
            else if(vFloor == 'Подвал'){
                document.querySelector('.vibor_kv__content__render').remove();
                document.querySelector('.vibor_kv__content__left').insertAdjacentHTML("beforeend", PlanRenderPadval);
            }
            else{
                document.querySelector('.vibor_kv__content__render').remove();
                document.querySelector('.vibor_kv__content__left').insertAdjacentHTML("beforeend", PlanRender2_12);
            }
        }
        // выбор квартиры
        if (target.hasAttribute('data-room')) {
            vKvartira = e.target.getAttribute('data-room');
            let res1 = []
            let res2 = []
            let resInfo = []
            // подбор по блоку 
            for (let db of OBG){ 
                if(db.block == vBlock) {
                    res1.push(db)
                }
            }
            // подбор по Этажу 
            for (let db of res1){ 
                if(db.floor == vFloor) {
                    res2.push(db)
                }
            }
            // подбор по Квартире 
            for (let db of res2){ 
                if(db.numKv == vKvartira) {
                      resInfo.push(db)
                }
            }
            if(resInfo.length > 1){
                alert("ошибка! обнаружена " + resInfo.length  + " одинаковых Квартир")
            }
    
            // Ренлеринг Конечной информации
            const renderInfo = `
            <div class="vibor__render__block">
                <div class="vibor_info__right_center">
                    <div class="vibor_info__right_center__item vibor_info__right_center__item_1">
                        <p class="vibor_info__center__info">Площадь:</p>
                        <p class="vibor_info__center__otvet">${resInfo[0].m2}</p>
                    </div>
                    <div class="vibor_info__right_center__item vibor_info__right_center__item_2">
                        <p class="vibor_info__center__info">Комнаты:</p>
                        <p class="vibor_info__center__otvet">3</p>
                    </div>
                    <div class="vibor_info__right_center__item vibor_info__right_center__item_3">
                        <p class="vibor_info__center__info">Статус:</p>
                        <p class="vibor_info__center__otvet">Свободно</p>
                    </div>
                    <div class="vibor_info__right_center__item vibor_info__right_center__item_4">
                        <p class="vibor_info__center__info">Рассрочка:</p>
                        <p class="vibor_info__center__otvet">возможна</p>
                    </div>
                    <div class="vibor_info__right_center__item vibor_info__right_center__item_5">
                        <p class="vibor_info__center__info">Цена за м2:</p>
                        <p class="vibor_info__center__otvet">45 000 </p>
                    </div>
                    <div class="vibor_info__right_center__item vibor_info__right_center__item_6">
                        <p class="vibor_info__center__info">Цена:</p>
                        <p class="vibor_info__center__otvet">4 500 000 </p>
                    </div>
                </div>
                <div class="vibor_info__right_bar">
                    <div class="vibor_info__right_bar__header">
                        <p>Особенности</p>
                        ${obg2[vKvartira-1].CU}
                    </div>
                    <div class="vibor_info__right_bar__items">
                        <div class="vibor_info__right_bar__item"><p>Лоджия</p></div>
                    </div>
                </div>
            </div>
            `
            document.querySelector('.vibor__render__block').remove();
            document.querySelector('.vibor__render__content').insertAdjacentHTML("beforeend", renderInfo);
    }})
}

app()

