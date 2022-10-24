<?php
    header("Content-type: text/css; charset: UTF-8");
    if(isset($_GET['primary_color']))
    {
        $color = '#'.$_GET['primary_color'];
    }else {
        $color = 'rgb(250, 206, 117);';
    }
    if(isset($_GET['primary_bg_color']))
    {
        $bgcolor = '#'.$_GET['primary_bg_color'];
    }else {
        $bgcolor = '#000';
    }
?>
.bg-dark {
    background-color: <?php echo $bgcolor?>  !important;
}

.bg-nav, 
.btn-rounded, 
.btn-rounded:hover {
    background-color: <?php echo $color?>  !important;
    border: 1px solid <?php echo $color?>  !important;
}


