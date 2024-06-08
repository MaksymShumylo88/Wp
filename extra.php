<footer>
        <div class="container container-bottom-section">
            <div class="inner-footer">
            <a href="" class="logo">
                <img src="<?php echo get_field('ebook_logo')['url']; ?>" alt="logo">
            </a>
            <ul class="social-network">
                <?php
								if (get_field('facebook_url', 'option') !== NULL && get_field('facebook_url', 'option') !== "") {
							?>
                <li>
                    <a target="_blank" href="<?php the_field('facebook_url', 'option'); ?>">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <?php
								}
								if (get_field('twitter_url', 'option') !== NULL && get_field('twitter_url', 'option') !== "") {
							?>
                <li>
                    <a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <?php
								}
								if (get_field('instagram_url', 'option') !== NULL && get_field('instagram_url', 'option') !== "") {
							?>
                <li>
                    <a target="_blank" href="<?php the_field('instagram_url', 'option'); ?>">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <?php
								}
								if (get_field('linkedin_url', 'option') !== NULL && get_field('linkedin_url', 'option') !== "") {
							?>
                <li>
                    <a target="_blank" href="<?php the_field('linkedin_url', 'option'); ?>">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <?php
								}
							?>
            </ul>
            </div>
        </div>
    </footer>