<?php
    if(segment(0, isLang()) !== "forums") {
        if(segment(0, isLang()) !== "codes" and segment(1, isLang()) !== "add") {
?>
            <aside>
                <section class="social">
                    <a href="https://twitter.com/#!/codejobs" target="_blank"><img class="no-border" title="<?php echo __("Follow us on Twitter"); ?>" alt="<?php echo __("Follow us on Twitter"); ?>" src="<?php echo $this->themePath; ?>/images/social/twitter.png"></a>
                    
                    <a href="http://www.youtube.com/codejobs" target="_blank"><img class="no-border" title="<?php echo __("Subscribe to our Youtube channel"); ?>" alt="<?php echo __("Suscribe to our channel"); ?>" src="<?php echo $this->themePath; ?>/images/social/youtube.png"></a>
                    
                    <a href="<?php echo path("blog/rss"); ?>" target="_blank"><img class="no-border" title="<?php echo __("Follow us with RSS"); ?>" alt="<?php echo __("Follow us with RSS"); ?>" src="<?php echo $this->themePath; ?>/images/social/rss.png"></a>
                </section>

                <div class="line"></div>

                <section class="transmission">
                    <header>
                        <h3><?php echo __("Live broadcast"); ?></h3>
                    </header>

                    <p class="text"><?php echo __("Every Saturday in"); ?> <a href="<?php echo path("tv"); ?>">CodeJobs TV!</a></p> 

                    <ul>
                        <li>
                            <img title="México" alt="México" src="<?php echo $this->themePath; ?>/images/flags/11am.png">
                            <span class="schedule1">11:00 am</span>
                        </li>

                        <li>
                            <img title="Colombia-Perú-Ecuador-Panamá" alt="Colombia-Perú-Ecuador-Panamá" src="<?php echo $this->themePath; ?>/images/flags/12pm.png">
                            <span class="schedule2">12:00 pm</span>
                        </li>

                        <li>
                            <img title="Venezuela" alt="Venezuela" src="<?php echo $this->themePath; ?>/images/flags/1230pm.png">
                            <span class="schedule1">12:30 pm</span>
                        </li>

                        <li>
                            <img title="Chile-Argentina-Paraguay" alt="Chile-Argentina-Paraguay" src="<?php echo $this->themePath; ?>/images/flags/02pm.png">
                            <span class="schedule3">02:00 pm</span>
                        </li>

                        <li>
                            <img title="Uruguay" alt="Uruguay" src="<?php echo $this->themePath; ?>/images/flags/03pm.png">
                            <span class="schedule4">03:00 pm</span>
                        </li>

                        <li>
                            <img title="España" alt="España" src="<?php echo $this->themePath; ?>/images/flags/06pm.png">
                            <span class="schedule4">06:00 pm</span>
                        </li>
                    </ul>
                </section>

                <section class="polls">
                    <?php $this->execute("Polls_Controller", "last"); ?>
                </section>

                <?php
                    if(get("production")) {
                    ?>
                        <section class="ads">
                            <script type="text/javascript"><!--
                            google_ad_client = "ca-pub-4006994369722584";
                            /* CodeJobs.biz Bloque */
                            google_ad_slot = "4451171480";
                            google_ad_width = 336;
                            google_ad_height = 280;
                            //-->
                            </script>
                            <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                        </section>
                    <?php
                    }
                    ?>
            </aside>
    <?php
        }
    }