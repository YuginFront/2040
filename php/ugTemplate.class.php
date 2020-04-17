<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

class ugTemplate {
    //TODO: зробити запускалку всіх сторінок щоб відловити всі шаблони і змінні
    //TODO: зробити видачу початкового коду
    private $_TPLPATH,
        $_PAGETPLPATH,
        $_VARS,
        $_CURRVAR,
        $_TPLS,
        $_ERROR,
        $_LOGSPACE,
        $_LOGOFFSET,
        $_IF,
        $_FOR,
        $_DATAEXTENDS;
    public $_mode;

    public function __construct($_pathes,$mode=0,$_dataExtends)
    {
        $this->_ERROR = [
            'dir'=>[],
            'info'=>[],
            'tpl'=>[],
        ];
        $this->_IF = ['register'=>[]];
        $this->_FOR = ['register'=>[]];
        $this->_TPLS = [];
        $this->_LOGSPACE = '> ';
        $this->_LOGOFFSET = 0;

        // from config
        $this->_TPLPATH = $_pathes['tpl'];
        $this->_PAGETPLPATH = $_pathes['page'];
        $this->_BASEPATH = $_pathes['base'];

        $this->_mode = $mode;
//        $this->_VARS = $_data;
//        $this->_ext = $_ext;
        $this->_DATAEXTENDS = $_dataExtends;
    }

    public function setData($data){
        $this->_VARS = $data;
    }

    /**
     * Render template.
     *
     * Template data contain:
     *  array(
     *      'file' => array(
     *          'name'=>{string}, // compiled file name; default is real file name.
     *          'ext'=>{string}, // compiled file extension; default 'html'.
     *          'skip'=>{bool}, // skip compilation.
     *       )
     *      'layout' => {string} file name | array([{string} file name],...)
     *              // name of wrap template.
     *              // RECOMMEND begin file name with 'layout_ ... '.
     *              // wrap template must have 'render(_var('page',true),_var('data'));' for inserting current template.
     *
     *
     *      'RETURN' => {string} // use this for returning string instead rendering template.
     *
     *      OR
     *
     *      array(
     *          // Template data below.
     *          // Use $this->_var(key) for out.
     *
     *          // Including layout in to the page
     *          {string} layout name => array(
     *              array(
     *                  {string} variable key => {string | array} needle variable value,
     *              ),
     *              ...
     *          ),
     *
     *          'BEFORE' => {string} // out at the begin of template
     *          'AFTER' => {string} // out at the end of template
     *          {string} variable key => {string} variable value,
     *          {string} variable key => {boolean} variable value, // use for 'if' directive. RECOMMEND begin variable key with 'use_ ... '
     *          {string} variable key => array( // use for HTML tag attributes. RECOMMEND begin variable key with 'attr_ ... '
     *                                      {string} attribule name =>  {string} attribute value,
     *                                      ...
     *                                   )
     *          {string} variable key => // like param $data below,
     *                                   // use like param $data for 'render()'.
     *                                   // RECOMMEND begin variable key with 'data_ ... '.
     *      ),
     *      ... // template will be out so many times as count of arrays here.
     * )
     *
     * @param string $tplName
     * @param * $data - data for template.
     *  null - get data from $this->_VARS;
     *  array() - skip rendering;
     *  array(array(),...) - render template 'count inner arrays' times;
     *  array('RETURN'=>{string}) - return string instead template.
     * @param bool $out - return (true) || Default: echo (false).
     * @return null|string
     */
    public function render($tplName,$data=null,$out=false){ // TODO: TRY TO CREATE PRETTY ECHO
        $tpl = null;
        if(file_exists($this->_BASEPATH.'/'.$this->_TPLPATH.$tplName.'.php')){
            $tpl = $this->_BASEPATH.'/'.$this->_TPLPATH.$tplName.'.php';
        }elseif (file_exists($this->_BASEPATH.'/'.$this->_PAGETPLPATH.$tplName.'.php')){
            $tpl = $this->_BASEPATH.'/'.$this->_PAGETPLPATH.$tplName.'.php';
        }else{
            $this->setLog('error','NOT EXIST template: '.$tplName.'.php. Called in '.implode(' -> ',$this->_TPLS));
        }
        $this->_TPLS[] = $tplName;
        $this->setLog('tpl',implode(' / ',$this->_TPLS));
        $this->setLog('info','BEGIN rendering template: '.$tplName.'.php',1);
        if(is_null($data)){
            $this->setLog('info','Get default data for template: '.$tplName.'.php');
            $data = $this->getVars($tplName);
        }
        // TODO: make debug
//    if($tplName == 'list-reviews_item'){
//        debug(
//            '
//        $tplName: '.print_r($tplName,true).'
//        $data: '.print_r($data,true).'
//        tplPath: '.print_r($tpl,true).'
//        '
//        );
//        exit;
//    }

        if(isset($data['RETURN'])){
            $this->setLog('info','RETURN directive FOR template: '.$tplName.'.php');
            return $data['RETURN']."\n";
        }
        if(isset($data['file'])){
            unset($data['file']);
        }
        if(isset($data['layout']) && $data['layout']===''){
            unset($data['layout']);
        }

        if(!is_null($tpl)){
            if($out){
                $this->setLog('info','returning out for template: '.$tplName.'.php');
                ob_start();
            }
            if(is_null($data) || (is_string($data) && empty($data))){
                $this->setLog('info','RENDER with EMPTY DATA: '.$tplName.'.php');
                $this->setLog('dir','');
                $var = '';
                echo $this->m($tplName.' START'); //TODO: pretify echo (\n)
                include $tpl;
                echo $this->m($tplName.' END');
            }else{
                if(!empty($data['layout'])){
                    if(is_array($data['layout']) && count($data['layout'])>0){
                        $layout = $data['layout'][0];
                        unset($data['layout'][0]);
                        if(count($data['layout'])===0){
                            unset($data['layout']);
                        }else{
                            $layout_arr = array_values($data['layout']);
                        }
                    }else if(!empty($data['layout'])){
                        $layout = $data['layout'];
                    }
                    unset($data['layout']);
                }
                if (isset($layout) && file_exists($this->_BASEPATH . '/' . $this->_TPLPATH . $layout . '.php')) {
                    $this->setLog('info','USE layout directive FOR template: '.$tplName.'.php');
                    $layoutVars = $this->getVars($layout);
                    $vars = $layoutVars?$layoutVars:[[]];
                    unset($layoutVars);
                    for($i=0;$i<count($data);$i++){
                        $ind = isset($vars[$i])?$i:0;
//                        foreach($vars[$ind] as $layout_key=>$layout_val){
//                            if(isset($data[$i][$layout_key])){
//                                $vars[$ind][$layout_key] = $data[$i][$layout_key];
//                            }
//                        }
                        if(!empty($data[$i][$layout]) && count($data[$i][$layout])){
                            $vars[$i] = $data[$i][$layout][0];
                            array_splice($data[$i][$layout],0,1);
                        }else{
                            $vars[$i] = [];
                        }
//                        $vars[$i] = array_merge($vars[$ind],$data[$i]);
//                        $vars[$i] = $vars[$ind];
                        $vars[$i]['page'] = $tplName;
                        $vars[$i]['data'] = array($data[$i]);
                        if(isset($layout_arr) && count($layout_arr)){
                            $vars[$i]['data']['layout'] = $layout_arr;
                        }
                    }
                    $this->setLog('info','RELOAD template: '.$tplName.'.php by USE layout directive to: '.$layout.'.php',-1);
                    array_splice($this->_TPLS,-1,1);
                    unset($this->_CURRVAR[$tplName]);
                    $this->render($layout, $vars);
                    return '';
                } else {
                    if(is_array($data)){
                        $gv = $this->getVars($tplName);
                        if(!is_array($gv)){
                            $this->setLog('info','NO DEFAULT DATA array or wrong type FOR: '.$tplName.'.php');
                            $this->setLog('warn','NO DEFAULT DATA array or wrong type FOR: '.$tplName.'.php');
                        }
                        $var = [];
                        if(!count($data)){
                            $this->setLog('info','SKIP RENDERING because DATA IS EMPTY: '.$tplName.'.php');
                        }
                        for($i=0;$i<count($data);$i++){
                            $this->setLog('info','RENDERING with DATA loop (cycle '.($i+1).'): '.$tplName.'.php');
                            $this->setLog('dir','');
                            $ind = isset($gv[$i])?$i:0;
                            if(is_array($gv)){
                                $var = array_merge($gv[$ind],$data[$i]);
                            }else{
                                $var = $data[$i];
                            }
                            $this->_CURRVAR[$tplName] = $var;
                            echo $this->m($tplName.' START')."\n";
                            if(isset($var['BEFORE'])){
                                $this->setLog('var','BEFORE statement');
                                echo $var['BEFORE'];
                            }
                            include $tpl;
                            if(isset($var['AFTER'])){
                                $this->setLog('var','AFTER statement');
                                echo $var['AFTER'];
                            }
                            echo "\n".$this->m($tplName.' END')."\n";
                        }
                    }elseif (is_string($data)){
                        echo $data;
                    }
                }
            }
            if($out){
                $r = ob_get_contents();
                ob_end_clean();
                $this->setLog('info','FINISH rendering template: '.$tplName.'.php',-1);
                array_splice($this->_TPLS,-1,1);
                unset($this->_CURRVAR[$tplName]);
                return $r."\n";
            }
        }
        $this->setLog('info','FINISH rendering template: '.$tplName.'.php',-1);
        array_splice($this->_TPLS,-1,1);
        unset($this->_CURRVAR[$tplName]);
        return null;
    }

    /**
     * Set data from template.
     * @param array $data
     */
    public function setTplData($data){
        if(isset($this->_CURRVAR[$this->_TPLS[count($this->_TPLS)-1]])){
            $var = $this->_CURRVAR[$this->_TPLS[count($this->_TPLS)-1]];
        }else{
            $var = [];
        }
        if(!$this->_DATAEXTENDS){
            $this->_CURRVAR[$this->_TPLS[count($this->_TPLS)-1]] = $var;
        }else{
            $this->_CURRVAR[$this->_TPLS[count($this->_TPLS)-1]] = array_merge($data,$var);
        }
    }

    /**
     * Get data by key.
     * @param string $key - get data;
     *  if getting data is_boor or === 1|0 -> process registration 'if' directive usage for
     *  possible processing open&close 'if' directive through $this->_if();
     * @param bool $ret - echo(false) or return(true)
     * @return string|*
     *  string - for simple string data && $ret=true && associative array (mean attributes);
     *  null - for NOT EXIST VARIABLE || EMPTY DATA ARRAY || not exist registered data array for current tpl;
     *  array - if data is_array
     *  bool - if getting data is_bool or === 1|0
     */
    public function _var($key,$ret=false){
        $this->setLog('var',$key);
        if(array_key_exists($this->_TPLS[count($this->_TPLS)-1],$this->_CURRVAR)){
            $c = $this->_CURRVAR[$this->_TPLS[count($this->_TPLS)-1]];
            if(array_key_exists($key,$c)){
                if(is_null($c[$key])){
                    return null;
                }
                if(is_array($c[$key])){
                    if(empty($c[$key])){
                        return [];
                    }else{
                        // integrate _attr()
                        // is attribute or tpl?
                        $is_attr = false; // to sort out mix data types
                        $r = ''; // result for attributes
                        foreach($c[$key] as $skey=>$item){
                            /* TODO:
                            вирішувати по ключу чи значенню?
                            в data_ занчення [] а в attr_ значення string
                            */
                            if(is_string($skey)){
                                // attributes
                                $is_attr = true;
                                $r = ' ';
                                foreach ($c[$key] as $attr=>$value){
                                    if(!is_string($value)) continue;
                                    $r .= $attr.'="'.$value.'" ';
                                }
                            }else{
                                // template
                                if(!$is_attr){
                                    return $c[$key];
                                }else{
                                    $this->setLog('warn','MIXED TYPE of VARIABLE "'.$key.'"  for template: '.implode(' -> ',$this->_TPLS));
                                    $this->setLog('info','MIXED TYPE of VARIABLE "'.$key.'"  for template: '.$this->_TPLS[count($this->_TPLS)-1]);
                                }
                            }
                            // break;
                        }
                        if($is_attr){
                            if(!$ret){
                                echo $r;
                            }else{
                                return $r;
                            }
                        }else{
                            $this->setLog('warn','UNSPECIFIED TYPE of VARIABLE "'.$key.'"  for template: '.implode(' -> ',$this->_TPLS));
                            $this->setLog('info','UNSPECIFIED TYPE of VARIABLE "'.$key.'"  for template: '.$this->_TPLS[count($this->_TPLS)-1]);
                        }
                    }
                }
                if(is_string($c[$key])){
                    if(!$ret){
                        echo $c[$key];
                    }else{
                        return $c[$key];
                    }
                }
                if(is_bool($c[$key]) || (is_int($c[$key]) && ($c[$key] === 1 || $c[$key] === 0))){
                    $this->_IF['register'][] = $key;
                    $this->_IF[$key] = 2;//TODO: використання одного і того ж ключа
                    return $c[$key];
                }
            } else {
                $this->setLog('warn','NOT EXIST VARIABLE "'.$key.'"  for template: '.implode(' -> ',$this->_TPLS));
                $this->setLog('info','NOT EXIST VARIABLE "'.$key.'"  for template: '.$this->_TPLS[count($this->_TPLS)-1]);
                return null;
            }
        } else {
            $this->setLog('warn','EMPTY DATA ARRAY "'.$key.'"  for template: '.implode(' -> ',$this->_TPLS));
            $this->setLog('info','EMPTY DATA ARRAY "'.$key.'"  for template: '.$this->_TPLS[count($this->_TPLS)-1]);
            return null;
        }
    }

    public function variable($var,$key,$ret){ //TODO: depricated
        $this->setLog('warn', 'RUN DEPRECATED FUNCTION variable in: '.implode(' / ',$this->_TPLS).'; USE _var($key)');
        return $this->_var($key,$ret);
    }

    /**
     * INTEGRATED IN TO THE _var()
     *
     * Variable for HTML tags attributes.
     *
     * usage in data:
     * {$key} = array({attrname}=>[attrvalue],...)
     *
     * @param $key - param name
     * @param bool $ret - echo(false) or return(true)
     * @return string
     */
    public function _attr($key,$ret=false){
        $r = '';
        $var = $this->_var($key,true);
        if(is_array($var) && count($var)){
            foreach ($var as $attr=>$value){
                $r .= $attr.'="'.$value.'" ';
            }
        }
        if(!$ret){
            echo $r;
        }else{
            return $r;
        }
    }

    /**
     * @param * $m
     * @param bool $exit
     */
    public function debug($m,$exit=false){
        echo "\n".'<pre>'."\n";
        print_r($m);
        echo "\n".'</pre>'."\n";
        if($exit){
            exit;
        }
    }

    /**
     * Show saved processing logs.
     * @param array $op - set what types of logs need to show
     *  ['type'=>bool,...]
     * @return null - if $op is empty.
     */
    public function showLog($op){
        if(!isset($op)){
            $op = ['log'=>1,'dir'=>1,'warn'=>1,'error'=>1,'info'=>1,'tpl'=>1];
        }
        if(is_array($op) && !count($op)){
            return null;
        }
        if($this->_mode==1 && count($this->_ERROR)) {
            $js = '';
            foreach ($this->_ERROR as $i=>$log){
                if($i === 'dir' && (isset($op['dir']) && $op['dir']==1)){
                    $js .= 'console.log("----------\n",\'RENDER TREE (log key: '.$i.')\'); ';
                    $js .= 'console.dir('.json_encode($log).'); ';
                    $js .= 'console.log("----------\n"); ';
                }else if($i === 'info' && (isset($op['info']) && $op['info']==1)){
                    $js .= 'console.log("----------\n",\'INFO TREE (log key: '.$i.')\'); ';
                    $js .= 'console.dir('.json_encode($log).'); ';
                    $js .= 'console.log("----------\n"); ';
                }else if(($i === 'tpl' || $i === 'var') && (isset($op['tpl']) && $op['tpl']==1)) {
                    $js .= 'console.log("----------\n",\'TPLs INFO LIST (log key: tpl)\'); ';
                    $js .= 'console.dir('.json_encode($log).'); ';
                    $js .= 'console.log("----------\n"); ';
                }else{
                    foreach ($log as $type=>$m) {
                        if(isset($op[$type]) && $op[$type]==1){
                            $js.='console.'.$type.'(\''.$m.'\'); ';
                        }
                    }
                }
            }
            echo '<script>'.$js.'</script>';
        }
    }

    /**
     * echo start and end 'if' directive for generate templates
     * @param string $var - 'use_...' key
     */
    public function _if($var=''){ // TODO: треба зробити можливість виводу else (протилежного значення)
        if($this->_mode === 2 && count($this->_IF['register'])) {
            if (empty($var)) {
                $var = $this->_IF['register'][count($this->_IF['register']) - 1];
            }
            if (isset($this->_IF[$var])) {
                switch ($this->_IF[$var]) {
                    case 2:
                        //if open
                        $this->_IF[$var] = --$this->_IF[$var];
                        echo '< ? if(_var(\''.$var.'\')){ ? >'; // TODO: доробити варіанти виводів
                        break;
                    case 1:
                        //if close
                        unset($this->_IF[$var]);
                        unset($this->_IF['register'][count($this->_IF['register']) - 1]);
                        echo '< ? } ? >';
                        break;
                }
            }
        }
    }

    /**
     * Use for tpl block data
     * and
     * echo start and end 'for' directive for generate templates
     * @param array $var
     * TODO: нема виводу базового коду
     */
    public function _for($var){
        if($var){
            $lastTpl = $this->_TPLS[count($this->_TPLS)-1];
            $forTpl = $lastTpl.'_cycle';
            $this->_TPLS[] = $forTpl;
            $this->_CURRVAR[$forTpl] = array_merge($this->_CURRVAR[$lastTpl],$var);
        }else{
            unset($this->_CURRVAR[$this->_TPLS[count($this->_TPLS)-1]]);
            array_splice($this->_TPLS,-1,1);
        }
    }

    /**
     * ### PRIVATE
     */

    /**
     * Get data from $this->_VARS.
     * @param string $name - $_VARS key
     * @return null
     */
    private function getVars($name){
        return !empty($this->_VARS[$name]) ? $this->_VARS[$name] : null;
    }

    /**
     * HTML comment.
     * @param string $message
     * @return string
     */
    private function m($message){
        return $this->_mode?"<!-- $message -->":'';
    }

    private function setLog($type,$m='',$space=0){ //TODO: може зробити 'public' щоб можна було вести логи з шаблону???
        if($this->_mode==1) {
            if($space == 1){
                $this->_LOGOFFSET = $this->_LOGOFFSET+1;
                $this->_LOGSPACE .= '> ';
            }
            if($type === 'dir'){
                $this->_ERROR['dir'] = $this->setLogDir($this->_ERROR['dir'],$this->_TPLS);
            }else if($type === 'info') {
                $this->_ERROR['info'] = $this->setLogInfo($this->_ERROR['info'],$this->_TPLS,$m);
            }else if($type === 'tpl' || $type === 'var') {
                $this->setLogVars($m,$type);
            }else{
                $this->_ERROR[] = [$type => ($type=='error' || $type=='warn') ? $m : $this->_LOGSPACE.' '.$m];
            }
            if($space == -1){
                $this->_LOGOFFSET = $this->_LOGOFFSET-1;
                $this->_LOGSPACE = substr($this->_LOGSPACE, 0, -2);
            }
        }
    }

    private function setLogVars($key,$type){
        $curTpl = $this->_TPLS[count($this->_TPLS)-1];
        if(!array_key_exists($curTpl,$this->_ERROR['tpl'])){
            $this->_ERROR['tpl'][$curTpl] = array('variables'=>[],'rendered at'=>[]);
        }
        if($type == 'var'){
            if(!array_key_exists($key,$this->_ERROR['tpl'][$curTpl]['variables'])){
                $this->_ERROR['tpl'][$curTpl]['variables'][$key] = 1;
            }else{
                $this->_ERROR['tpl'][$curTpl]['variables'][$key] = $this->_ERROR['tpl'][$curTpl]['variables'][$key]+1;
            }
        }else if($type == 'tpl'){
            if(isset($this->_TPLS[count($this->_TPLS)-2])){
                $this->_ERROR['tpl'][$curTpl]['rendered at'][$this->_TPLS[count($this->_TPLS)-2]] = $key;
            }
        }

    }

    private function setLogInfo($globalArr,$CurrTmparr,$message){//TODO: може взяти останній з асоц масива? тоді при повторному виклику має вставиитись новий запис
        $firstTmpl = array_shift($CurrTmparr);
        if(count($CurrTmparr) == 0 || empty($globalArr)){
            $flag = false;
            for($i=count($globalArr)-1;$i>=0;$i--){
                foreach ($globalArr[$i] as $tpl=>$in){

                    if($tpl == $firstTmpl){
                        $globalArr[$i]['messages'][] = $message;
                        $flag = true;
                        break 2;
                    }
                }
            }
            if(!$flag){
                $globalArr[] = array($firstTmpl => array(),'messages'=>array($message));
            }
        }
        $lastArrElem = count($globalArr)-1;
        if(count($CurrTmparr)>0){
            $flag = false;
            for($i=count($globalArr)-1;$i>=0;$i--){
                foreach ($globalArr[$i] as $tpl=>$in){
                    if($tpl == $firstTmpl){
                        $globalArr[$i][$firstTmpl] = $this->setLogInfo($globalArr[$i][$firstTmpl],$CurrTmparr,$message);
                        $flag = true;
                        break 2;
                    }
                }
            }
            if(!$flag){
                $globalArr[$lastArrElem][$firstTmpl] = $this->setLogInfo($globalArr[$lastArrElem][$firstTmpl],$CurrTmparr,$message);
            }
        }
        return $globalArr;
    }

    private function setLogDir($globalArr,$CurrTmparr){
        $firstTmpl = array_shift($CurrTmparr);
        if(count($CurrTmparr) == 0 || empty($globalArr)){
            $globalArr[]= array($firstTmpl => array());
        }
        $lastArrElem = count($globalArr)-1;
        if(count($CurrTmparr)>0){
            $globalArr[$lastArrElem][$firstTmpl] = $this->setLogDir($globalArr[$lastArrElem][$firstTmpl],$CurrTmparr);
        }
        return $globalArr;
    }
}
