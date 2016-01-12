<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">CasaBlue</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li <?php if($r=="home") echo 'class="active"';?>><a href="index.php">Home</a></li>
                <li <?php if($r=="about") echo 'class="active"';?>><a href="index.php?r=about">About</a></li>
                <li <?php if($r=="contact") echo 'class="active"';?>><a href="index.php?r=contact">Contact</a></li>
                <li class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Tugas<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?r=jquery">jQuery</a></li>
                        <li><a href="index.php?r=ajax">Ajax</a></li>
                        <li><a href="index.php?r=composer">Composer</a></li>
                        <li><a href="#">Belajar 4</a></li>
                        <li><a href="#">Belajar 5</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-right"></ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>