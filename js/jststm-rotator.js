jQuery(document).ready(function($)
{
    // Set timing variables
    var pause = 5000;
    var motion = 700;

    var $tstms = $('.jststm-container blockquote');
    $tstms.removeClass('hidden').hide().eq(0).show();

    var cnt = $tstms.length;
    var i = 0;

    setTimeout(transition,pause);

    function transition(){
        $tstms.eq(i).animate({opacity: 'toggle'}, motion);
        if(++i >= cnt)
        {
            i=0;
        }
        $tstms.eq(i).animate({opacity: 'toggle'}, motion);

        setTimeout(transition, pause);
    }
});