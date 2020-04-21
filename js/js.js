
/**
 * Offset
 */
function offset(el) {
    let rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}
/**
 * This function was moved to head and will be replaced by this fn.
 *
 * Check exist of element and filling of it (optional)
 * @param e {*} element for check
 * @param t {Array} ['empty'] for check empty Array or string
 * @returns {boolean} returns '0' if e unbelievable
 */
function isset(e,t){
    let type = typeof e;
    if(type !== 'undefined' && e !== null){
        if(typeof t === 'object' && t.length>0){
            for(let i=0;i<t.length;i++){
                if(e.length<=0
                    && t[i] === 'empty'
                    && ((type === 'string')
                        || (type === 'object'))){
                    return false;
                }
            }
        }
        return true;
    }else{
        return false;
    }
    // return 0;
}


/**
 * Switch class in element and relative blocks.
 * @code
 * @data-sw-closest - Relative blocks will taken from 'data-sw-closest' by css selector for 'querySelectAll'
 * use '=' like separator for select in closest.
 * @data-sw-blocks - Relative blocks will taken from 'data-sw-blocks' by css selector for 'querySelectAll'
 * @data-sw-next - switch next block. May be empty.
 * @data-sw-cllist - custom classNames for switching when fired
 * @data-sw-onlyrels - switch only relatives
 * @data-sw-close - switch off class
 *
 * @param {object} e - current element
 * @param {string} c - [active]. class for switch. use separator ',' for several classes. WITHOUT DOT.
 * @param {boolean} cl - [false]. switch off class if 'true'
 * @return {number}
 * @errorList:
 *  -1 - 'e' not set
 *  0 - self only set
 *  1 - self and relative set
 *  TODO: need only 'on' action
 */
function classSwitcher(e,c,cl){
    if(!e){
        return -1;
    }
    let ret = 0;
    cl = cl || (e.dataset['swClose'] && e.dataset['swClose'] === 'true') || false;
    let cls = (c && c.split(',')) || (e.dataset['swCllist'] && e.dataset['swCllist'].split(',')) || ['active'];
    let els = [];
    // get relative blocks
    let bx = [];
    if(e.dataset){
        if(e.dataset['swNext']){
            bx.push(e.nextElementSibling);
        }
        if(e.dataset['swBlocks'] && e.dataset['swBlocks'] !== ''){
            bx.push(...document.querySelectorAll(e.dataset['swBlocks']));
        }
        if(e.dataset['swClosest'] && e.dataset['swClosest'] !== ''){
            bx.push(...getByCSSSelector(e,e.dataset['swClosest']));
        }
    }
    !bx.length && (bx = null);
    if(!e.dataset['swOnlyrels']){
        els.push(e);
    }
    bx && bx.length && (ret=1) && els.push(...bx);
    // switch class
    els.forEach(elItem => {
        // check to relative block`s custom className to switch
        // let clsList = (elItem.dataset && elItem.dataset['swCllist'] && elItem.dataset['swCllist'].split(',')) || cls;
        // clsList.forEach(cItem => {
        cls.forEach(cItem => {
            elItem.classList[(cl || elItem.classList.contains(cItem)) ? 'remove' : 'add'](cItem);
        });
    });
    return ret;
}
/**
 * Scroll to top of element 'e'
 * @param e {object} [dom element]
 * @param shift {number}
 * @param {number} s = [time in ms]
 * @param {object} container = [what to scroll]
 * @dependency [jQuery]
 */
function gotoElement(e,shift,s,container){
    s===0 || s || (s = 1100);
    let destination = 0;
    let scrEl = (container && $(container)) || $('body,html');
    if(!isset(shift)){
        shift = 0;
    }
    if(isset(e)){
        destination = $(e).offset().top-shift;
    }
    scrEl.animate({scrollTop: destination},s);
    return !0;
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

// function setSexyValue(select) {
// const text = (select.name === 'language')
//     ? select.value
//     : select.options[select.selectedIndex].innerHTML;
// select.previousElementSibling.innerHTML = text;
// }

function setSexyValue(select) {
const text = select.options[select.selectedIndex].innerHTML;
select.previousElementSibling.innerHTML = text;
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
/**
 * Event handlers
 * @param container
 */
function listeners(container){

    return container;
}

document.addEventListener('readystatechange',function(){
    /**
     * loading
     * The document is still loading.
     *
     * interactive
     * The document has finished loading and the document has been parsed but sub-resources such as images, stylesheets and frames are still loading.
     *
     * complete
     * The document and all sub-resources have finished loading. The state indicates that the load event is about to fire.
     */
    if (document.readyState === "loading") {

    }
    if (document.readyState === "interactive") {

    }
    if (document.readyState === "complete") {

    }
});
window.addEventListener('resize',function(ev){
    let t = G_device.type;
    setViewport();
    deviceType();
    if(G_device.type !== t){

    }
});
