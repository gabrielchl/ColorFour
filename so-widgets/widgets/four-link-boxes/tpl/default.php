<div class="" id="" tabindex="" style="color:white; font-size:30px; text-align:center;">
    <style>
        .bigrightbtn {
            font-size: 16px;
            background-color: #fff;
            border-radius: 100%;
            padding-left: 10px;
            padding-right: 8px;
            padding-top: 7px;
            padding-bottom: 7px;
            font-weight: bold;
        }
        
        .bigbtndiv {
            width: 100%;
            padding-top: 34px;
            padding-bottom: 34px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 25px;
        }
        
        .bigbtndivone:hover {
            background-color: #ffa47f !important;
        }
        
        .bigbtndivone:hover i {
            color: #ffa47f !important;
        }
        
        .bigbtndivtwo:hover {
            background-color: #a6ced8 !important;
        }
        
        .bigbtndivtwo:hover i {
            color: #a6ced8;
        }
        
        .bigbtndivthree:hover {
            background-color: #aacea2;
        }
        
        .bigbtndivthree:hover i {
            color: #aacea2;
        }
        
        .bigbtndivfour:hover {
            background-color: #f3da74;
        }
        
        .bigbtndivfour:hover i {
            color: #f3da74;
        }
    </style>
    <div class="col-md-3 col-sm-6" style="margin-top: 25px;">
        <div onclick="location.href='<?php echo $instance['link_one'] ?>';" class="bigbtndiv bigbtndivone" style="background-color: <?php echo $instance['color_one'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_one'] ?>
                <br><i class="fa fa-chevron-right bigrightbtn" style="color: <?php echo $instance['color_one'] ?>;" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-3 col-sm-6" style="margin-top: 25px;">
        <div onclick="location.href='<?php echo $instance['link_two'] ?>';" class="bigbtndiv bigbtndivtwo" style="background-color: <?php echo $instance['color_two'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_two'] ?>
                <br><i class="fa fa-chevron-right bigrightbtn" style="color: <?php echo $instance['color_two'] ?>;" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-3 col-sm-6" style="margin-top: 25px;">
        <div onclick="location.href='<?php echo $instance['link_three'] ?>';" class="bigbtndiv bigbtndivthree" style="background-color: <?php echo $instance['color_three'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_three'] ?>
                <br><i class="fa fa-chevron-right bigrightbtn" style="color: <?php echo $instance['color_three'] ?>;" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-3 col-sm-6" style="margin-top: 25px;">
        <div onclick="location.href='<?php echo $instance['link_four'] ?>';" class="bigbtndiv bigbtndivfour" style="background-color: <?php echo $instance['color_four'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_four'] ?>
                <br><i class="fa fa-chevron-right bigrightbtn" style="color: <?php echo $instance['color_four'] ?>;" aria-hidden="true"></i></div>
    </div>
</div>