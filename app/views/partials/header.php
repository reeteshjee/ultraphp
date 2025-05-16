<div class="page-progressbar"></div>
<div class="header">
   <div class="container">
      <div>
         <a href="https://kheladi.com/"> <img width="280" src="https://kheladi.com/public/assets/images/logo.png"> </a> 
         <div class="date-holder mt-2 text-center"> &#2350;&#2366;&#2328; &#2407;&#2412;, २०८१ &#2348;&#2369;&#2343;&#2348;&#2366;&#2352; <span> | </span> <span id="clock"> ०२:००:१२ </span> </div>
      </div>
      <div class="sponsored-wrap d-none d-md-block" style="width:50%;"> <a target="_blank" href="https://www.royalenfield.com/np/en/motorcycles/hunter-350/"> <img class="w-100" src="https://kheladi.com/public/sponsored/1080x150.gif"> </a> </div>
   </div>
</div>
<div class="d-block d-md-none">
      <a target="_blank" href="https://www.royalenfield.com/np/en/motorcycles/hunter-350/">
         <img class="w-100" src="https://kheladi.com/public/sponsored/1080x150.gif">
      </a>
</div>
<div class="menu-bar">
   <div class="container">
      <div class="menu-hamburger"> <i class="fa fa-bars"></i> </div>
      <ul class="main-menu">
         <li class="home"> <a href="https://kheladi.com/home"> <img width="34" src="https://kheladi.com/public/assets/images/favicon.png"> </a> </li>
         <li> <a href="/category/football"> फुटबल </a> </li>
         <li> <a href="/category/cricket"> क्रिकेट </a> </li>
         <li> <a href="/category/volleyball"> भलिबल </a> </li>
         <li> <a href="/category/administration"> खेल प्रशासन </a> </li>
         <li> <a href="/category/event"> उत्सव </a> </li>
         <li> <a href="/saturday-list"> शनिबारको दिन </a> </li>
         <li> <a href="/category/others"> अन्य </a> </li>
         <li> <a href="/category/basketball"> बास्केटबल </a> </li>
         <li> <a href="/category/school-sports"> विध्यालय </a> </li>
         <li> <a href="/events"> विशेषांक </a> </li>
         <li class="float-end search-wrap" style="padding:14px 0;">
            <form action="/search" method="get">
               <div class="search-container">
                  <div class="searchbox"> <input type="text" name="q" class="search-box" placeholder="Search..."> </div>
                  <span class="search-icon"> <i class="fa fa-search" style="color:#fff;"></i> </span> 
               </div>
            </form>
         </li>
      </ul>
   </div>
</div>

<script type="text/javascript"> 
   function updateTime() {
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds();
      if (hours < 10) {
         hours = '0' + hours;
      }
      if (minutes < 10) {
         minutes = '0' + minutes;
      }
      if (seconds < 10) {
         seconds = '0' + seconds;
      }
      var timeString = hours + ':' + minutes + ':' + seconds;
      document.getElementById('clock').textContent = getNepaliNumber(timeString);
   }
   setInterval(updateTime, 1000);

   function getNepaliNumber(str) {
      str = str.replace(/0/g, '०');
      str = str.replace(/1/g, '१');
      str = str.replace(/2/g, '२');
      str = str.replace(/3/g, '३');
      str = str.replace(/4/g, '४');
      str = str.replace(/5/g, '५');
      str = str.replace(/6/g, '६');
      str = str.replace(/7/g, '७');
      str = str.replace(/8/g, '८');
      str = str.replace(/9/g, '९');
      return str;
   }
   document.querySelector('.search-icon').addEventListener('click', function () {
      const searchBox = document.querySelector('.search-box');
      searchBox.classList.toggle('open');
      const searchBox1 = document.querySelector('.searchbox');
      searchBox1.classList.toggle('open');
   });
</script> 