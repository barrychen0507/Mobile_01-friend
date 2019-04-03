<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/default.min.css">
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.js"></script>
</head>
<?php $doc_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);?>
<body background="img/index_bg.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="font-family:微軟正黑體;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6ED2DF;">
        <a class="navbar-brand" href="#">皇翔</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><?php if($doc_name == "index.php") {echo "<b>首頁</b>";} else {echo "首頁";}?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="knowings.php"><?php if($doc_name == "knowings.php") {echo "<b>租借須知</b>";} else {echo "租借須知";}?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php"><?php if($doc_name == "about.php") {echo "<b>關於我們</b>";} else {echo "關於我們";}?></a>
                </li>
                <li class="nav-item dropdown disabled">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">表單</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item disabled" href="#" disabled>GOO 租借表</a>
                        <a class="dropdown-item disabled" href="#" disabled>設備 租借表 2</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>