<div class="" id="" tabindex="" style="color:white; font-size:30px; text-align:center; padding-top:35px; padding-bottom:0;">
    <style>
        .bigrightbtn {
            font-size: 27px;
        }
        
        .bigbtndiv {
            width: 100%;
            padding-top: 34px;
            padding-bottom: 34px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .bigbtndivone:hover {
            background-color: <?php echo $instance['color_one'] ?> !important;
            color: #fff !important;
        }
        
        .bigbtndivtwo:hover {
            background-color: <?php echo $instance['color_two'] ?> !important;
            color: #fff !important;
        }
        
        .bigbtndivthree:hover {
            background-color: <?php echo $instance['color_three'] ?> !important;
            color: #fff !important;
        }
        
        .bigbtndivfour:hover {
            background-color: <?php echo $instance['color_four'] ?> !important;
            color: #fff !important;
        }
        
        @media screen and (max-width: 991px) {
            .four-link-box-margin-special {
                margin-bottom: 30px;
            }
        }
        
        @media screen and (max-width: 766px) {
            .four-link-box-margin-special-two {
                margin-bottom: 30px;
            }
        }
        
        .all-link-boxes {}
    </style>
    <div class="all-link-boxes col-md-3 col-sm-6 four-link-box-margin-special" style="">
        <div onclick="location.href='<?php echo $instance['link_one'] ?>';" class="bigbtndiv bigbtndivone hvr-forward" style="background-color:#fff ; color:<?php echo $instance['color_one'] ?>; cursor:pointer; border: 4px solid <?php echo $instance['color_one'] ?>">
            <?php echo $instance['text_one'] ?>
        </div>
    </div>
    <div class="all-link-boxes col-md-3 col-sm-6 four-link-box-margin-special" style="">
        <div onclick="location.href='<?php echo $instance['link_two'] ?>';" class="bigbtndiv bigbtndivtwo hvr-forward" style="background-color:#fff ; color:<?php echo $instance['color_two'] ?>; cursor:pointer; border: 4px solid <?php echo $instance['color_two'] ?>">
            <?php echo $instance['text_two'] ?>
        </div>
    </div>
    <div class="all-link-boxes col-md-3 col-sm-6 four-link-box-margin-special-two" style="">
        <div onclick="location.href='<?php echo $instance['link_three'] ?>';" class="bigbtndiv bigbtndivthree hvr-forward" style="background-color:#fff ; color:<?php echo $instance['color_three'] ?>; cursor:pointer; border: 4px solid <?php echo $instance['color_three'] ?>">
            <?php echo $instance['text_three'] ?>
        </div>
    </div>
    <div class="all-link-boxes col-md-3 col-sm-6" style="margin-bottom:35px;">
        <div onclick="location.href='<?php echo $instance['link_four'] ?>';" class="bigbtndiv bigbtndivfour hvr-forward" style="background-color:#fff ; color:<?php echo $instance['color_four'] ?>; cursor:pointer; border: 4px solid <?php echo $instance['color_four'] ?>">
            <?php echo $instance['text_four'] ?>
        </div>
    </div>
</div>