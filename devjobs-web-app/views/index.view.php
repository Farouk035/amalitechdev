
<header>
        <div class="header-container">  
            <svg class="header-bg"></svg>          
            <div class="logo-toggle-align">
                <h1 class="logo">devjobs</h1>
                <div class="toggle-container">
                <img src="assets/images/desktop/icon-sun.svg" alt="">
                <input type="checkbox" id="darkMode" class="toggle-bar">
                <img src="assets/images/desktop/icon-moon.svg" alt="">
            </div>
        </div>
        
            <form action="" method="GET" class="form-container" id="searchForm">
                <div class="search-bar">
                    <img class="search-voilet-icon" src="assets/images/desktop/icon-search voliet.svg" alt="">
                    <img src="assets/images/mobile/icon-filter.svg" class="filter-icon">
                    <button class="search-icon"><img src="assets/images/desktop/icon-search.svg" alt=""></button>
                    <input type="text"  name="search" class="search"  placeholder="Filter by title...">
                </div>

                <div class="location-bar">
                    <img src="assets/images/desktop/icon-location.svg" alt="" class="location-icon">
                    <input type="text" name="q1" class="location" placeholder="Filter by location...">
                </div>

                <div class="full">
                    <input value="Full Time" name="fulltime" type="checkbox" class="full-check">
                    <label for="checkbox">Full Time</label>
                    <button  class="sendbtn">Search</button>
                </div>
            </div>
            </form>  
    </header>

    <main>
        <div class="cards-grid">
            <?php foreach($model as $info) :?>
                  <div class="cards">
                  <a href="details.php?company=<?=$info->company?>">
                      <div class="job-card">
                      <img style="background-color:<?=$info->logoBackground?>" class="job-logo" src="<?=$info->logo?>" alt="">
                      <label for="scoot" class="job-time"><?=$info->postedAt?> <b>.</b> <?=$info->contract?></label>
                      <h2 class="job-position"><?=$info->position?></h2>
                      <p class="company-name"><?=$info->company?></p>
                      <p class="location"><?=$info->location?></p>
                      </div>
                  </a>
              </div>          
            <?php endforeach?>   
        </div>     
    <div class="load-more">
        <button class="load">Load More</button>
    </div>  
    
