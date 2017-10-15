<!--
**
 * Created by PhpStorm.
 * User: BRO.BIRD
 * Date: 2017/10/11
 * Time: 17:42
 */
 -->
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>财务管理系统</title>
    <script>
        window.addEventlistener('error',function (e) {
            var target= e.target,
                nodeName= target.nodeName.toLowerCase(),
                src = target.dataset.serverPath;
            var node= document.createElement(nodeName);
            if (target.src) {
                node.src = src
            }else {
                target.href= src;
            }
            document.head.appendChildgnode();
        },true
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js" data-server-path="./js/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" data-server-path="./css/materialize.min.css">
    <script src="https://cdn.bootcss.com/materialize/0.100.2/js/materialize.min.js" data-server-path="./js/materialize.min.js"></script>
</head>
<body>