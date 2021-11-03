<?php
$download_thumbnail_image = get_sub_field('thumbnail_image');
$download_type = get_sub_field('type');
$download_source = get_sub_field('source');
$download_title = get_sub_field('title');
$download_description = get_sub_field('description');
$download_file = get_sub_field('download_file');
$download_external_url = get_sub_field('external_url');

if($download_file || $download_external_url):
    if($download_file):
        $download_url = $download_file;
    else:
        $download_url = $download_external_url;
    endif;
    ?>
    <a href="<?php echo esc_url($download_url);?>" target="_blank" class="download-link">
        <div class="download">
            <div class="download-icon">
                <?php
                    if($download_thumbnail_image):
                        ?>
                        <img src="<?php echo $download_thumbnail_image['url'];?>" alt="<?php echo $download_type;?> download"/>
                        <?php
                    elseif($download_type === 'ppt'):
                        get_template_part( 'partials/partial', 'download-ppt' );
                    elseif($download_type === 'webinar'):
                        get_template_part( 'partials/partial', 'download-webinar' );
                    elseif($download_type === 'webpage'):
                        get_template_part( 'partials/partial', 'download-webpage' );
                    elseif($download_type === 'video'):
                        get_template_part( 'partials/partial', 'download-webinar' );
                    else:
                        get_template_part( 'partials/partial', 'download-svg' );
                    endif;
                ?>
                </div>
            <div class="download-content">
                <?php
                if($download_source):
                    ?>
                    <h3><?php echo $download_source;?></h3>
                    <?php
                elseif($download_type):
                    $display_download_type = $download_type;
                    if ($download_type == "casestudy") {
                        $display_download_type = "Case Study";
                    }
                    elseif ($download_type == "datasheet") {
                        $display_download_type = "Data Sheet";
                    }
                    elseif ($download_type == "solutionbrief") {
                        $display_download_type = "Solution Brief";
                    }
                    elseif ($download_type == "techspec") {
                        $display_download_type = "Technical Specification";
                    }
                    elseif ($download_type == "webpage") {
                        $display_download_type = "Web page";
                    }
                    elseif ($download_type == "whitepaper") {
                        $display_download_type = "White Paper";
                    }
                    ?>
                    <h3><?php echo $display_download_type;?></h3>
                    <?php
                endif;
                ?>
                <h2><?php echo $download_title;?></h2>
                <p><?php echo $download_description;?></p>
            </div>
        </div>
    </a>
    <?php
endif;