<?
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

//$startTime = microtime(true);
include_once 'php/ugTemplate.class.php';
include_once "php/config.php"; //TODO: мабуть треба розділити конфіги
include_once "php/tplData.php";

global $ugTemplates;
$ugTemplates = new ugTemplate([ //TODO: регулювати конфігом
    'tpl'=>'templates/',
    'page'=>'',
    'base'=>__DIR__,
],0,$_dataExtends);

/* TODO: for ?
 *
foreach(_var('for') as $data){
    _for($data);

...
    _var('key');
...

    _for();
}

 */

function render($tplName,$data=null,$out=false){
    global $ugTemplates;
    return $ugTemplates->render($tplName,$data,$out);
}
function _setData($data){
    global $ugTemplates;
    return $ugTemplates->setTplData($data);
}
function _var($key,$ret=false){
    global $ugTemplates;
    return $ugTemplates->_var($key,$ret);
}
// Integrated in to _var()
function _attr($key,$ret=false){
    global $ugTemplates;
    return $ugTemplates->_attr($key,$ret);
}
function _if($key=''){
    global $ugTemplates;
    $ugTemplates->_if($key);
}
function _for($var=null){
    global $ugTemplates;
    $ugTemplates->_for($var);
}
//Deprecated
function variable($var,$key,$ret=true){
    global $ugTemplates;
    return $ugTemplates->variable($var,$key,$ret);
}

$ugTemplates->setData($_VARS);
$ugTemplates->_mode = $_mode;

render($_FIRST_TPL);
$ugTemplates->showLog($_showLogs);

//$time = microtime(true) - $startTime;
?>
<!--<script id="ugTemplatesTimeLogScript">console.log('ugTemplates Time: <?/*=$time;*/?>s.');document.removeChild(document.getElementById('ugTemplatesTimeLogScript'));</script>-->