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


function ProductBlock(el) {
    this.el = el;
    this.selectDos = el.querySelector('.block-dosage--dosage .block-dosage__right-body');
    console.log(this.selectDos);

    this.selectDos.addEventListener('click', this.ProductBlock);
}
ProductBlock.prototype.getPackage = function(e) {
    e.preventDefault();
    alert('ddd');
}


window.addEventListener('DOMContentLoaded',function(){

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


    (function() {
        const listProductBlocks = document.querySelectorAll('.product');
        if (listProductBlocks.length === 0) return;
        const productBlock = new ProductBlock(listProductBlocks[0]);
    })();


    function setSexyValue(select) {
         const text = select.options[select.selectedIndex].innerHTML;
         select.previousElementSibling.innerHTML = text;
    }


});


window.addEventListener('resize',function(ev){
    let t = G_device.type;
    setViewport();
    deviceType();
    if(G_device.type !== t){
        dbx('',true);
    }
});

document.addEventListener('click',function(ev){
    if(!ev.target.classList.contains('js-dbx') && !ev.target.classList.contains('js-classSwitch')){
        dbx('.active',true);
    }
});

function product_item(URL){
    window.location.href = URL;
}
