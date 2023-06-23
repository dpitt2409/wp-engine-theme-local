<?php 
/**
 * Block Name: Article
 */

 $id = 'article_'. $block['id'];
 $classes = 'article';
 
 if( !empty($block['className']) ) {
     $classes .= sprintf( ' %s', $block['className'] );
 }

// Author info
$author = get_field('author_info');
$authorName = $author['author_name'];
$authorSubtitle = $author['author_subtitle'];
$authorImage = $author['author_image'];

$mainContent = get_field('main_content');

// Recent articles -- hardcoded for now per David's request
$articleTitle = '5 Ways to Boost RFP Proposal Sales';
$readTime = '5 minutes';

// Demo CTA hardcoded
$demoCopy = 'Book a demo for the most powerful SLED data platform, ever.';
$demoLink = 'https://www.google.com';
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>">
    <div class="main">
        <div class="author">      
            <?php if($authorImage):?>
                <div class="author__image">
                    <img src="<?php echo $authorImage['url'];?>" alt="<?php echo $authorImage['alt'];?>" />
                </div>
            <?php endif;?>
            <div>
                <p class="author__name"><?php echo $authorName;?></p>
                <p><?php echo $authorSubtitle;?></p>
            </div>
        </div>

        <div class="main-content">
            <?php echo $mainContent;?>
        </div>
    </div>

    <div class="sidebar">
        <!-- Recent articles block -->
        <div>
            <p class="sidebar__title">Recent Articles</p>

            <div class="recent-article">
                <div>
                    <p class="recent-article__title"><?php echo $articleTitle;?></p>
                    <span>
                        <!-- <img src="" /> -->
                        <p class="recent-article__time"><?php echo $readTime;?></p>
                    </span>
                </div>

                <img class="recent-article__image" src="https://placehold.co/400" />
            </div>

            <div class="recent-article">
                <div>
                    <p class="recent-article__title"><?php echo $articleTitle;?></p>
                    <span>
                        <!-- <img src="" /> -->
                        <p class="recent-article__time"><?php echo $readTime;?></p>
                    </span>
                </div>

                <img class="recent-article__image" src="https://placehold.co/400" />
            </div>

            <div class="recent-article">
                <div>
                    <p class="recent-article__title"><?php echo $articleTitle;?></p>
                    <span>
                        <!-- <img src="" /> -->
                        <p class="recent-article__time"><?php echo $readTime;?></p>
                    </span>
                </div>

                <img class="recent-article__image" src="https://placehold.co/400" />
            </div>
        </div>

        <a href="/" class="link">Continue reading the MarketEdge Blog</a>

        <div class="demo-cta">
            <p class="demo-cta__copy"><?php echo $demoCopy;?></p>
            <a class="demo-cta__link" href="<?php echo $demoLink;?>">Book Now</a>
        </div>

    </div>
</section>