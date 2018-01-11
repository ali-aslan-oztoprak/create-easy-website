<?

/*
developed by Ali Aslan
https://github.com/ali-aslan
 */

if(!include_once 'config.php'){
    die('CONFIG NOT FOUND!');
}
//URL PARSE
    $url='';
    if(isset($_GET['req'])){$url=$_GET['req'];}
    else{$url=cfg::$main_page;}urlCheck($url);
    function urlCheck($req){
        $page =[];
        $finalize='';
        $req = trim($req);
        $req = strtolower($req);
        $reqArr = explode('/', $req);
        $reqCount = count($reqArr);
        switch ($reqCount){
            case 1:
                $page['page'] = $reqArr[0];
                break;
            //It can be replicated.
            default:
                $page['page'] =$reqArr[0];
        }
        $page['view']=$page['page'];
        $page['total']=$req;
        define('PAGE', $page);
    }

//Page Load
function pageLoad($type,$page){
        if($type=='page'){
            $view = 'views/'.$page.'.php';
        }
        else if($type=='elements'){
            $view = 'elements/'.$page.'.php';
        }
        if(file_exists($view)){
            include_once $view;
        }
        else{
            echo '<h1>404 Not Found</h1>';
        }
}

//Menu Load
function menuList(){
    $finalize='';
    foreach (cfg::$menu as $m){
        $cls='';
        if($m[1]==PAGE['view']){
            $cls='active';
        }
        $finalize .= '<li class="nav-item '.$cls.'"><a class="nav-link" href="'.cfg::$subdir.'/'.$m[1].'">'. $m[0].'</a></li>';
    }
    return $finalize;
}

//Create Link
function contertToLink($text){
        $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','_',' ');
        $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','-','-');
        $link = str_replace($tr,$eng,$text);
        $link = strtolower($link);
        $link = preg_replace('/[^A-Za-z0-9-]/', '', $link);
        return $link;
}

//Image Link Convert To BASE64
function lockImage($image){
    $type = pathinfo($image, PATHINFO_EXTENSION);
    $data = file_get_contents($image);
    $dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);
    return $dataUri;
}

//Create Form Elements
function formElem($div_class,$input_type,$input_title,$input_id,$input_class,$inputElem){
    $finalize='';
    $finalize.='<div class="'.$div_class.'">';
    switch ($input_type){
        case 'text':
            $finalize.='<div class="form-group">';
            $finalize.='<input type="text" id="'.$input_id.'" class="form-control '.$input_class.'" placeholder="'.$input_title.'">';
            $finalize.='</div>';
            break;
        case 'email':
            $finalize.='<div class="form-group">';
            $finalize.='<input type="email" id="'.$input_id.'" class="form-control '.$input_class.'" placeholder="'.$input_title.'">';
            $finalize.='</div>';
            break;
        case 'tel':
            $finalize.='<div class="form-group">';
            $finalize.='<input type="tel" id="'.$input_id.'" class="form-control '.$input_class.'" placeholder="'.$input_title.'">';
            $finalize.='</div>';
            break;

        case 'password':
            $finalize.='<div class="form-group">';
            $finalize.='<input type="password" id="'.$input_id.'" class="form-control '.$input_class.' placeholder="'.$input_title.'">';
            $finalize.='</div>';
            break;
        case 'textarea':
            $finalize.='<div class="form-group">';
            $finalize.='<textarea id="'.$input_id.'" class="form-control '.$input_class.'" placeholder="'.$input_title.'"></textarea>';
            $finalize.='</div>';
            break;
        case 'select':
            $finalize.= '<select id="'.$input_id.'" class="form-control '.$input_class.'">';
            if(is_array($inputElem)){
                $finalize.='<option selected disabled value="0">'.$input_title.'</option>';
                foreach ($inputElem as $data){
                      $finalize.='<option value="'.$data[0].'">'.$data[1].'</option>';
                }
            }
            else{
                $finalize.='<option selected disabled value="0">FUNCTION ERROR!</option>';
            }
            $finalize.='</select>';
            break;
        case 'checkbox':
            $finalize.='<div class="form-check">';
            if(is_array($inputElem)) {
                foreach ($inputElem as $data){
                    $finalize.='<input type="checkbox" id="'.$data[0].'" class="form-check-input '.$input_class.'" ><label class="form-check-label" for="'.$data[0].'">'.$data[1].'</label>';
                }
            }
            else{
                $finalize.='<input type="checkbox" id="'.$input_id.'" class="form-check-input "><label class="form-check-label" for="'.$input_id.'">FUNCTION ERROR!</label>';
            }
            $finalize.='</div>';
            break;
        case 'radio':
            $finalize.='<div class="form-check">';
            if(is_array($inputElem)) {
                foreach ($inputElem as $data){
                    $finalize.='<input type="radio" name="'.$input_id.'" class="form-check-input '.$input_class.'" id="'.$data[0].'"><label class="form-check-label" for="'.$data[0].'">'.$data[1].'</label>';
                }
            }
            else{
                $finalize.='<input type="radio" id="'.$input_id.'" class="form-check-input "><label class="form-check-label" for="'.$input_id.'">FUNCTION ERROR</label>';
            }
            $finalize.='</div>';
            break;
        case 'submit':
            $finalize.='<button type="button" id="'.$input_id.'" class="btn '.$input_class.'">'.$input_title.'</button>';
            break;
    }
    $finalize.='</div>';
    echo $finalize;
}
?>