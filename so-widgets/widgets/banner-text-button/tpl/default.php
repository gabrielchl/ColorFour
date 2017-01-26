<div class="row" style="padding-top:40px; padding-bottom:40px;">
    <div class="container" id="getthisheiht">
        <div class="container">
            <div class="col-md-5" style="color: #FE8453; font-size:48px;">
                <?php echo $instance['banner-text-button-text-one'];?>
            </div>
            <div class="col-md-4" style="color: #FE8453;">
                <?php echo $instance['banner-text-button-text-two'];?>
            </div>
            <div class="col-md-3">
                <center id="changethisprop">
                    <a href="<?php echo $instance['banner-text-button-button-link'];?>" style="background-color: #FE8453; color:#fff; padding: 9px 30px;">
                        <?php echo $instance['banner-text-button-button-text'];?>
                    </a>
                </center>
            </div>
            <script>
                var element = document.getElementById('getthisheiht');
                var thisheight = element.offsetHeight;
                var myElement = document.getElementById('changethisprop');
                thisheight += "px";
                myElement.style.lineHeight = thisheight;
            </script>
        </div>
    </div>
</div>