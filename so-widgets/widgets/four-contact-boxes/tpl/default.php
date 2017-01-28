<div class="container">
    <div class="row">
        <div class="col-sm-6 col-xs-6 four-contact-boxes four-contact-boxes-one">
            <div class="contact-box-icon"><i class="contact-fa fa fa-map-marker" aria-hidden="true" syle="color:#FE8453"></i></div>
            <div class="contact-box-content">
                <p class="contact-box-content-text">
                    <?php echo $instance['contact-box-address']; ?>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 four-contact-boxes four-contact-boxes-two">
            <div class="contact-box-icon"><i class="contact-fa fa fa-phone" aria-hidden="true" syle="color:#80C3D3"></i></div>
            <div class="contact-box-content">
                <p class="contact-box-content-text">
                    <?php echo $instance['contact-box-tel']; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xs-6 four-contact-boxes four-contact-boxes-three">
            <div class="contact-box-icon"><i class="contact-fa fa fa-fax" aria-hidden="true" syle="color:#88C87A"></i></div>
            <div class="contact-box-content">
                <p class="contact-box-content-text">
                    <?php echo $instance['contact-box-fax']; ?>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 four-contact-boxes four-contact-boxes-four">
            <div class="contact-box-icon"><i class="contact-fa fa fa-envelope-o" aria-hidden="true" syle="color:#F1CD3B"></i></div>
            <div class="contact-box-content">
                <p class="contact-box-content-text">
                    <?php echo $instance['contact-box-email']; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<style>
    .contact-fa {
        font-size: 70px;
    }
    
    .four-contact-boxes {
        text-align: center;
    }
</style>