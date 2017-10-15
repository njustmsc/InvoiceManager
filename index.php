<!--
/**
 * Created by PhpStorm.
 * User: hakm_
 * Date: 2017/10/15
 * Time: 23:29
 */
-->
<?php
include_once ('header.php');
?>
<nav class="blue lighten-2" role="navigation">
    <div class="nav-wrapper container">
        <a href="./index.php" class="brand-logo">南京理工大学微软学生俱乐部&nbsp;财务管理系统</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="./manage.php">管理后台</a></li>
        </ul>
    </div>
</nav>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center blue-text text-lighten-2">南京理工大学微软学生俱乐部</h1>
            <div class="row center">
                <h5 class="header col s12 light">财务系统</h5>
            </div>
            <div class="row center">
                <a href="./manage.php" id="manage" class="btn-large waves-effect waves-light blue lighten-1">管理后台</a>
            </div>
            <br><br>

        </div>
    </div>
</div>
<?php
include_once ('footer.php');
?>