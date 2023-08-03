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
    
    <div class="detail-header-container">
        <div style="background-color:<?=$model->logoBackground?>" class="detail-logo" ><img  src="<?=$model->logo?>" alt=""></div>
        <div class="company-container">
        <h3 class="company-name"><?=$model->company;?></h3>
        <span style="color:#9DAEC2" ><?=$model->company?>.com</span>
        </div>
        <a  a href="<?=$model->website?>" target="blank"><div class="detail-comapny-site">Company Site</div></a>
    </div>
</header>

<main>
    <section class="details-main">
        <div class="details-main-title">
            <div>
        <span style="color: #9DAEC2"><?=$model->postedAt?> <b>.<b> <?=$model->contract?></span>
        <h2 class="position"><?=$model->position?></h2>
        <span style="color:#5964E0;" ><?=$model->location?></span><br>
        </div>

        <a href="<?=$model->apply?>" target="blank"><button class="apply-button">Apply Now</button></a>
        </div>




        <article class="details-description">
            <p><?=$model->description?></p>
        </article>

        <h3 class="details-header">Requirements</h3>
        <article class="details-requirement">
        <p><?=$model->requirements->content?></p>
        </article>

        <ul class="details-list">
            <?php foreach($model->requirements->items as $list) :?>
                <li><?=$list?></li>
            <?php endforeach?>
        </ul>

        <h3 class="details-header">What You Will Do</h3>

        <article class="details-requirement">
        <p><?=$model->role->content?></p>
        </article>

        <ol class="details-list">
            <?php foreach($model->role->items as $list) :?>
                <li><?=$list?></li>
            <?php endforeach?>
        </ol>    
    </section>
</main>

<footer>
    <div class="apply-footer">
        <div class="footer-detail">
            <p><?=$model->position?></p>
            <p style="color: #6E8098">So Digital Inc.</p>
        </div>
        <a href="<?=$model->apply?>" target="blank"><button class="apply-button-footer">Apply Now</button></a>
    </div>


</footer>