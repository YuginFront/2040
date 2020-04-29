/**
 * switch class in block or several blocks linked by data-bdx-name
 * @param {object} el
 * @param {string} c = [class to switch]
 * @param {bool} close = [just switch off]
 *
 * data-dbx-name - [css selector[,css selector[,css selector[,...]]] | next]
 * data-dbx-close - [true | false]
 */

function classSwitcher(el, c, close) {
    if(!el)
        return null;

    c = c || 'active';
    close = typeof close === 'boolean'? close : (el.dataset.dbxClose==="true");

    var bx = [];
    if(el.dataset.dbxName){
        if(el.dataset.dbxName !== 'next'){
            bx = document.querySelectorAll(el.dataset.dbxName);
        }else{
            bx.push(el.nextElementSibling);
        }
    }
    // switch in linked box
    for(var i=0; i<bx.length;i++){
        if(bx[i]!=el){
            if(close){
                bx[i].classList.remove(c);
            }else{
                bx[i].classList.toggle(c);
            }
        }
    }
    // switch in element
    if(close){
        el.classList.remove(c);
    }else{
        el.classList.toggle(c);
    }
    return 1;
}

/**
 * @param {string} a = [class]
 * @param {bool} c = [close]
 */

function dbx(a,c){
    a = a || '';
    c = c || null;
    var dropBoxes = document.querySelectorAll('.js-classSwitch'+a);
    for(var i=0;i<dropBoxes.length;i++){
        classSwitcher(dropBoxes[i],null,c);
    }
}



/**
 * device sets
 */

function setViewport(){
    G_device.viewportWidth = (function (win, docElem) {
        var mM = win['matchMedia'] || win['msMatchMedia']
            , client = docElem['clientWidth']
            , inner = win['innerWidth']
        return mM && client < inner && true === mM('(min-width:' + inner + 'px)')['matches']
            ? function () { return win['innerWidth'] }
            : function () { return docElem['clientWidth'] }
    }(window, document.documentElement));
    G_device.viewportHeight = (function (win, docElem) {
        var mM = win['matchMedia'] || win['msMatchMedia']
            , client = docElem['clientHeight']
            , inner = win['innerHeight']
        return mM && client < inner && true === mM('(min-height:' + inner + 'px)')['matches']
            ? function () { return win['innerHeight'] }
            : function () { return docElem['clientHeight'] }
    }(window, document.documentElement));

    G_device.width = G_device.viewportWidth(); //window.screen.width;
    G_device.height = G_device.viewportHeight(); //window.screen.height;
}

function deviceType(){
    /** x-small */
    if((G_device.width<500)) {
        G_device.type = 0;
        G_device.type_s = 'xs';
        /** small */
    }else if(G_device.width<768){
        G_device.type = 10;
        G_device.type_s = 'sm';
        /** middle */
    }else if((G_device.width>=768) && (G_device.width<=1024)){
        G_device.type = 20;
        G_device.type_s = 'md';

        /** large */
    }else if((G_device.width>=1025) && (G_device.width<1260)){
        G_device.type = 30;
        G_device.type_s = 'lg';

        /** x-large */
    }else if(G_device.width>=1260){
        G_device.type = 40;
        G_device.type_s = 'xl';

        /** x-small */
    }else{
        G_device.type = 0;
        G_device.type_s = 'xs';
    }
}
/**
 * Global code
 */
let G_device = {};
setViewport();
deviceType();


function ProductBlock(el, ctrlBlock) {
    this.el = el;
    this.blockPack = el.querySelectorAll('.block-dosage--package');
    if (this.blockPack.length === 0) return;
    
    this.selectDos = el.querySelector('.block-dosage--dosage .block-dosage__right-body');
    this.clss = ['product'];

    this.linksFullDesc = [].slice.apply(el.querySelectorAll('.product__toggle-desc'));

    this.linksFullDesc.forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            this.previousElementSibling.style.display = "inline-block";
            this.style.display = "none";
        });
    });
}

function Observable() {
    this.observers = [];
}
Observable.prototype.sendMessage = function(msg) {
    this.observers.forEach(function(item) {
        item.notify(msg);
    });
}
Observable.prototype.addObserver = function(observer) {
    this.observers.push(observer);
}

function Observer(behavior) {
    this.behavior = behavior;
}
Observer.prototype.notify = function(msg) {
    this.behavior(msg);
}

// function scrollTo(element,to,duration) {

//     var start = element.scrollTop,
//         change = to - start,
//         currentTime = 0,
//         increment = 20;
        
//     var animateScroll = function(){      
//         currentTime += increment;
//         element.scrollTop = element.scrollTop - currentTime;
        
//         if(currentTime < duration && element.scrollTop !== 0) {
//             setTimeout(animateScroll, increment);
//         }
//     }; 
//     animateScroll();
// }

function scrollPageTo(el){
     $('html, body').animate({scrollTop: $(el).offset().top - $('.site-header').height()}, 1000);
}

var resizeTimer, productTitle = document.querySelector('.product__title');


window.addEventListener('DOMContentLoaded',function(){


    if (productTitle && (G_device.width < 1025)){
         scrollPageTo(productTitle);
    }

    /**
     * classSwitchers
     */
    var dropBoxes = document.querySelectorAll('.js-classSwitch');
    for(var i=0;i<dropBoxes.length;i++){
        dropBoxes[i].addEventListener('click',function (event){
            event.preventDefault();
            event.stopPropagation();
            classSwitcher(this,null);
        });
    }

    dropBoxes = document.querySelectorAll('.js-dbx');
    for(var i=0;i<dropBoxes.length;i++){
        dropBoxes[i].addEventListener('click',function (event){
            event.stopPropagation();
        });
    }


    (function () {
        const listSelect = [].slice.apply(document.querySelectorAll('.custom-select select'));
        listSelect.forEach((item) => {
            setSexyValue(item);

            item.addEventListener('change', function () {
                setSexyValue(this);
            })
        });
    })();


    function setSexyValue(select) {
         const text = select.options[select.selectedIndex].innerHTML;
         select.previousElementSibling.innerHTML = text;
    }


    (function() {
        const listProductBlocks = document.querySelectorAll('.product');
        const ctrlBlock = document.querySelector('.control-order');
        if (listProductBlocks.length === 0) return;
        new ProductBlock(listProductBlocks[0], ctrlBlock);
    })();

    const dosageObs = new Observer(function(state) {
        const controlDosage = document.querySelectorAll('.product');
        switch (parseInt(state)) {
            case 0:
                controlDosage[0].classList.remove('product--stage-package');
                controlDosage[0].querySelector('.block-dosage--package')
                    .classList
                    .remove('block-dosage--active');
                break;
            case 1:
                controlDosage[0].classList.add('product--stage-package');
                controlDosage[0].querySelector('.block-dosage--package')
                    .classList
                    .add('block-dosage--active');
                break;
        }
    });

    const controlOrderObs = new Observer(function(state) {
        const controlOrder = [].slice.apply(document.querySelectorAll('.control-order button'));
        state = parseInt(state);
        if (controlOrder.length > 0) {
            controlOrder.forEach(function(item, idx) {
                if (idx < state) {
                    item.classList.remove('active');
                    item.classList.add('passed');
                } else if (idx === state) {
                    item.classList.remove('passed');
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                    item.classList.remove('passed');
                }
            });
        }
    });

    const observable = new Observable();
    observable.addObserver(dosageObs);
    observable.addObserver(controlOrderObs);

    (function() {
        const selectDos = document.querySelectorAll('.block-dosage--dosage .block-dosage__right-body');
        const elControlOrder = document.querySelectorAll('.control-order');

        if (selectDos.length > 0) {
            selectDos[0].addEventListener('click', function(e) {
                e.preventDefault();
                observable.sendMessage(1);
            });
        }

        if (elControlOrder.length > 0) {
            elControlOrder[0].addEventListener('click', function(e) {
                observable.sendMessage(e.target.closest('.btn-inv').getAttribute('data-level'));
            });
        }
    })();
});

window.addEventListener('resize',function(ev){
    let t = G_device.type;
    setViewport();
    deviceType();
    if(G_device.type !== t){
        dbx('',true);
    }

      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {

        if (productTitle && (G_device.width < 1025)){
             scrollPageTo(productTitle);
        }
                
      }, 250);

});

document.addEventListener('click',function(ev){
    if(!ev.target.classList.contains('js-dbx') && !ev.target.classList.contains('js-classSwitch')){
        dbx('.active',true);
    }
});

function product_item(URL){
    window.location.href = URL;
}
