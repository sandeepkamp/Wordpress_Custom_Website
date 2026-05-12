<?php /* Template Name: Application-Form */ ?>
<?php get_header('alter'); ?>
<?php $curricullumimage = get_the_post_thumbnail_url();?>
<section class="banner">
    <div class="banner-img-container" style="background:url('<?php echo $curricullumimage; ?>')">
        <!-- <img src="images/curriculum-banner.png" alt=""> -->
        <div class="banner-overlay"></div>
    </div>
</section>
<div class="parents-wrapper">
    <!--------Form Start Section ------->
    <?php echo do_shortcode('[contact-form-7 id="734" title="Teacher Form"]') ?>
</div>

<?php  get_footer('alter');  ?>
<script>
jQuery('#my-img').on('change', function(event) {
    const output = document.getElementById('my-img-preview');
    if (event.target.files[0]) {
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    } else {
        output.src = '';
    }
});
jQuery(".wpcf7-form-control-wrap").click(function() {
    jQuery(this).children(".wpcf7-not-valid-tip").css("display", "none");
});


jQuery(document).ready(function() {
    jQuery('#firstname').keydown(function(e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });
});

jQuery(document).ready(function() {
    jQuery('#lastname').keydown(function(e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });
});

jQuery(document).ready(function() {
    jQuery('#middlename').keydown(function(e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });
});


jQuery(document).ready(function() {
    jQuery('#passportcountry').keydown(function(e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });
});

jQuery(document).ready(function() {
    jQuery('#primary-number').keydown(function(e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });
});

document.getElementById('myinput').onkeydown = function(e) {
    console.log(e.key);
    //console.log(e.target.value);
    switch (e.key) {
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
        case "0":
        case "Backspace":
            return true;
            break;

        case ".":
            if (e.target.value.indexOf(".") == -1) {
                return true;
            } else {
                return false;
            }
            break;

        default:
            return false;
    }

}


document.getElementById('myinputpnumber1').onkeydown = function(e) {
    console.log(e.key);
    //console.log(e.target.value);
    switch (e.key) {
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
        case "0":
        case "Backspace":
            return true;
            break;

        case ".":
            if (e.target.value.indexOf(".") == -1) {
                return true;
            } else {
                return false;
            }
            break;

        default:
            return false;
    }

}


document.getElementById('myinputonumber1').onkeydown = function(e) {
    console.log(e.key);
    //console.log(e.target.value);
    switch (e.key) {
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
        case "0":
        case "Backspace":
            return true;
            break;

        case ".":
            if (e.target.value.indexOf(".") == -1) {
                return true;
            } else {
                return false;
            }
            break;

        default:
            return false;
    }

}

document.getElementById('myinputpnumber2').onkeydown = function(e) {
    console.log(e.key);
    //console.log(e.target.value);
    switch (e.key) {
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
        case "0":
        case "Backspace":
            return true;
            break;

        case ".":
            if (e.target.value.indexOf(".") == -1) {
                return true;
            } else {
                return false;
            }
            break;

        default:
            return false;
    }

}


document.getElementById('myinputonumber2').onkeydown = function(e) {
    console.log(e.key);
    //console.log(e.target.value);
    switch (e.key) {
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
        case "0":
        case "Backspace":
            return true;
            break;

        case ".":
            if (e.target.value.indexOf(".") == -1) {
                return true;
            } else {
                return false;
            }
            break;

        default:
            return false;
    }

}


document.getElementById('myinputpnumber3').onkeydown = function(e) {
    console.log(e.key);
    //console.log(e.target.value);
    switch (e.key) {
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
        case "0":
        case "Backspace":
            return true;
            break;

        case ".":
            if (e.target.value.indexOf(".") == -1) {
                return true;
            } else {
                return false;
            }
            break;

        default:
            return false;
    }

}


document.getElementById('myinputonumber3').onkeydown = function(e) {
    console.log(e.key);
    //console.log(e.target.value);
    switch (e.key) {
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
        case "0":
        case "Backspace":
            return true;
            break;

        case ".":
            if (e.target.value.indexOf(".") == -1) {
                return true;
            } else {
                return false;
            }
            break;

        default:
            return false;
    }

}
</script>
