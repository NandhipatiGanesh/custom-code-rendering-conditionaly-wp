<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Blocksy
 */

get_header();

// Check if the function 'elementor_theme_do_location' exists and the location 'single' is not handled by Elementor
if (! function_exists('elementor_theme_do_location') || ! elementor_theme_do_location('single')) {
    // If not, include the default template part for single posts
    get_template_part('template-parts/single');
}
?>

<!-- Place the HTML, CSS, and JS outside of the PHP tags -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
 
 #bottom-bar{
    display: none;
 }
    @media (max-width: 500px) {
        #bottom-bar{
            display: block;
        }
        #bottom-bar .mobile .action {
            align-items: flex-end;
            display: flex;
            height: 50px;
            width: 80%;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }
        #bottom-bar .mobile .action .close {
            margin: 1px 15px;
        }
        #bottom-bar .mobile .action .close img {
            max-width: none;
        }
        #bottom-bar .mobile .swipe-up {
            padding-left: 0;
           
            width: 100%;
        }
        #bottom-bar .mobile .swipe {
            cursor: pointer;
            text-align: center;
        }
        #bottom-bar .mobile .swipe-up .swipe-text {
            font-size: 14px;
            font-weight: 500;
            line-height: 1.6666666667;
        }
        .text-list{
            padding-left: 5px;
        }
        .text-list .item{
            font-size: 14px;
            font-weight: 300;
            line-height: 1.6666666667;
            letter-spacing: 0.3px;
            word-spacing: 2px;
        }
        #bottom-bar .mobile .swipe .swipe-text {
            display: inline-block;
            position: relative;
        }
        #bottom-bar {
            bottom: 0;
            position: fixed;
            width: 100%;
            z-index: 999;
        }
        #bottom-bar .mobile {
            background: #fff;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0 0 40px rgba(0, 0, 0, .12);
            touch-action: none;
            width: 100%;
        }
        .swipe-text{
            display: flex !important;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        p{
            margin: 0;
        }
        #custombtmnav{
            background: #fff;
        }
        .hidden {
            display: none;
            
        }
        .hidden:active{
            width: 100%;
            height: auto;
            background: #fff;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0 0 40px rgba(0, 0, 0, .12);
            touch-action: none;
            
        }
       .custom-title {
            font-size: 16px;
    font-weight: 500;
    line-height: 1.5;
    text-align: center;
    margin-bottom: 12px;
        }
        .custom-content-img img{
            width: 200px;
            height: auto;
            background-size: cover;
        }
        .custom-content-div{
            padding: 20px;
        }
        .custom-buttons-contaienrs{
            display: flex;
            flex-direction: column;
            justify-content: center;
            row-gap: 10px;
        }
        .primary-button{
            transition: background-position .5s cubic-bezier(.77,.01,.16,.99);
            fill: #fcfaff;
            color: #fcfaff;
            border: 1px solid;
            background-color: #1946da;
            border-radius: 100px 100px 100px 100px;
            padding: 17px 035px 17px 035px;
            font-weight: 400;
            font-size: 16px;
    
        }
        .second-button{
            transition: background-position .5s cubic-bezier(.77,.01,.16,.99);
            fill: #fcfaff;
            color: #1946da;
            border: 1px solid;
            background-color: #fff;
            border-radius: 100px 100px 100px 100px;
            padding: 20px 035px 20px 035px;
            font-weight: 400;
            font-size: 16px;
}
.close{
    display: none;
}
.swipe-down{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    padding-bottom: 5px;
}
.swipe-down img{
    transform: rotate(-180deg);
}

        }
        
    
</style>
</head>
<body>
    <?php if (is_singular('post')): ?>
        <section  id="bottom-bar">
    <div class="mobile"> 
    <div class="action"><p class="close" style="">
        <img loading="lazy" class="img" src="https://neilpatel.com/wp-content/themes/neilpatel/images/close-t.svg" width="12" height="12" alt="Close"></p>
        <p class="swipe swipe-up" data-swipe-threshold="5" data-swipe-timeout="1000" style="">
            <span class="swipe-text">
                <img width="15" height="15" src="https://img.icons8.com/external-inkubators-detailed-outline-inkubators/25/external-up-arrow-arrows-inkubators-detailed-outline-inkubators-2.png" alt="external-up-arrow-arrows-inkubators-detailed-outline-inkubators-2"/>
               <span> Swipe Up to Get More Patients!</span> </span></p></div>
</div>
<div id="custombtmnav" class="hidden">
<div class="custom-content-div">

    <div class="custom-content-img">
        <img src="https://advaithealth.com/wp-content/uploads/2024/05/circle-1.png">
    </div>
    <div class="custom-content-here"> 
        <p class="custom-title">Boost Your Hospital's Reach with Our Expert Marketing Campaigns</p>
        <ul class="text-list">
            <li class="item"><strong>Social Media Management</strong> – engage with your audience and build a loyal community.</li>
            <li class="item"><strong>Brand Development</strong> – create a compelling brand identity that stands out.</li>
            <li class="item"><strong>Patient Outreach Programs</strong> – tailored campaigns to attract and retain patients.</li>
          </ul>
    </div>
    <div class="custom-buttons-contaienrs">
      <button class="primary-button"> 
        Schedule an appointment
      </button>
      <button class="second-button"> Call Now: +91123456789</button>
    </div>
</div>
<p class="swipe swipe-down" >
    <img width="15" height="15" src="https://img.icons8.com/external-inkubators-detailed-outline-inkubators/25/external-up-arrow-arrows-inkubators-detailed-outline-inkubators-2.png" alt="external-up-arrow-arrows-inkubators-detailed-outline-inkubators-2"/>
    <span class="swipe-text">Close</span></p>
</div>

</section>
        <script>

    document.querySelector('.swipe-up').addEventListener('touchstart', handleTouchStart, false);
    document.querySelector('.swipe-up').addEventListener('touchmove', handleTouchMove, false);
    
    let yDown = null;
    
    function handleTouchStart(evt) {
        const firstTouch = evt.touches[0];
        yDown = firstTouch.clientY; // Get the vertical position of the touch
    }
    
    function handleTouchMove(evt) {
        if (!yDown) {
            return;
        }
    
        let yUp = evt.touches[0].clientY;
        let yDiff = yDown - yUp;
    
        // Setting a threshold for swipe action to be considered valid
        if (yDiff > 50) { // Swipe up
            document.getElementById('custombtmnav').style.display = 'block';
            yDown = null; // Resetting yDown to prevent multiple triggers
        } else if (yDiff < -50) { // Swipe down
            document.getElementById('custombtmnav').style.display = 'none';
            yDown = null; // Resetting yDown to prevent multiple triggers
        }
    }
    function handleTouchStart(evt) {
        evt.preventDefault(); // Prevent scrolling when touching the swipe area
        const firstTouch = evt.touches[0];
        yDown = firstTouch.clientY;
    }
    
    function handleTouchMove(evt) {
        evt.preventDefault(); // Prevent scrolling when moving touch
        if (!yDown) {
            return;
        }
    
        let yUp = evt.touches[0].clientY;
        let yDiff = yDown - yUp;
    
        if (yDiff > 50) {
            document.getElementById('custombtmnav').style.display = 'block';
            yDown = null;
        } else if (yDiff < -50) {
            document.getElementById('custombtmnav').style.display = 'none';
            yDown = null;
        }
    }
    function handleClick() {
        var element = document.getElementById('custombtmnav');
        if (element.style.display !== 'none') {
            element.style.display = 'none'; // Hides the element
        } else {
            element.style.display = 'block'; // Shows the element if it's already hidden
        }
    }
    
    document.querySelector('.swipe-down').addEventListener('click', handleClick);
    
</script>
     <?php endif; ?>
<?php if (!is_singular('post')): ?>
    <?php get_footer(); ?>
<?php endif; ?>
</body>
</html>
