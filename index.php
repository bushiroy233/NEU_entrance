<?php
<<<<<<< HEAD
=======
$form = "

<!DOCTYPE html>
<html lang='zh-cmn-Hans'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no'/>
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
  <meta name='renderer' content='webkit'>
  <meta name='format-detection' content='telephone=no'>
  <meta http-equiv='Cache-Control' content='no-siteapp'/>
  <title>生成通行许可</title>
  <link rel='stylesheet' href='css/mdui.min.css?v=0.4.3'/>
  <link rel='icon' href='favicon.ico' type='image/x-icon'>
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
  <link rel='stylesheet' href='css/docs.css?v=20170815'/>
  <link href='visitor.css?id=e292e3fdbf052c4098f0' rel='stylesheet'>
  <script src='js/clipboard.min.js'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-88818678-1');
</script>

</head>
<body class='mdui-appbar-with-toolbar  mdui-theme-primary-indigo mdui-theme-accent-pink'>
  
  
<header class='mdui-appbar mdui-appbar-fixed'>
  <div class='mdui-toolbar mdui-color-theme'>
    <span href='' class='mdui-typo-title'>生成通行许可&nbsp;<span style='font-size: 1.5em;'>🥳</span></span>
    <div class='mdui-toolbar-spacer'></div>
  </div>
</header>

<div class='mdui-container doc-container doc-no-cover'>
  <div class='mdui-container'>
 <p>高级玩法：<a href='/ios.pdf' target='_blank'>URL改写教程</a></p>
 <p>有问题请联系QQ:2867984618</p>
<!--        作者:Roy      -->
<form action='' method='GET'>
<div class='mdui-textfield mdui-textfield-floating-label'>
  <label class='mdui-textfield-label'>姓名</label>
  <input class='mdui-textfield-input' type='text' name='name' value='李子維' id='f_name' required/>
</div>

<div class='mdui-textfield mdui-textfield-floating-label'>
  <label class='mdui-textfield-label'>学号</label>
  <input class='mdui-textfield-input' type='text' name='id' pattern='[1-9]\d*' value='351238' id='f_id' required/>
  <div class='mdui-textfield-error'>学号格式错误</div>
</div>

<div class='mdui-textfield mdui-textfield-floating-label'>
  <label class='mdui-textfield-label'>入口名(格式:xx校区xx门)</label>
  <input class='mdui-textfield-input' type='text' name='entrance' value='南湖校区北门' id='f_entrance' required/>
</div>

<br>

<div class='mdui-col'>
    <button class='mdui-btn mdui-ripple' id='pro_btn' onclick='show()' type='button'><i class='mdui-icon material-icons'>&#xe86f;</i>启用高级选项</button>
</div>

<div style='display: none;' id='pro_func'>
    <br>
    <div class='mdui-typo-headline'>高级选项</div>
    <div class='mdui-typo-body-1'>此时预览或拷贝链接前往的页面样式将被指定按这两个参数来生成！请您务必知道其可能带来的后果，若不知道，请刷新页面并不要开启高级选项！</div>
    <div class='mdui-textfield mdui-textfield-floating-label' id='color_div'>
      <label class='mdui-textfield-label'>颜色(HEX颜色代码)</label>
      <input class='mdui-textfield-input' type='text' name='c_color' value='006633' id='f_color' disabled='disabled' pattern='^((?!#).)*$' required/>
        <div class='mdui-textfield-error'>格式错误(不含#)</div>
    </div>
    
    
    <div class='mdui-textfield mdui-textfield-floating-label' id='icon_div'>
      <label class='mdui-textfield-label'>图标名(前往fontawesome图标库拷贝icon name)</label>
      <input class='mdui-textfield-input' type='text' name='b_icon' value='arrow-circle-up' id='f_icon' disabled='disabled'required/>
    </div>
    
    <div class='mdui-col'>
      <p>快捷选项</p>
      <button class='mdui-btn mdui-btn-dense mdui-btn-raised' id='quick_btn1' onclick='bt1()' type='button'><i class='fas fa-arrow-circle-up' style='font-size: 1.3em;'></i>&nbsp;图标样式1(默认)</button>&nbsp;
      <button class='mdui-btn mdui-btn-dense mdui-btn-raised' id='quick_btn2' onclick='bt2()' type='button'><i class='fas fa-arrow-alt-circle-up' style='font-size: 1.3em;'></i>&nbsp;图标样式2</button>
    </div>
    <br>
</div>

<br>
<div class='mdui-col'>
    <button class='mdui-btn mdui-btn-block mdui-color-pink-accent mdui-ripple' type='submit'>预览</button>
</div>
</form>

<br><div class='mdui-divider'></div><br>

<div class='mdui-col'>
    <button class='mdui-btn mdui-btn-block mdui-color-blue-200' id='c_btn' onclick='copy()' type='button'><i class='mdui-icon material-icons'>&#xe14d;</i>拷贝链接</button>
</div>
<br>
<div class='mdui-col'>
    <button class='mdui-btn mdui-btn-block mdui-color-theme-400' id='cf_btn' onclick='copyconf()' type='button'><i class='mdui-icon material-icons'>&#xe87b;</i>拷贝Shadowrocket配置</button>
</div>
<br><br>
<div class='mdui-col'>
 <p><a href='https://github.com/rroy233/NEU_entrance' target='_blank'>Github</a>
</div>



 </div>
 
</div>

>>>>>>> 2a3eb93cce5c2cc9c07ead798eacc455cecc9236

if($_GET['ios_conf']==1){
    ios_conf();
}elseif ($_GET['name'] == "") {
   show_form();
} else {
   show_passport();
}

function ios_conf(){
    //ios配置文件生成 2021年05月18日
    $conf_file_data = file_get_contents("/template/shadowrocket.conf");
    $url = "https://neu.roy233.com/?name=".urlencode($_GET['name'])."&id=".urlencode($_GET['id'])."&entrance=".urlencode($_GET['entrance']);
    if($_GET['c_color'] !='' or $_GET['b_icon'] !=''){
        $url = $url."&c_color=".$_GET['c_color']."&b_icon=".$_GET['b_icon'];
    }
<<<<<<< HEAD
    $conf_file_data = str_replace('{{url_replace}}',$url,$conf_file_data);
    header('content-disposition: attachment; filename='.$_GET['name']."_".$_GET['entrance'].".conf");
    header('content-type: application/octet-stream; charset=utf-8');
    echo $conf_file_data;
=======
  function copy(){
    var name = document.getElementById('f_name').value;
    var id = document.getElementById('f_id').value;
    var entrance = document.getElementById('f_entrance').value;
    var copy_btn = document.getElementById('c_btn');
    var pro_func = document.getElementById('pro_func');
    var text = '已拷贝至剪切板';
    copy_btn.removeAttribute('onclick');
    
    
    
    if(pro_func.style.display=='none'){
        copy_btn.setAttribute('data-clipboard-text',document.URL+'?name='+encodeURI(name)+'&id='+encodeURI(id)+'&entrance='+encodeURI(entrance));
    }else{
        var color = document.getElementById('f_color').value;
        var icon = document.getElementById('f_icon').value;
        copy_btn.setAttribute('data-clipboard-text',document.URL+'?name='+encodeURI(name)+'&id='+encodeURI(id)+'&entrance='+encodeURI(entrance)+'&c_color='+encodeURI(color)+'&b_icon='+encodeURI(icon));
        text = '拷贝成功！当样式更新时请勿再使用此链接！！';
    }
    
    new ClipboardJS('#c_btn');
    copy_btn.innerHTML = text;
    
    
    document.getElementById('c_btn').click();
    
    if(pro_func.style.display=='none'){
        copy_btn.setAttribute('class','mdui-btn mdui-btn-block mdui-color-blue-50');
        copy_btn.setAttribute('disabled','disabled');
    }else{
        copy_btn.setAttribute('class','mdui-btn mdui-btn-block mdui-color-red-900');
    }
    
  }
  function copyconf(){
    var name = document.getElementById('f_name').value;
    var id = document.getElementById('f_id').value;
    var entrance = document.getElementById('f_entrance').value;
    var copy_btn = document.getElementById('cf_btn');
    var pro_func = document.getElementById('pro_func');
    var text = '已拷贝至剪切板';
    copy_btn.removeAttribute('onclick');
    
    
    
    if(pro_func.style.display=='none'){
        copy_btn.setAttribute('data-clipboard-text',document.URL+'?ios_conf=1&name='+encodeURI(name)+'&id='+encodeURI(id)+'&entrance='+encodeURI(entrance));
    }else{
        var color = document.getElementById('f_color').value;
        var icon = document.getElementById('f_icon').value;
        copy_btn.setAttribute('data-clipboard-text',document.URL+'?ios_conf=1&name='+encodeURI(name)+'&id='+encodeURI(id)+'&entrance='+encodeURI(entrance)+'&c_color='+encodeURI(color)+'&b_icon='+encodeURI(icon));
        text = '拷贝成功！';
    }
    
    new ClipboardJS('#cf_btn');
    copy_btn.innerHTML = text;
    
    
    document.getElementById('cf_btn').click();
    
    if(pro_func.style.display=='none'){
        copy_btn.setAttribute('class','mdui-btn mdui-btn-block mdui-color-blue-50');
        copy_btn.setAttribute('disabled','disabled');
    }else{
        copy_btn.setAttribute('class','mdui-btn mdui-btn-block mdui-color-red-900');
    }
    
  }
  function show(){
    var pro_func = document.getElementById('pro_func');
    var color_input = document.getElementById('f_color');
    var icon_input = document.getElementById('f_icon');
    
    pro_func.setAttribute('style','');
    
    color_input.removeAttribute('disabled');
    icon_input.removeAttribute('disabled');
    
    var color_div = document.getElementById('color_div');
    var icon_div = document.getElementById('icon_div');
    color_div.setAttribute('class','mdui-textfield mdui-textfield-floating-label mdui-textfield-not-empty');
    icon_div.setAttribute('class','mdui-textfield mdui-textfield-floating-label mdui-textfield-not-empty');
    
    var pro_btn = document.getElementById('pro_btn');
    pro_btn.setAttribute('disabled','disabled');
    pro_btn.innerHTML='已启用高级选项';
    
  }
</script>
<script>var $$ = mdui.JQ;</script>
";



$name ="李子維";
$entrance="";
if($_GET['name']!=''){
    $name=explode('/',$_GET['name']);
    $name=$name[0];
}
if($_GET['entrance']!=''){
    $entrance=explode('/',$_GET['entrance']);
    $entrance=$entrance[0];
    
    $entrance=explode(':',$entrance);
    $entrance=$entrance[0];
>>>>>>> 2a3eb93cce5c2cc9c07ead798eacc455cecc9236
}
function show_form(){
    echo file_get_contents("template/form.tpl");
}
function show_passport(){
    $tpl = file_get_contents("template/passport.tpl");
    
    $name ="李子維";
    $entrance="";
    if($_GET['name']!=''){
        $name=explode('/',$_GET['name']);
        $name=$name[0];
    }
    if($_GET['entrance']!=''){
        $entrance=explode('/',$_GET['entrance']);
        $entrance=$entrance[0];
        
        $entrance=explode(':',$entrance);
        $entrance=$entrance[0];
    }

    $tpl = str_replace('{{time}}',date('Y-m-d H:i:s', time()),$tpl);
    $tpl = str_replace('{{name}}',htmlspecialchars($name),$tpl);
    $tpl = str_replace('{{id}}',htmlspecialchars($_GET['id']),$tpl);
    $tpl = str_replace('{{entrance}}',htmlspecialchars($entrance),$tpl);

<<<<<<< HEAD
    if($_GET['c_color'] =='' or $_GET['b_icon']==''){
        $tpl = str_replace('{{color}}','006633',$tpl);
        $tpl = str_replace('{{icon}}','arrow-circle-up',$tpl);
    }else{
        $icon=explode('/',$_GET['b_icon']);
        $icon=$icon[0];
        $icon=explode(':',$icon);
        $icon=$icon[0];
        $tpl = str_replace('{{color}}',htmlspecialchars($_GET['c_color']),$tpl);
        $tpl = str_replace('{{icon}}',htmlspecialchars($icon),$tpl);
    }
    echo $tpl;
}
=======
if($_GET['ios_conf']==1){
    ios_cof();
}elseif ($_GET['name'] == "") {
   echo $form;
} else {
   echo $code;
}

function ios_cof(){
    //ios配置文件生成 2021年05月18日
    $conf_file_data = file_get_contents("shadowrocket.tpl");
    $url = "https://neu.roy233.com/?name=".urlencode($_GET['name'])."&id=".urlencode($_GET['id'])."&entrance=".urlencode($_GET['entrance']);
    if($_GET['c_color'] !='' or $_GET['b_icon'] !=''){
        $url = $url."&c_color=".$_GET['c_color']."&b_icon=".$_GET['b_icon'];
    }
    $conf_file_data = str_replace('{{url_replace}}',$url,$conf_file_data);
    header('content-disposition: attachment; filename='.$_GET['name']."_".$_GET['entrance'].".conf");
    header('content-type: application/octet-stream; charset=utf-8');
    echo $conf_file_data;
}
>>>>>>> 2a3eb93cce5c2cc9c07ead798eacc455cecc9236
?>

