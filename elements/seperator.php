<?
$title='404 Not Found!';
$img='http://placehold.it/1920x1080';
$seperator=false;
$subdir = cfg::$subdir;
foreach (cfg::$menu as $m){
    if($m[1]==PAGE['view']){$seperator=true;$title = $m[0];$img = $m[2];}
}
?>
<div class="seperator" style="background: url('<? echo lockImage($img)?>');background-size:cover;background-position: center;">
    <div class="container">
        <h1><?echo $title?></h1>
    </div>
</div>
