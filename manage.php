<!--
/**
 * Created by PhpStorm.
 * User: hakm_
 * Date: 2017/10/16
 * Time: 00:42
 */
 -->
<?php
include_once ('header.php');
?>
<nav class="blue lighten-2" role="navigation">
<div class="nav-wrapper container">
    <a href="./index.php" class="brand-logo">南京理工大学微软学生俱乐部&nbsp;财务管理系统</a>
</div>
</nav>

<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large blue">
        <i class="material-icons">menu</i>
    </a>
    <ul>
        <li><a class="btn-floating red" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">insert_chart</i></a></li>
        <li><a class="btn-floating yellow darken-1" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating indigo" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>
<?php
include_once ('footer.php');
?>