<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

/**
 * PRE TEMPLATE
 */
/**
 * @param string $type - type kind of templates
 * [full|] TODO: навести лад і теж в клас
 */
function createTpls($type='page'){ // TODO: optimize this function
    global $ugTemplates,$_VARS,$_FIRST_TPL;
    $_TPLPATH  = 'templates/';
    $_PAGETPLPATH = '';
    $_BASEPATH = __DIR__."/..";
    $path_tpl = $_BASEPATH.'/html/'.$type.'/';
    switch ($type){
        case 'full_page':
            $ugTemplates->debug('tpl creation. mode: '.$type);
            mkdir($path_tpl, 0777, true);
            $dirs = scandir($_BASEPATH);
            foreach ($dirs as $dir) {
                if($dir == '.' || $dir == '..' || !preg_match('/page\-(.*)\.php/',$dir,$page))
                    continue;

                $ugTemplates->debug('start '.$dir);
                $_VARS[$_FIRST_TPL][0]['index_page']=$page[1];
                $ugTemplates->setData($_VARS);
                $vars['page'] = $_VARS['page-'.$page[1]];
                if(is_null($vars['page']))
                    continue;

                $vars['index'] = $_VARS[$_FIRST_TPL];
                $file = [
                    'name'=>$page[1],
                    'ext'=>'html',
                ];
                if(!empty($vars['page']['file'])){
                    if(!empty($vars['page']['file']['ext'])){
                        $file['ext']=$vars['page']['file']['ext'];
                    }
                    if(!empty($vars['page']['file']['name'])){
                        $file['name']=$vars['page']['file']['name'];
                    }
                }
                $html = render($_FIRST_TPL,null,true);
                file_put_contents($path_tpl.$file['name'].'.'.$file['ext'],$html);
            }
            break;
        case 'page':
            debug('tpl creation. mode: '.$type);
            mkdir($path_tpl, 0777, true);
            $dirs = scandir($_BASEPATH);
            foreach ($dirs as $dir) {
                if($dir == '.' || $dir == '..' || !preg_match('/page\-(.*)\.php/',$dir,$page))
                    continue;

                $vars['page'] = getVars('page-'.$page[1]);
                if(is_null($vars['page']))
                    continue;

                $file = [
                    'name'=>$page[1],
                    'ext'=>'html',
                ];
                if(!empty($vars['page']['file'])){
                    if(!empty($vars['page']['file']['ext'])){
                        $file['ext']=$vars['page']['file']['ext'];
                    }
                    if(!empty($vars['page']['file']['name'])){
                        $file['name']=$vars['page']['file']['name'];
                    }
                }
                $html = render('page-'.$page[1]);
                file_put_contents($path_tpl.$file['name'].'.'.$file['ext'],$html);
            }
            break;
        case 'layers':
            debug('tpl creation. mode: '.$type);
            mkdir($path_tpl, 0777, true);
            $dirs = scandir($_BASEPATH.'/'.$_TPLPATH);
            foreach ($dirs as $dir) {
                if($dir == '.' || $dir == '..' || is_dir($dir))
                    continue;

                $dir = preg_replace('/\.php/','',$dir);
                $vars['layer'] = getVars($dir);
                if(is_null($vars['layer']))
                    continue;

                $file = [
                    'name'=>$dir,
                    'ext'=>'html',
                ];
                if(!empty($vars['layer']['file'])){
                    if(!empty($vars['layer']['file']['ext'])){
                        $file['ext']=$vars['layer']['file']['ext'];
                    }
                    if(!empty($vars['layer']['file']['name'])){
                        $file['name']=$vars['layer']['file']['name'];
                    }
                }
                $html = render($dir);
                file_put_contents($path_tpl.$file['name'].'.'.$file['ext'],$html);
            }
            break;
        case 'classic':
            debug('tpl creation. mode: '.$type);
            mkdir($path_tpl, 0755, true);
            $dirs = scandir($_BASEPATH);
            foreach ($dirs as $dir) {
                if($dir == '.' || $dir == '..' || !preg_match('/page\-(.*)\.php/',$dir,$page))
                    continue;

                $vars['page'] = getVars('page-'.$page[1]);
                if(is_null($vars['page']))
                    continue;

                if(!empty($vars['page']['file']) && !empty($vars['page']['file']['skip']) && ($vars['page']['file']['skip']==1||$vars['page']['file']['skip']==true))
                    continue;

                $file = [
                    'name'=>$page[1],
                    'ext'=>'html',
                ];
                if(!empty($vars['page']['file'])){
                    if(!empty($vars['page']['file']['ext'])){
                        $file['ext']=$vars['page']['file']['ext'];
                    }
                    if(!empty($vars['page']['file']['name'])){
                        $file['name']=$vars['page']['file']['name'];
                    }
                }
                $html = render('page-'.$page[1]);
                file_put_contents($path_tpl.$file['name'].'.'.$file['ext'],$html);
            }
            $dirs = scandir($_BASEPATH.'/'.$_TPLPATH);
            foreach ($dirs as $dir) {
                if($dir == '.' || $dir == '..' || is_dir($dir))
                    continue;

                $dir = preg_replace('/\.php/','',$dir);
                $vars['layer'] = getVars($dir);
                if(is_null($vars['layer']))
                    continue;

                if(!empty($vars['layer']['file']) && !empty($vars['layer']['file']['skip']) && ($vars['layer']['file']['skip']==1||$vars['layer']['file']['skip']==true))
                    continue;

                $file = [
                    'name'=>$dir,
                    'ext'=>'html',
                ];
                if(!empty($vars['layer']['file'])){
                    if(!empty($vars['layer']['file']['ext'])){
                        $file['ext']=$vars['layer']['file']['ext'];
                    }
                    if(!empty($vars['layer']['file']['name'])){
                        $file['name']=$vars['layer']['file']['name'];
                    }
                }
                $html = render($dir);
                file_put_contents($path_tpl.$file['name'].'.'.$file['ext'],$html);
            }
            break;
    }
}