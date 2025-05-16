<div class="footer">
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>सम्पर्क</strong> 
            <hr>
            <div class="row mb-2">
                <div class="col-3"> <span>ठेगाना</span> </div>
                <div class="col-9"> <span>Kageshwori Manohara-6, Kathmandu</span> </div>
            </div>
            <div class="row mb-2">
                <div class="col-3"> <span>टेलिफोन</span> </div>
                <div class="col-9"> <span>014153721</span> </div>
            </div>
            <div class="row mb-2">
                <div class="col-3"> <span>फोन नं</span> </div>
                <div class="col-9"> <span>9851040001</span> </div>
            </div>
            <div class="row mb-2">
                <div class="col-3"> <span>इमेल</span> </div>
                <div class="col-9"> <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb90939e979a9f92959e8b9a97bb9c969a9297d5989496">[email&#160;protected]</a></span> </div>
            </div>
        </div>
        <div class="col-md-4">
            <strong>BIG SPORTS PVT. LTD द्वारा संचालित</strong> 
            <hr>
            <div class="row mb-2">
                <div class="col-4"> <span>प्रवन्ध सम्पादक</span> </div>
                <div class="col-8"> <span>अजय फुयाल‍</span> </div>
            </div>
            <div class="row mb-2">
                <div class="col-4"> <span>सम्पादक</span> </div>
                <div class="col-8"> <span>राजकुमार थापा</span> </div>
            </div>
            <hr>
            <span> <a href="/events">विशेषांक</a> </span> <span class="float-end"> <a href="/our-team">हाम्रो टिम</a> </span> 
        </div>
        <div class="col-md-4">
            <strong>FOLLOW US</strong> 
            <hr>
            <div class="d-flex"> <a target="_blank" href="https://www.facebook.com/kheladidotcom"> <i class="fab fa-facebook-f"></i> </a> <a target="_blank" href="https://x.com/Kheladi_"> <i class="fab fa-twitter"></i> </a> <a target="_blank" href="https://www.youtube.com/channel/UCcO4oTDweuyKYTmLqE1S6-Q"> <i class="fab fa-youtube"></i> </a> <a target="_blank" href="https://www.instagram.com/kheladinepal/"> <i class="fab fa-instagram"></i> </a> <a target="_blank" href="https://www.tiktok.com/@kheladi_"> <i class="fab fa-tiktok"></i> </a> </div>
            <div class="row mt-4">
                <div class="col-md-6"> Developed by <a style="color:#ddd;" href="https://digitalbuzz.com.np" target="_blank">DigitalBuzz</a> </div>
                <div class="col-md-6"> © 2024. All rights reserved. </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> <script type="text/javascript"> $(function() { $("#date-filter").datepicker({ beforeShowDay: function(date) { /* 0 = Sunday, 1 = Monday, ..., 6 = Saturday*/ return [date.getDay() === 6, ""]; }, onSelect: function(dateText, inst) { var date = $(this).datepicker("getDate"); var day = ("0" + date.getDate()).slice(-2); var month = date.toLocaleString('default', { month: 'long' }).toLowerCase(); var formattedDate = month + '-' + day; window.location.href = 'http://kheladi.com/saturday-articles/'+formattedDate; } }); }); var top_position = $('.menu-bar').offset().top; function closeSpecial(){ $(".special-news .fa-close").hide(); $(".special-news").slideUp(); setTimeout(function(){ $(".special-news").remove(); top_position = $('.menu-bar').offset().top; },2000); } function stickyMenu(){ scrolltop = $(document).scrollTop(); if(scrolltop >= top_position){ $(".page-progressbar").show(); $(".menu-bar").addClass('fixed-menu'); }else{ $(".menu-bar").removeClass('fixed-menu'); $(".page-progressbar").hide(); } } $(window).scroll(function(event){ stickyMenu(); }); $(document).ready(function() { progressBar('.page-progressbar'); }); window.progressBar = function(selector, options) { if (options == null) options = {}; var object = document.querySelector(selector); if (!object) { console.error("Object not found with " + selector); return null; } var defaults = { color: '#D42620', size: '5px', position: 'top', speed: '500', }; object.style.position = "fixed"; object.style.background = option('color'); object.style.height = option('size'); switch (option('position')) { case 'bottom': object.style.bottom = "0px"; break; default: object.style.top = "59px"; } object.style.transition = "width " + option('speed') + 'ms'; window.addEventListener('scroll', function(e) { var h = document.documentElement, b = document.body, st = 'scrollTop', sh = 'scrollHeight'; var percent = parseInt((h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100); object.style.width = percent + "vw" }); return object; function option(prop) { if (options[prop]) return options[prop]; return defaults[prop]; } }; function showSaturday(){ $(".saturday-sponsored").fadeToggle(); $(".saturday-row").fadeToggle().css('display','flex'); } $(".menu-hamburger").on('click',function(){ $(".menu-bar ul").slideToggle(); }); $("[data-link]").on('click',function(){ window.location.href = $(this).attr('data-link'); }); function isElementInViewport(el) { var top = el.offsetTop; var left = el.offsetLeft; var width = el.offsetWidth; var height = el.offsetHeight; while (el.offsetParent) { el = el.offsetParent; top += el.offsetTop; left += el.offsetLeft; } return (top < (window.pageYOffset + window.innerHeight) && left < (window.pageXOffset + window.innerWidth) && (top + height) > window.pageYOffset && (left + width) > window.pageXOffset); } function lazyLoadImages() { var images = document.querySelectorAll("img[data-src]"), item; [].forEach.call(images, function(item) { if (isElementInViewport(item)) { data = item.getAttribute("data-src"); item.setAttribute("src", data); item.removeAttribute("data-src"); } }); } window.onscroll = function() { lazyLoadImages(); }; lazyLoadImages(); function fbShare() { url = document.URL; window.open("http://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400"); } function twitShare() { url = document.URL; title = document.getElementsByTagName("title")[0].innerHTML; window.open("http://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400"); } function whatsappShare() { url = document.URL; if (isMobile()) { window.location.href = "whatsapp://send?text=" + url; } else { window.open('https://api.whatsapp.com/send?text=' + url); } } function isMobile() { const toMatch = [/Android/i, /webOS/i, /iPhone/i, /iPad/i, /iPod/i, /BlackBerry/i, /Windows Phone/i]; return toMatch.some((toMatchItem)=>{ return navigator.userAgent.match(toMatchItem); } ); } function viberShare() { url = document.URL; window.location.href = 'viber://forward?text=' + url; } function messengerShare() { url = document.URL; if (isMobile()) { window.location.href = "fb-messenger://share/?link=" + url; } else { FB.ui({ method: 'send', link: url, redirect_uri: url }); } } </script>
