///DOC READY FUNCTIONS
jQuery(document).ready(function () {
    jQuery('#show-nav').on('click', function (e) {
        jQuery(this).next().slideToggle('fast');
        e.preventDefault();
    });
});
