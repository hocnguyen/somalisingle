jQuery(document).ready(function(){
    jQuery(".defaultText").focus(function(srcc){
        if(jQuery(this).val()==jQuery(this)[0].title)
        {
            jQuery(this).removeClass("defaultTextActive");
            jQuery(this).val("");
        }

        if(jQuery(this).attr('id')=='LoginForm_username'||jQuery(this).attr('id')=='LoginForm_password')
        {
            jQuery(this).removeClass("defaultTextActive");
            jQuery(this).val("");
        }
        if(jQuery(this).attr('id')=='LoginUser_email')
        {
            jQuery('#lostpassword_label').hide();
        }
    });

    jQuery(".defaultText").blur(function() {
        if (jQuery(this).val() == "") {
            jQuery(this).addClass("defaultTextActive");
            jQuery(this).val(jQuery(this)[0].title);
        }

    });

    jQuery(".defaultText").blur();
});