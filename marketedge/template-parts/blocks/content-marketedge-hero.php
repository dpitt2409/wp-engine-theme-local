<?php 
/**
 * Block Name: Hero
 */

// create id attribute for specific styling
$classes = 'hero large-hero';
$id = 'hero_'. $block['id'];
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}

$background_image = get_field('background_image');
$background_color = get_field('background_color');
$heading = get_field('heading');
$content = get_field('content');
$cta = get_field('cta');
?>
<section id="<?php echo $id; ?>" class="<?php echo $classes;?>" style="background-color: <?php echo $background_color;?>;background-image:url(<?php echo $background_image['url'];?>);background-size:cover;background-repeat:no-repeat;background-position: center;">  
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php if($heading): ?>
                    <h1><?php echo $heading;?></h1>
                <?php endif; ?>
                <?php if($content): ?>
                    <p><?php echo $content;?></p>
                <?php endif; ?>
                <?php if($cta): ?>
                    <a class="btn btn-primary" href="<?php echo $cta['url'];?>" target="<?php echo $cta['target'];?>"><?php echo $cta['title'];?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <svg width="729px" height="551px" viewBox="0 0 729 551" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>hero-illustration</title>
        <defs>
            <linearGradient x1="88.2239347%" y1="44.1511056%" x2="-45.5108794%" y2="64.5260435%" id="linearGradient-1">
                <stop stop-color="#E2C46B" offset="0%"></stop>
                <stop stop-color="#387DB3" offset="41.37%"></stop>
                <stop stop-color="#010101" offset="89.51%"></stop>
                <stop stop-color="#7D7D7D" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="88.2357586%" y1="44.1519492%" x2="-45.4510195%" y2="64.5363733%" id="linearGradient-2">
                <stop stop-color="#E2C46B" offset="0%"></stop>
                <stop stop-color="#387DB3" offset="41.37%"></stop>
                <stop stop-color="#010101" offset="89.51%"></stop>
                <stop stop-color="#7D7D7D" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="88.2958933%" y1="44.1989899%" x2="-45.3177754%" y2="64.5017242%" id="linearGradient-3">
                <stop stop-color="#E2C46B" offset="0%"></stop>
                <stop stop-color="#387DB3" offset="41.37%"></stop>
                <stop stop-color="#010101" offset="89.51%"></stop>
                <stop stop-color="#7D7D7D" offset="100%"></stop>
            </linearGradient>
            <radialGradient cx="50.1535098%" cy="50.1310054%" fx="50.1535098%" fy="50.1310054%" r="41.0486654%" gradientTransform="translate(0.501535,0.501310),scale(1.000000,0.749046),rotate(30.001284),translate(-0.501535,-0.501310)" id="radialGradient-4">
                <stop stop-color="#9D99CA" offset="1.353971%"></stop>
                <stop stop-color="#D3C29F" stop-opacity="0.9643" offset="3.572897%"></stop>
                <stop stop-color="#868476" stop-opacity="0" offset="98.96%"></stop>
            </radialGradient>
        </defs>
        <g id="Website-Blueprint" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Website/Homepage" transform="translate(-711.000000, -82.000000)">
                <g id="Hero" transform="translate(0.000000, 82.149305)">
                    <g id="hero-illustration" transform="translate(711.214317, 0.000000)">
                        <polygon id="Path" fill="#183744" fill-rule="nonzero" points="728.785683 0 728.785683 550 0 550 455 0"></polygon>
                        <g id="data-insights_2_" transform="translate(44.300196, 45.048750)">
                            <g id="pipes" opacity="0.5443" transform="translate(122.206700, 36.685300)">
                                <g id="Line_5_" transform="translate(34.400000, 149.100000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2">
                                    <line x1="0.5" y1="0" x2="0.5" y2="108.1" id="path-1_4_"></line>
                                </g>
                                <g id="Path-20_35_" transform="translate(229.900000, 74.400000)">
                                    <path d="M-2.27373675e-13,0 L-2.27373675e-13,80 C-2.27373675e-13,85.2 4.2,89.4 9.4,89.4 L18.1,89.4 C23.3,89.4 27.5,93.6 27.5,98.8 L27.5,166.2 L27.5,166.2" id="path-3_5_"></path>
                                    <path d="M-2.27373675e-13,0 L-2.27373675e-13,80 C-2.27373675e-13,85.2 4.2,89.4 9.4,89.4 L18.1,89.4 C23.3,89.4 27.5,93.6 27.5,98.8 L27.5,183.2 L27.5,166.1" id="path-3_4_" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <g id="Path-20_34_" transform="translate(275.600000, 41.400000)">
                                    <path d="M3,0 L7.8,0 C13,0 17.2,4.2 17.2,9.4 L17.2,67.7 C17.2,72.4 13.4,76.3 8.6,76.3 C3.9,76.3 0,80.1 0,84.9 L0,199.2 L0,199.2" id="path-5_5_"></path>
                                    <path d="M3,0 L7.8,0 C13,0 17.2,4.2 17.2,9.4 L17.2,67.7 C17.2,72.4 13.4,76.3 8.6,76.3 C3.9,76.3 0,80.1 0,84.9 L0,216 L0,199.1" id="path-5_4_" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <g id="Path-20_33_" transform="translate(189.100000, 73.100000)">
                                    <path d="M30.2,-1.42108547e-14 L30.2,94.4 C30.2,99.6 26,103.8 20.8,103.8 L-2.27373675e-13,103.8 L-2.27373675e-13,103.8" id="path-7_5_"></path>
                                    <path d="M30.2,-1.42108547e-14 L30.2,94.4 C30.2,99.6 26,103.8 20.8,103.8 L-2.27373675e-13,103.8 L-2.27373675e-13,103.8" id="path-7_4_" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <g id="Path-20_32_" transform="translate(86.613288, 136.150000) scale(-1, 1) translate(-86.613288, -136.150000) translate(69.713288, 15.000000)">
                                    <g id="Group">
                                        <path d="M0,-2.13162821e-14 L0,141.5 C0,146.7 4.2,150.9 9.4,150.9 L24.4,150.9 C29.6,150.9 33.8,155.1 33.8,160.3 L33.8,237 L33.8,237" id="path-9_5_"></path>
                                    </g>
                                    <g id="Group" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2">
                                        <path d="M0,-2.13162821e-14 L0,141.5 C0,146.7 4.2,150.9 9.4,150.9 L24.4,150.9 C29.6,150.9 33.8,155.1 33.8,160.3 L33.8,242.3 L33.8,237" id="path-9_4_"></path>
                                    </g>
                                </g>
                                <g id="Path-20_31_" transform="translate(117.814714, 123.300000) scale(-1, 1) translate(-117.814714, -123.300000) translate(90.014714, 0.000000)">
                                    <g id="Group">
                                        <path d="M16.5,5.77315973e-15 L9.4,5.77315973e-15 C4.2,5.77315973e-15 0,4.2 0,9.4 L0,65 C0,70.2 4.2,74.4 9.4,74.4 L13.5,74.4 C18.7,74.4 22.9,78.6 22.9,83.8 L22.9,195.8 C22.9,201 27.1,205.2 32.3,205.2 L46.2,205.2 C51.4,205.2 55.6,209.4 55.6,214.6 L55.6,240.6 L55.6,240.6" id="path-11_5_"></path>
                                    </g>
                                    <g id="Group" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2">
                                        <path d="M16.5,5.77315973e-15 L9.4,5.77315973e-15 C4.2,5.77315973e-15 0,4.2 0,9.4 L0,65 C0,70.2 4.2,74.4 9.4,74.4 L13.5,74.4 C18.7,74.4 22.9,78.6 22.9,83.8 L22.9,195.8 C22.9,201 27.1,205.2 32.3,205.2 L46.2,205.2 C51.4,205.2 55.6,209.4 55.6,214.6 L55.6,246.6 L55.6,240.6" id="path-11_4_"></path>
                                    </g>
                                </g>
                                <g id="Path-20_30_" transform="translate(9.850000, 203.400000) scale(-1, 1) translate(-9.850000, -203.400000) translate(0.000000, 149.000000)">
                                    <g id="Group" transform="translate(0.000000, -0.000000)">
                                        <path d="M0,0 L0,39.6 C0,44.8 4.2,49 9.4,49 L10.3,49 C15.5,49 19.7,53.2 19.7,58.4 L19.7,103 L19.7,103" id="path-13_5_"></path>
                                    </g>
                                    <g id="Group" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2">
                                        <path d="M0,-2.84217094e-14 L0,39.6 C0,44.8 4.2,49 9.4,49 L10.3,49 C15.5,49 19.7,53.2 19.7,58.4 L19.7,108.8 L19.7,103.1" id="path-13_4_"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="dots" transform="translate(122.206700, 36.685300)" stroke="#FFFFFF" stroke-dasharray="0,60" stroke-linecap="round" stroke-width="2">
                                <line x1="34.9" y1="149.1" x2="34.9" y2="249.9" id="Line_4_"></line>
                                <path d="M229.9,74.4 L229.9,154.4 C229.9,159.6 234.1,163.8 239.3,163.8 L248,163.8 C253.2,163.8 257.4,168 257.4,173.2 L257.4,246.9" id="Path-20_29_"></path>
                                <path d="M278.6,41.4 L283.4,41.4 C288.6,41.4 292.8,45.6 292.8,50.8 L292.8,109.1 C292.8,113.8 289,117.7 284.2,117.7 C279.5,117.7 275.6,121.5 275.6,126.3 L275.6,246.7 L275.6,240.7" id="Path-20_28_"></path>
                                <path d="M219.3,73.1 L219.3,167.5 C219.3,172.7 215.1,176.9 209.9,176.9 L189.1,176.9 L189.1,176.9" id="Path-20_27_"></path>
                                <path d="M103.6,15 L103.6,156.5 C103.6,161.7 99.4,165.9 94.2,165.9 L79.2,165.9 C74,165.9 69.8,170.1 69.8,175.3 L69.8,252 L69.8,252" id="Path-20_26_"></path>
                                <path d="M129.1,0 L136.2,0 C141.4,0 145.6,4.2 145.6,9.4 L145.6,65 C145.6,70.2 141.4,74.4 136.2,74.4 L132.2,74.4 C127,74.4 122.8,78.6 122.8,83.8 L122.8,195.8 C122.8,201 118.6,205.2 113.4,205.2 L99.5,205.2 C94.3,205.2 90.1,209.4 90.1,214.6 L90.1,240.6 L90.1,240.6" id="Path-20_25_"></path>
                                <path d="M19.7,149 L19.7,188.6 C19.7,193.8 15.5,198 10.3,198 L9.4,198 C4.2,198 0,202.2 0,207.4 L0,252 L0,252" id="Path-20_24_"></path>
                            </g>
                            <g id="data-cards">
                                <g id="Card_2_" transform="translate(102.006700, 121.002500)">
                                    <path d="M4.7,0 L105.6,0 C108.2,0 110.3,2.1 110.3,4.7 L110.3,60.1 C110.3,62.7 108.2,64.8 105.6,64.8 L4.7,64.8 C2.1,64.8 0,62.7 0,60.1 L0,4.7 C0,2.1 2.1,0 4.7,0 Z" id="Rectangle_32_" fill="url(#linearGradient-1)" opacity="0.7702"></path>
                                    <g id="Group_9_" transform="translate(11.278787, 11.058600)">
                                        <g id="Donut-Chart_8_" transform="translate(0.200000, 1.861231)" fill="#E5E0D9" fill-rule="nonzero">
                                            <g id="Oval_532_" opacity="0.6975">
                                                <path d="M9.2,18.4 C4.1,18.4 0,14.3 0,9.2 C0,4.1 4.1,0 9.2,0 C14.3,0 18.4,4.1 18.4,9.2 C18.3,14.3 14.2,18.4 9.2,18.4 Z M9.2,3.1 C5.8,3.1 3,5.9 3,9.3 C3,12.7 5.8,15.5 9.2,15.5 C12.6,15.5 15.4,12.7 15.4,9.3 C15.3,5.8 12.6,3.1 9.2,3.1 Z" id="Shape"></path>
                                            </g>
                                            <path d="M18.3,9.3 L15.3,9.3 C15.3,5.9 12.5,3.1 9.1,3.1 L9.1,0.1 C14.2,0.1 18.3,4.2 18.3,9.3 Z" id="Path"></path>
                                        </g>
                                        <g id="Text_8_" opacity="0.7155" transform="translate(0.000000, 32.082800)" fill="#E5E0D9">
                                            <rect id="Rectangle_31_" x="0" y="0" width="87.7" height="2.3"></rect>
                                            <rect id="Rectangle-Copy-2_14_" x="0" y="8.2" width="70.2" height="2.3"></rect>
                                        </g>
                                        <g id="Graph_2_" transform="translate(35.808090, 0.000000)" stroke="#FFFFFF">
                                            <polyline id="Path-18_8_" opacity="0.4869" points="1.13686838e-13 1.42108547e-14 1.13686838e-13 22.3 51.9 22.3"></polyline>
                                            <line x1="1.13686838e-13" y1="11.1" x2="51.9" y2="11.1" id="Path-18_7_" opacity="0.4869"></line>
                                            <line x1="25.9" y1="1.42108547e-14" x2="25.9" y2="22.3" id="Path-18_6_" opacity="0.4869"></line>
                                            <path d="M1.13686838e-13,16.8 C5.5,12.3 9.5,10.7 12.1,11.9 C16,13.8 27.1,25.5 34.9,15.7 C42.7,5.9 48.2,1.7 51.9,1.7" id="Path-19_2_" stroke-linecap="round"></path>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group-2_6_" transform="translate(303.341156, 52.519699)">
                                    <path d="M4.7,0 L92.8,0 C95.4,0 97.5,2.1 97.5,4.7 L97.5,52.6 C97.5,55.2 95.4,57.3 92.8,57.3 L4.7,57.3 C2.1,57.3 -1.13686838e-13,55.2 -1.13686838e-13,52.6 L-1.13686838e-13,4.7 C-1.13686838e-13,2.1 2.1,0 4.7,0 Z" id="Rectangle_30_" fill="url(#linearGradient-2)" opacity="0.7702"></path>
                                    <g id="Group_8_" transform="translate(12.065700, 11.300000)" fill="#E5E0D9">
                                        <g id="Donut-Chart_7_" fill-rule="nonzero">
                                            <path d="M17.4,0 C27,0 34.8,7.8 34.8,17.4 C34.8,27 27,34.8 17.4,34.8 C7.8,34.8 0,27 0,17.4 C0,7.8 7.8,0 17.4,0 Z M17.4,6.1 C11.2,6.1 6.1,11.1 6.1,17.4 C6.1,23.7 11.1,28.7 17.4,28.7 C23.7,28.7 28.7,23.7 28.7,17.4 C28.7,11.1 23.6,6.1 17.4,6.1 Z" id="Oval_531_" opacity="0.718"></path>
                                            <path d="M17.4,0 C27,0 34.8,7.8 34.8,17.4 L28.7,17.4 C28.7,17.4 28.7,17.4 28.7,17.4 C28.7,11.2 23.7,6.1 17.4,6.1 L17.4,0 L17.4,0 Z" id="Combined-Shape_6_"></path>
                                        </g>
                                        <g id="Text_7_" opacity="0.7155" transform="translate(41.700000, 20.375000)">
                                            <rect id="Rectangle_29_" x="-1.13686838e-13" y="-7.10542736e-15" width="31.6" height="1.9"></rect>
                                            <rect id="Rectangle-Copy-2_13_" x="-1.13686838e-13" y="6.7" width="25.3" height="1.9"></rect>
                                        </g>
                                        <g id="Text-Copy_5_" opacity="0.7155" transform="translate(41.700000, 5.625000)">
                                            <rect id="Rectangle_28_" x="-1.13686838e-13" y="0" width="31.6" height="1.9"></rect>
                                            <rect id="Rectangle-Copy-2_12_" x="-1.13686838e-13" y="6.7" width="25.3" height="1.9"></rect>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group-2_5_" opacity="0.8454" transform="translate(200.120590, 21.685300)">
                                    <path d="M4.8,-7.10542736e-15 L46.5,-7.10542736e-15 C49.1,-7.10542736e-15 51.2,2.1 51.2,4.7 L51.2,25.3 C51.2,27.9 49.1,30 46.5,30 L4.7,30 C2.1,30 0,27.9 0,25.3 L0,4.7 C0.1,2.1 2.2,-7.10542736e-15 4.8,-7.10542736e-15 Z" id="Rectangle_27_" fill="url(#linearGradient-3)" opacity="0.7702"></path>
                                    <g id="Group_7_" transform="translate(6.416433, 5.890164)" fill="#E5E0D9">
                                        <g id="Donut-Chart_6_" fill-rule="nonzero">
                                            <path d="M9.1,1.77635684e-15 C14.1,1.77635684e-15 18.2,4.1 18.2,9.1 C18.2,14.1 14.1,18.2 9.1,18.2 C4.1,18.2 0,14.1 0,9.1 C0,4.1 4.1,1.77635684e-15 9.1,1.77635684e-15 Z M9.1,3.2 C5.8,3.2 3.2,5.8 3.2,9.1 C3.2,12.4 5.8,15 9.1,15 C12.4,15 15,12.4 15,9.1 C15,5.8 12.4,3.2 9.1,3.2 Z" id="Oval_530_" opacity="0.718"></path>
                                            <path d="M9.1,1.77635684e-15 C14.1,1.77635684e-15 18.2,4.1 18.2,9.1 L15,9.1 L15,9.1 C15,5.8 12.4,3.2 9.1,3.2 L9.1,1.77635684e-15 L9.1,1.77635684e-15 Z" id="Combined-Shape_5_"></path>
                                        </g>
                                        <g id="Text_6_" opacity="0.7155" transform="translate(21.883607, 10.706557)">
                                            <rect id="Rectangle_26_" x="0" y="1.66533454e-16" width="16.6" height="1"></rect>
                                            <rect id="Rectangle-Copy-2_11_" x="0" y="3.5" width="13.3" height="1"></rect>
                                        </g>
                                        <g id="Text-Copy_4_" opacity="0.7155" transform="translate(21.883607, 3.008197)">
                                            <rect id="Rectangle_25_" x="0" y="0" width="16.6" height="1"></rect>
                                            <rect id="Rectangle-Copy-2_10_" x="0" y="3.5" width="13.3" height="1"></rect>
                                        </g>
                                    </g>
                                </g>
                                <g id="Bits_2_" transform="translate(0.000000, -0.000000)" fill="#5F8AA7" fill-rule="nonzero" font-family="Helvetica" font-weight="normal">
                                    <text id="11100" font-size="10.3242">
                                        <tspan x="65.6294" y="208.531">11100</tspan>
                                    </text>
                                    <text id="1010" font-size="12.2013">
                                        <tspan x="85.45" y="233.3517">1010</tspan>
                                    </text>
                                    <text id="1010" font-size="11.346">
                                        <tspan x="-1.13686838e-13" y="248.719">1010</tspan>
                                    </text>
                                    <text id="11100" font-size="11.2627">
                                        <tspan x="321.4882" y="11">11100</tspan>
                                    </text>
                                    <text id="11100" font-size="9.5734">
                                        <tspan x="437.5478" y="116.555">11100</tspan>
                                    </text>
                                    <text id="1010" font-size="14.0784">
                                        <tspan x="367.9795" y="35.3438">1010</tspan>
                                    </text>
                                </g>
                            </g>
                        </g>
                        <g id="Building" transform="translate(39.285683, 183.151250)">
                            <rect id="Rectangle" fill="#FFFFFF" fill-rule="nonzero" x="0" y="306.1" width="566.1" height="15.7"></rect>
                            <g id="Group" transform="translate(283.100000, 3.484699)" fill-rule="nonzero">
                                <path d="M0,0.215300958 L0.2,16.315301 C3.5,15.615301 5.7,18.215301 9.6,18.215301 C13.8,18.215301 14.9,15.015301 18.1,14.515301 C21,14.115301 24.2,15.415301 24.2,15.415301 L24.7,4.01530096 C23.4,2.81530096 21.5,0.715300958 17.9,0.315300958 C14.3,-0.0846990416 12,1.81530096 9.5,1.71530096 C5.1,1.51530096 4.4,-0.684699042 0,0.215300958 Z" id="Path" fill="#868476"></path>
                                <g opacity="0.4" transform="translate(12.600000, 8.061367)" fill="#635652" id="Path">
                                    <path d="M10.4,7.0539343 C9.2,6.6539343 7.3,6.2539343 5.5,6.5539343 C3.2,6.8539343 2,8.5539343 0,9.5539343 C0.9,8.6539343 2.2,7.3539343 3.3,5.4539343 C5.5,1.7539343 6.3,-0.646065697 8.4,0.153934303 C9.7,0.453934303 10.2,4.7539343 10.4,7.0539343 Z"></path>
                                </g>
                                <path d="M9,18.215301 C5.5,18.015301 3.3,15.715301 0.2,16.315301 L0.2,14.715301 C0.3,14.715301 0.4,14.615301 0.6,14.615301 C1.5,14.415301 3.7,14.215301 5.9,15.515301 C7.6,16.515301 8.2,17.615301 9,18.215301 Z" id="Path" fill="#635652" opacity="0.4"></path>
                            </g>
                            <path d="M283.1,43.2 C282.7,43.2 282.4,42.9 282.4,42.5 L282.4,2.4 C282.4,2 282.7,1.7 283.1,1.7 C283.5,1.7 283.8,2 283.8,2.4 L283.8,42.5 C283.8,42.9 283.5,43.2 283.1,43.2 Z" id="Path" fill="#395B63" fill-rule="nonzero"></path>
                            <g id="Group" transform="translate(242.200000, 78.100000)">
                                <line x1="1" y1="5" x2="1" y2="0" id="Path" stroke="#635652" stroke-linecap="round" stroke-linejoin="round"></line>
                                <circle id="Oval" fill="#635652" fill-rule="nonzero" cx="1" cy="1.5" r="1"></circle>
                            </g>
                            <circle id="Oval" fill="#395B63" fill-rule="nonzero" cx="283.1" cy="1.7" r="1.7"></circle>
                            <rect id="Rectangle" fill="#FFFFFF" fill-rule="nonzero" x="2.5" y="144.6" width="561.1" height="2.6"></rect>
                            <g id="Group" opacity="0.4" transform="translate(2.500000, 146.300000)" fill="#868476" fill-rule="nonzero">
                                <rect id="Rectangle" x="0" y="0" width="561.1" height="1"></rect>
                            </g>
                            <rect id="Rectangle" fill="#FFFFFF" fill-rule="nonzero" x="2.5" y="145.5" width="4.1" height="11.1"></rect>
                            <g id="Group" transform="translate(8.800000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.3" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="17" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(43.400000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.7" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="1.13686838e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.4" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.1" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(78.800000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.7" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.4" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.1" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(114.100000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="1.13686838e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.3" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="17" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.5" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(149.500000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.3" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="17" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(184.900000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="1.13686838e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="17" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(220.300000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="-2.27373675e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(255.700000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="-2.27373675e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(291.100000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.7" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.4" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(317.000000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.3" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="17" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(352.400000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="17" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(387.800000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="-2.27373675e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(423.200000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="-2.27373675e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(458.600000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.7" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.4" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.1" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(494.600000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.7" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="0" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.4" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.1" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <g id="Group" transform="translate(530.700000, 145.500000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="28.8" y="0" width="4.1" height="11.1"></rect>
                                <rect id="Rectangle" x="-2.27373675e-13" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="4.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="8.5" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="12.7" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="16.9" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="21.2" y="0" width="1.1" height="11.1"></rect>
                                <rect id="Rectangle" x="25.4" y="0" width="1.1" height="11.1"></rect>
                            </g>
                            <path d="M245.7,81 C245.7,105.1 262.4,124.7 283.1,124.7 C303.8,124.7 320.5,105.1 320.5,81 C320.5,56.9 310.8,39.6 283.1,39.6 C255.4,39.6 245.7,56.9 245.7,81 Z" id="Path" fill="#868476" fill-rule="nonzero"></path>
                            <path d="M320.5,81 C320.5,105.1 303.7,124.7 283.1,124.7 C282.6,124.7 282,124.7 281.5,124.7 C281.4,124.7 281.3,124.7 281.2,124.7 C281,124.7 280.8,124.7 280.6,124.6 C280.4,124.6 280.3,124.6 280.1,124.6 C279.8,124.6 279.4,124.5 279.1,124.5 C278.8,124.5 278.4,124.4 278.1,124.4 C277.4,124.3 276.8,124.2 276.1,124 C275.8,123.9 275.4,123.8 275.1,123.8 C290,120 301.6,105.8 304.1,88 L246.2,88 C245.9,85.8 245.7,83.5 245.7,81.1 C245.7,80.4 245.7,79.7 245.7,79.1 L266,79.1 C293.8,79.1 299.5,44.1 275.8,40.4 C275.6,40.4 275.4,40.3 275.2,40.3 C275.2,40.3 275.3,40.3 275.3,40.3 C275.8,40.2 276.4,40.1 277,40.1 C277.5,40.1 278.1,40 278.6,40 C278.8,40 279.1,40 279.3,39.9 C279.8,39.9 280.3,39.8 280.8,39.8 C281,39.8 281.2,39.8 281.4,39.8 C282,39.8 282.6,39.8 283.2,39.8 C310.8,39.6 320.5,56.9 320.5,81 Z" id="Path" fill="#635652" fill-rule="nonzero" opacity="0.4"></path>
                            <path d="M268.1,63.6 C263.3,71.9 255.8,76.6 251.4,74 C247,71.4 247.3,62.6 252.1,54.3 C256.9,46 264.4,41.3 268.8,43.9 C273.2,46.5 272.9,55.3 268.1,63.6 Z" id="Path" fill="url(#radialGradient-4)" fill-rule="nonzero" opacity="0.7"></path>
                            <rect id="Rectangle" fill="#E5E0D9" fill-rule="nonzero" x="243.7" y="84.9" width="78.8" height="82.6"></rect>
                            <rect id="Rectangle" fill="#E5E0D9" fill-rule="nonzero" x="245.5" y="84.9" width="1.7" height="82.6"></rect>
                            <rect id="Rectangle" fill="#E5E0D9" fill-rule="nonzero" x="4.9" y="164.3" width="556.3" height="157.4"></rect>
                            <rect id="Rectangle" fill="#FFFFFF" fill-rule="nonzero" x="4.9" y="164.3" width="4" height="157.4"></rect>
                            <g id="Group" opacity="0.5" transform="translate(4.900000, 164.300000)" fill="#FFFFFF" fill-rule="nonzero">
                                <rect id="Rectangle" x="1.13686838e-13" y="5.68434189e-14" width="13.4" height="157.4"></rect>
                            </g>
                            <rect id="Rectangle" fill="#D3C29F" fill-rule="nonzero" x="4.9" y="298.3" width="556.3" height="23.4"></rect>
                            <g id="Group" transform="translate(392.700000, 184.900000)" fill-rule="nonzero">
                                <g>
                                    <g transform="translate(-0.000000, 0.000000)">
                                        <g transform="translate(0.422100, 1.499800)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 19.013300) rotate(90.000000) translate(-9.100000, -19.013300) " x="-9.85" y="9.9133" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.200000) rotate(90.000000) translate(-9.136700, -18.200000) " x="-9.0633" y="9.1" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.082500) rotate(90.000000) translate(-9.119100, -36.082500) " x="8.8191" y="26.9825" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.1779" y="1.2002" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.3779" y="1.2002" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.1779 1.2002 1.1779 35.2002 3.2779 35.2002 3.2779 4.7002 16.9779 4.7002 16.9779 1.2002"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9779 4.7002 16.9779 7.0002 9.4779 12.2002 9.4779 9.9002"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9779 9.2002 16.9779 17.4002 9.4779 22.6002 9.4779 14.4002"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.890100) rotate(90.000000) translate(-9.077200, -17.890100) " x="-8.7728" y="17.2901" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.667600) rotate(90.000000) translate(-8.723400, -17.667600) " x="-8.8766" y="17.4176" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.671600) rotate(90.000000) translate(-17.219400, -17.671600) " x="-0.3806" y="17.4216" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(33.100000, 0.000000)">
                                        <g transform="translate(0.353600, 1.508500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973200) rotate(90.000000) translate(-9.100000, -18.973200) " x="-9.85" y="9.8732" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.259900) rotate(90.000000) translate(-9.136700, -18.259900) " x="-9.0633" y="9.1599" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119000, 36.042300) rotate(90.000000) translate(-9.119000, -36.042300) " x="8.819" y="26.9423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2464" y="1.1915" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.3464" y="1.1915" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.2464 1.1915 1.2464 35.1915 3.2464 35.1915 3.2464 4.6915 17.0464 4.6915 17.0464 1.1915"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0464 29.5915 17.0464 35.1915 9.5464 35.1915 9.5464 34.7915"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.850000) rotate(90.000000) translate(-9.077200, -17.850000) " x="-8.7728" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.627400) rotate(90.000000) translate(-8.723400, -17.627400) " x="-8.8766" y="17.3774" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.631500) rotate(90.000000) translate(-17.219400, -17.631500) " x="-0.3806" y="17.3815" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(66.100000, 0.000000)">
                                        <g transform="translate(0.385000, 1.500200)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.950000) rotate(90.000000) translate(-9.100000, -18.950000) " x="-9.85" y="9.85" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.236700) rotate(90.000000) translate(-9.136700, -18.236700) " x="-9.0633" y="9.1367" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.119200) rotate(90.000000) translate(-9.119100, -36.119200) " x="8.8191" y="27.0192" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.215" y="1.1998" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.415" y="1.1998" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.215 1.1998 1.215 35.1998 3.315 35.1998 3.315 4.6998 17.015 4.6998 17.015 1.1998"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.015 7.2998 17.015 12.0998 9.515 17.2998 9.515 12.4998"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.015 22.9998 17.015 24.6998 9.515 29.8998 9.515 28.1998"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.015 5.0998 17.015 6.2998 9.515 11.4998 9.515 10.2998"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.926900) rotate(90.000000) translate(-9.077200, -17.926900) " x="-8.7728" y="17.3269" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.604300) rotate(90.000000) translate(-8.723400, -17.604300) " x="-8.8766" y="17.3543" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.608300) rotate(90.000000) translate(-17.219400, -17.608300) " x="-0.3806" y="17.3583" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(99.100000, 0.000000)">
                                        <g transform="translate(0.416500, 1.505500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 19.013300) rotate(90.000000) translate(-9.100000, -19.013300) " x="-9.85" y="9.9133" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136600, 18.200000) rotate(90.000000) translate(-9.136600, -18.200000) " x="-9.0634" y="9.1" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119000, 36.082500) rotate(90.000000) translate(-9.119000, -36.082500) " x="8.819" y="26.9825" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.1835" y="1.1945" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.3835" y="1.1945" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.1835 1.1945 1.1835 35.1945 3.2835 35.1945 3.2835 4.6945 16.9835 4.6945 16.9835 1.1945"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9835 6.7945 16.9835 9.0945 9.4835 14.2945 9.4835 11.9945"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9835 10.9945 16.9835 14.4945 9.4835 19.6945 9.4835 16.1945"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.890100) rotate(90.000000) translate(-9.077200, -17.890100) " x="-8.7728" y="17.2901" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.667600) rotate(90.000000) translate(-8.723400, -17.667600) " x="-8.8766" y="17.4176" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.671600) rotate(90.000000) translate(-17.219400, -17.671600) " x="-0.3806" y="17.4216" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(132.200000, 0.000000)">
                                        <g transform="translate(0.347800, 1.514200)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973200) rotate(90.000000) translate(-9.100000, -18.973200) " x="-9.85" y="9.8732" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.259900) rotate(90.000000) translate(-9.136700, -18.259900) " x="-9.0633" y="9.1599" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119200, 36.042300) rotate(90.000000) translate(-9.119200, -36.042300) " x="8.8192" y="26.9423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2522" y="1.1858" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="1.2522" y="1.1858" width="15.8" height="4.2"></rect>
                                            <polygon id="Path" fill="#7B6C67" points="8.7522 11.4858 8.7522 13.7858 1.2522 18.9858 1.2522 16.6858"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="8.7522 29.6858 8.7522 24.1858 1.2522 29.3858 1.2522 34.8858"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.850000) rotate(90.000000) translate(-9.077200, -17.850000) " x="-8.7728" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723500, 17.627500) rotate(90.000000) translate(-8.723500, -17.627500) " x="-8.8765" y="17.3775" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.631500) rotate(90.000000) translate(-17.219400, -17.631500) " x="-0.3806" y="17.3815" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                </g>
                                <g transform="translate(0.000000, 59.700000)">
                                    <g transform="translate(-0.000000, 0.000000)">
                                        <g transform="translate(0.429100, 1.506800)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 19.013300) rotate(90.000000) translate(-9.100000, -19.013300) " x="-9.85" y="9.9133" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.200000) rotate(90.000000) translate(-9.136700, -18.200000) " x="-9.0633" y="9.1" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119200, 36.082400) rotate(90.000000) translate(-9.119200, -36.082400) " x="8.8192" y="26.9824" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.1709" y="1.1932" width="15.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.1709 1.1932 1.1709 35.1932 8.9709 35.1932 8.9709 4.6932 16.9709 4.6932 16.9709 1.1932"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9709 15.9932 16.9709 24.1932 9.4709 29.3932 9.4709 21.1932"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.890200) rotate(90.000000) translate(-9.077200, -17.890200) " x="-8.7728" y="17.2902" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723500, 17.667600) rotate(90.000000) translate(-8.723500, -17.667600) " x="-8.8765" y="17.4176" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.671600) rotate(90.000000) translate(-17.219400, -17.671600) " x="-0.3806" y="17.4216" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(33.100000, 0.000000)">
                                        <g transform="translate(0.360600, 1.515500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973200) rotate(90.000000) translate(-9.100000, -18.973200) " x="-9.85" y="9.8732" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136600, 18.259900) rotate(90.000000) translate(-9.136600, -18.259900) " x="-9.0634" y="9.1599" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119000, 36.042300) rotate(90.000000) translate(-9.119000, -36.042300) " x="8.819" y="26.9423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2394" y="1.1845" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.3394" y="1.1845" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.2394 1.1845 1.2394 35.1845 4.8394 35.1845 4.8394 4.6845 17.0394 4.6845 17.0394 1.1845"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0394 29.5845 17.0394 35.1845 9.5394 35.1845 9.5394 34.7845"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0394 8.6845 17.0394 27.3845 9.5394 32.5845 9.5394 13.9845"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077100, 17.850000) rotate(90.000000) translate(-9.077100, -17.850000) " x="-8.7729" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723500, 17.627500) rotate(90.000000) translate(-8.723500, -17.627500) " x="-8.8765" y="17.3775" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.631500) rotate(90.000000) translate(-17.219400, -17.631500) " x="-0.3806" y="17.3815" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(66.100000, 0.000000)">
                                        <g transform="translate(0.392000, 1.507300)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.950000) rotate(90.000000) translate(-9.100000, -18.950000) " x="-9.85" y="9.85" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.236700) rotate(90.000000) translate(-9.136700, -18.236700) " x="-9.0633" y="9.1367" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.119100) rotate(90.000000) translate(-9.119100, -36.119100) " x="8.8191" y="27.0191" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.208" y="1.1927" width="15.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.208 1.1927 1.208 35.1927 3.308 35.1927 3.308 4.6927 17.008 4.6927 17.008 1.1927"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.008 15.9927 17.008 23.2927 9.508 28.4927 9.508 21.1927"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.008 26.5927 17.008 27.7927 9.508 32.9927 9.508 31.7927"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.926800) rotate(90.000000) translate(-9.077200, -17.926800) " x="-8.7728" y="17.3268" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.604200) rotate(90.000000) translate(-8.723400, -17.604200) " x="-8.8766" y="17.3542" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.608300) rotate(90.000000) translate(-17.219400, -17.608300) " x="-0.3806" y="17.3583" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(99.100000, 0.000000)">
                                        <g transform="translate(0.423500, 1.512500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 19.013300) rotate(90.000000) translate(-9.100000, -19.013300) " x="-9.85" y="9.9133" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136600, 18.200000) rotate(90.000000) translate(-9.136600, -18.200000) " x="-9.0634" y="9.1" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119000, 36.082400) rotate(90.000000) translate(-9.119000, -36.082400) " x="8.819" y="26.9824" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.1765" y="1.1875" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="6.3765" y="1.1875" width="2.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="1.1765" y="1.1875" width="15.8" height="3.4"></rect>
                                            <polygon id="Path" fill="#7B6C67" points="16.9765 6.7875 16.9765 9.0875 9.4765 14.2875 9.4765 11.9875"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9765 10.9875 16.9765 14.4875 9.4765 19.6875 9.4765 16.1875"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9765 16.3875 16.9765 17.8875 9.4765 23.1875 9.4765 21.5875"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077100, 17.890200) rotate(90.000000) translate(-9.077100, -17.890200) " x="-8.7729" y="17.2902" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.667600) rotate(90.000000) translate(-8.723400, -17.667600) " x="-8.8766" y="17.4176" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.671600) rotate(90.000000) translate(-17.219400, -17.671600) " x="-0.3806" y="17.4216" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(132.200000, 0.000000)">
                                        <g transform="translate(0.354900, 1.521200)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973200) rotate(90.000000) translate(-9.100000, -18.973200) " x="-9.85" y="9.8732" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.259900) rotate(90.000000) translate(-9.136700, -18.259900) " x="-9.0633" y="9.1599" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.042300) rotate(90.000000) translate(-9.119100, -36.042300) " x="8.8191" y="26.9423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2451" y="1.1788" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" transform="translate(10.652300, 18.250800) rotate(-180.000000) translate(-10.652300, -18.250800) " x="9.2023" y="1.2508" width="2.9" height="34"></rect>
                                            <polygon id="Path" fill="#7B6C67" points="8.7451 11.4788 8.7451 13.7788 1.2451 18.9788 1.2451 16.6788"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="8.7451 29.6788 8.7451 24.1788 1.2451 29.3788 1.2451 34.8788"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.850000) rotate(90.000000) translate(-9.077200, -17.850000) " x="-8.7728" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.627500) rotate(90.000000) translate(-8.723400, -17.627500) " x="-8.8766" y="17.3775" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.631500) rotate(90.000000) translate(-17.219400, -17.631500) " x="-0.3806" y="17.3815" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                </g>
                            </g>
                            <g id="Group" opacity="0.4" transform="translate(4.900000, 164.300000)" fill="#868476" fill-rule="nonzero">
                                <rect id="Rectangle" x="-1.13686838e-13" y="0" width="556.3" height="2.6"></rect>
                            </g>
                            <path d="M561.4,170.4 L4.3,170.4 C3.7,170.4 3.3,170 3.3,169.4 C3.3,168.8 3.7,168.4 4.3,168.4 L561.4,168.4 C562,168.4 562.4,168.8 562.4,169.4 C562.4,170 562,170.4 561.4,170.4 Z" id="Path" fill="#868476" fill-rule="nonzero"></path>
                            <path d="M365.9,184.3 L365.9,168.6 L327,168.6 L309.7,168.6 L199.3,168.6 L199.3,184.3 L241.8,184.3 L241.8,298.4 L199.3,298.4 L199.3,308.8 L365.9,308.8 L365.9,298.4 L327,298.4 L327,184.3 L365.9,184.3 Z M309.7,184.3 L309.7,235.2 L257.5,235.2 L257.5,184.3 L309.7,184.3 Z M257.5,298.4 L257.5,238.6 L309.6,238.6 L309.6,298.4 L257.5,298.4 Z" id="Shape" fill="#868476" fill-rule="nonzero" opacity="0.5"></path>
                            <polygon id="Path" fill="#635652" fill-rule="nonzero" opacity="0.2" points="489 306.1 373.1 306.1 375.4 170.5"></polygon>
                            <rect id="Rectangle" fill="#38312F" fill-rule="nonzero" x="374.7" y="180.7" width="2.5" height="125.4"></rect>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" opacity="0.5" x="374.7" y="170.3" width="9.2" height="135.8"></rect>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" opacity="0.5" x="383.9" y="170.3" width="177.3" height="3"></rect>
                            <g id="Group" opacity="0.3" transform="translate(199.300000, 168.500000)" fill="#868476" fill-rule="nonzero">
                                <rect id="Rectangle" x="0" y="0" width="166.6" height="142.1"></rect>
                            </g>
                            <polygon id="Path" fill="#868476" fill-rule="nonzero" opacity="0.2" points="197.3 161.8 197.3 309.9 4.9 309.9 4.9 301 182.1 301 182.1 161.8"></polygon>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" opacity="0.5" x="195.8" y="167.1" width="173.1" height="9.4"></rect>
                            <rect id="Rectangle" fill="#FFFFFF" fill-rule="nonzero" x="0" y="306.1" width="566.1" height="15.6"></rect>
                            <polygon id="Path" fill="#868476" fill-rule="nonzero" opacity="0.2" points="566.1 310.2 0 310.2 0 313.9 211.6 313.9 211.6 321.7 216.9 321.7 216.9 313.9 378.5 313.9 378.5 321.7 383.7 321.7 383.7 313.9 566.1 313.9"></polygon>
                            <rect id="Rectangle" fill="#D3C29F" fill-rule="nonzero" x="0" y="309.7" width="566.1" height="1.3"></rect>
                            <g id="Group" opacity="0.2" transform="translate(368.000000, 306.100000)" fill="#868476" fill-rule="nonzero">
                                <rect id="Rectangle" x="0" y="0" width="198.1" height="15.6"></rect>
                            </g>
                            <polygon id="Path" fill="#868476" fill-rule="nonzero" points="322.4 90.9 243.7 90.9 241.7 88.1 324.4 88.1"></polygon>
                            <rect id="Rectangle" fill="#38312F" fill-rule="nonzero" x="4.9" y="155.3" width="556.3" height="9.1"></rect>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" x="2.5" y="155.3" width="561.1" height="3.7"></rect>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" x="2.5" y="157.7" width="561.1" height="1.3"></rect>
                            <g id="Group" transform="translate(211.500000, 188.100000)" fill-rule="nonzero">
                                <g transform="translate(0.321800, 1.259600)">
                                    <rect id="Rectangle" fill="#868476" transform="translate(7.636900, 15.819300) rotate(90.000000) translate(-7.636900, -15.819300) " x="-8.1631" y="8.2193" width="31.6" height="15.2"></rect>
                                    <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600000, 15.282500) rotate(90.000000) translate(-7.600000, -15.282500) " x="-7.6" y="7.6825" width="30.4" height="15.2"></rect>
                                    <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.620000, 30.152500) rotate(90.000000) translate(-7.620000, -30.152500) " x="7.37" y="22.5525" width="1" height="15.2"></rect>
                                    <rect id="Rectangle" fill="#38312F" x="1.0782" y="1.0404" width="13.2" height="28.4"></rect>
                                    <rect id="Rectangle" fill="#635652" x="6.1782" y="1.0404" width="1.5" height="28.4"></rect>
                                    <polygon id="Path" fill="#635652" points="14.1782 1.0404 14.1782 29.4404 12.4782 29.4404 12.4782 2.7404 0.9782 2.7404 0.9782 1.0404"></polygon>
                                    <polygon id="Path" fill="#635652" points="14.1782 16.7404 14.1782 29.4404 7.6782 29.4404 7.6782 21.2404"></polygon>
                                    <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600000, 14.982200) rotate(90.000000) translate(-7.600000, -14.982200) " x="-7.3" y="14.4822" width="29.8" height="1"></rect>
                                    <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.296400, 14.788500) rotate(90.000000) translate(-7.296400, -14.788500) " x="-7.4036" y="14.5885" width="29.4" height="1"></rect>
                                    <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(14.384900, 14.700000) rotate(90.000000) translate(-14.384900, -14.700000) " x="-0.3151" y="14.5" width="29.4" height="1"></rect>
                                </g>
                                <rect id="Rectangle" fill="#868476" x="0" y="0" width="15.8" height="3.2"></rect>
                                <rect id="Rectangle" fill="#68675C" x="0" y="2.4" width="15.8" height="1"></rect>
                            </g>
                            <g id="Group" transform="translate(268.100000, 188.100000)" fill-rule="nonzero">
                                <g>
                                    <g transform="translate(0.321600, 1.259900)">
                                        <rect id="Rectangle" fill="#868476" transform="translate(7.636800, 15.819300) rotate(90.000000) translate(-7.636800, -15.819300) " x="-8.1632" y="8.2193" width="31.6" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600000, 15.282400) rotate(90.000000) translate(-7.600000, -15.282400) " x="-7.6" y="7.6824" width="30.4" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.620100, 30.152400) rotate(90.000000) translate(-7.620100, -30.152400) " x="7.3701" y="22.5524" width="1" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#38312F" x="1.0784" y="1.0401" width="13.2" height="28.4"></rect>
                                        <rect id="Rectangle" fill="#635652" x="6.1784" y="1.0401" width="1.5" height="28.4"></rect>
                                        <polygon id="Path" fill="#635652" points="14.1784 1.0401 14.1784 29.4401 13.1784 29.4401 13.1784 2.7401 0.9784 2.7401 0.9784 1.0401"></polygon>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600100, 14.982100) rotate(90.000000) translate(-7.600100, -14.982100) " x="-7.2999" y="14.4821" width="29.8" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.296300, 14.788500) rotate(90.000000) translate(-7.296300, -14.788500) " x="-7.4037" y="14.5885" width="29.4" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(14.384800, 14.700000) rotate(90.000000) translate(-14.384800, -14.700000) " x="-0.3152" y="14.5" width="29.4" height="1"></rect>
                                    </g>
                                    <rect id="Rectangle" fill="#868476" x="0" y="0" width="15.8" height="3.2"></rect>
                                    <rect id="Rectangle" fill="#68675C" x="0" y="2.4" width="15.8" height="1"></rect>
                                </g>
                                <g transform="translate(14.100000, 0.000000)">
                                    <g transform="translate(0.269900, 1.293800)">
                                        <rect id="Rectangle" fill="#868476" transform="translate(7.636900, 15.837000) rotate(90.000000) translate(-7.636900, -15.837000) " x="-8.1631" y="8.237" width="31.6" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600000, 15.200200) rotate(90.000000) translate(-7.600000, -15.200200) " x="-7.6" y="7.6002" width="30.4" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.620100, 30.070200) rotate(90.000000) translate(-7.620100, -30.070200) " x="7.3701" y="22.4702" width="1" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#38312F" x="1.0301" y="1.0062" width="13.2" height="28.4"></rect>
                                        <rect id="Rectangle" fill="#635652" x="5.8301" y="1.0062" width="1.9" height="28.4"></rect>
                                        <polygon id="Path" fill="#635652" points="14.2301 1.0062 14.2301 29.4062 11.7301 29.4062 11.7301 2.7062 1.0301 2.7062 1.0301 1.0062"></polygon>
                                        <polygon id="Path" fill="#635652" points="14.2301 16.7062 14.2301 29.4062 7.7301 29.4062 7.7301 21.2062"></polygon>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600100, 14.900000) rotate(90.000000) translate(-7.600100, -14.900000) " x="-7.2999" y="14.4" width="29.8" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.296300, 14.706300) rotate(90.000000) translate(-7.296300, -14.706300) " x="-7.4037" y="14.5063" width="29.4" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(14.384800, 14.717700) rotate(90.000000) translate(-14.384800, -14.717700) " x="-0.3152" y="14.5177" width="29.4" height="1"></rect>
                                    </g>
                                    <rect id="Rectangle" fill="#868476" x="2.27373675e-13" y="0" width="15.8" height="3.2"></rect>
                                    <rect id="Rectangle" fill="#68675C" x="2.27373675e-13" y="2.4" width="15.8" height="1"></rect>
                                </g>
                            </g>
                            <g id="Group" transform="translate(211.500000, 254.300000)" fill-rule="nonzero">
                                <g transform="translate(0.307800, 1.245600)">
                                    <rect id="Rectangle" fill="#868476" transform="translate(7.636800, 15.819300) rotate(90.000000) translate(-7.636800, -15.819300) " x="-8.1632" y="8.2193" width="31.6" height="15.2"></rect>
                                    <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600000, 15.282400) rotate(90.000000) translate(-7.600000, -15.282400) " x="-7.6" y="7.6824" width="30.4" height="15.2"></rect>
                                    <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.620000, 30.152400) rotate(90.000000) translate(-7.620000, -30.152400) " x="7.37" y="22.5524" width="1" height="15.2"></rect>
                                    <rect id="Rectangle" fill="#38312F" x="1.0922" y="1.0544" width="13.2" height="28.4"></rect>
                                    <rect id="Rectangle" fill="#635652" x="6.1922" y="1.0544" width="1.5" height="28.4"></rect>
                                    <polygon id="Path" fill="#635652" points="14.1922 1.0544 14.1922 29.4544 12.4922 29.4544 12.4922 2.7544 0.9922 2.7544 0.9922 1.0544"></polygon>
                                    <polygon id="Path" fill="#635652" points="14.1922 14.3544 14.1922 29.4544 7.6922 29.4544 7.6922 18.8544"></polygon>
                                    <polygon id="Path" fill="#635652" points="14.1922 11.2544 14.1922 13.0544 7.6922 17.5544 7.6922 15.7544"></polygon>
                                    <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600100, 14.982100) rotate(90.000000) translate(-7.600100, -14.982100) " x="-7.2999" y="14.4821" width="29.8" height="1"></rect>
                                    <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.296300, 14.788500) rotate(90.000000) translate(-7.296300, -14.788500) " x="-7.4037" y="14.5885" width="29.4" height="1"></rect>
                                    <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(14.384800, 14.700000) rotate(90.000000) translate(-14.384800, -14.700000) " x="-0.3152" y="14.5" width="29.4" height="1"></rect>
                                </g>
                                <rect id="Rectangle" fill="#868476" x="0" y="0" width="15.8" height="3.2"></rect>
                                <rect id="Rectangle" fill="#68675C" x="0" y="2.3" width="15.8" height="1"></rect>
                            </g>
                            <g id="Group" transform="translate(339.300000, 188.100000)" fill-rule="nonzero">
                                <g>
                                    <g transform="translate(0.269700, 1.294000)">
                                        <rect id="Rectangle" fill="#868476" transform="translate(7.636800, 15.837000) rotate(90.000000) translate(-7.636800, -15.837000) " x="-8.1632" y="8.237" width="31.6" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600000, 15.200200) rotate(90.000000) translate(-7.600000, -15.200200) " x="-7.6" y="7.6002" width="30.4" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.620000, 30.070200) rotate(90.000000) translate(-7.620000, -30.070200) " x="7.37" y="22.4702" width="1" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#38312F" x="1.0303" y="1.006" width="13.2" height="28.4"></rect>
                                        <rect id="Rectangle" fill="#635652" x="6.2303" y="1.006" width="1.5" height="28.4"></rect>
                                        <polygon id="Path" fill="#635652" points="14.2303 1.006 14.2303 29.406 12.4303 29.406 12.4303 2.706 1.0303 2.706 1.0303 1.006"></polygon>
                                        <polygon id="Path" fill="#635652" points="14.2303 2.206 14.2303 29.406 7.7303 29.406 7.7303 2.206"></polygon>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600100, 14.900000) rotate(90.000000) translate(-7.600100, -14.900000) " x="-7.2999" y="14.4" width="29.8" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.296300, 14.706300) rotate(90.000000) translate(-7.296300, -14.706300) " x="-7.4037" y="14.5063" width="29.4" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(14.384900, 14.717800) rotate(90.000000) translate(-14.384900, -14.717800) " x="-0.3151" y="14.5178" width="29.4" height="1"></rect>
                                    </g>
                                    <rect id="Rectangle" fill="#868476" x="2.27373675e-13" y="0" width="15.8" height="3.2"></rect>
                                    <rect id="Rectangle" fill="#68675C" x="2.27373675e-13" y="2.4" width="15.8" height="1"></rect>
                                </g>
                                <g transform="translate(0.000000, 66.200000)">
                                    <g transform="translate(0.255600, 1.279900)">
                                        <rect id="Rectangle" fill="#868476" transform="translate(7.636800, 15.837100) rotate(90.000000) translate(-7.636800, -15.837100) " x="-8.1632" y="8.2371" width="31.6" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600000, 15.200200) rotate(90.000000) translate(-7.600000, -15.200200) " x="-7.6" y="7.6002" width="30.4" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.620000, 30.070200) rotate(90.000000) translate(-7.620000, -30.070200) " x="7.37" y="22.4702" width="1" height="15.2"></rect>
                                        <rect id="Rectangle" fill="#38312F" x="1.0444" y="1.0201" width="13.2" height="28.4"></rect>
                                        <rect id="Rectangle" fill="#635652" x="6.2444" y="1.0201" width="1.5" height="28.4"></rect>
                                        <polygon id="Path" fill="#635652" points="14.2444 1.0201 14.2444 29.4201 12.4444 29.4201 12.4444 2.7201 1.0444 2.7201 1.0444 1.0201"></polygon>
                                        <polygon id="Path" fill="#635652" points="14.2444 9.7201 14.2444 29.4201 1.0444 29.4201 1.0444 14.1201"></polygon>
                                        <rect id="Rectangle" fill="#FFFFFF" transform="translate(7.600100, 14.900000) rotate(90.000000) translate(-7.600100, -14.900000) " x="-7.2999" y="14.4" width="29.8" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(7.296400, 14.706300) rotate(90.000000) translate(-7.296400, -14.706300) " x="-7.4036" y="14.5063" width="29.4" height="1"></rect>
                                        <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(14.384900, 14.717800) rotate(90.000000) translate(-14.384900, -14.717800) " x="-0.3151" y="14.5178" width="29.4" height="1"></rect>
                                    </g>
                                    <rect id="Rectangle" fill="#868476" x="2.27373675e-13" y="0" width="15.8" height="3.2"></rect>
                                    <rect id="Rectangle" fill="#68675C" x="2.27373675e-13" y="2.3" width="15.8" height="1"></rect>
                                </g>
                            </g>
                            <path d="M289,135.5 L277.1,135.5 L277.1,104.6 C277.1,101.3 279.8,98.7 283,98.7 L283,98.7 C286.3,98.7 288.9,101.4 288.9,104.6 L288.9,135.5 L289,135.5 Z" id="Path" fill="#868476" fill-rule="nonzero"></path>
                            <path d="M265.8,135.5 L253.9,135.5 L253.9,104.6 C253.9,101.3 256.6,98.7 259.8,98.7 L259.8,98.7 C263.1,98.7 265.7,101.4 265.7,104.6 L265.7,135.5 L265.8,135.5 Z" id="Path" fill="#868476" fill-rule="nonzero"></path>
                            <path d="M259.8,135.7 C259.5,135.7 259.3,135.5 259.3,135.2 L259.3,98.7 C259.3,98.4 259.5,98.2 259.8,98.2 C260.1,98.2 260.3,98.4 260.3,98.7 L260.3,135.2 C260.3,135.5 260.1,135.7 259.8,135.7 Z" id="Path" fill="#E5E0D9" fill-rule="nonzero"></path>
                            <path d="M300.3,135.5 L312.2,135.5 L312.2,104.6 C312.2,101.3 309.5,98.7 306.3,98.7 L306.3,98.7 C303,98.7 300.4,101.4 300.4,104.6 L300.4,135.5 L300.3,135.5 Z" id="Path" fill="#868476" fill-rule="nonzero"></path>
                            <path d="M265.8,104.6 L265.8,135.5 L264,135.5 L264,104.6 C264,102.9 263.3,101.5 262.3,100.4 C261.4,99.5 260.3,98.9 259,98.7 C259.3,98.7 259.6,98.6 259.9,98.6 C261.5,98.6 263,99.3 264.1,100.3 C265.1,101.5 265.8,103 265.8,104.6 Z" id="Path" fill="#635652" fill-rule="nonzero" opacity="0.5"></path>
                            <path d="M283,135.7 C282.7,135.7 282.5,135.5 282.5,135.2 L282.5,98.7 C282.5,98.4 282.7,98.2 283,98.2 C283.3,98.2 283.5,98.4 283.5,98.7 L283.5,135.2 C283.5,135.5 283.2,135.7 283,135.7 Z" id="Path" fill="#E5E0D9" fill-rule="nonzero"></path>
                            <path d="M306.3,135.7 C306,135.7 305.8,135.5 305.8,135.2 L305.8,98.7 C305.8,98.4 306,98.2 306.3,98.2 C306.6,98.2 306.8,98.4 306.8,98.7 L306.8,135.2 C306.8,135.5 306.6,135.7 306.3,135.7 Z" id="Path" fill="#E5E0D9" fill-rule="nonzero"></path>
                            <path d="M289,104.6 L289,135.5 L286.9,135.5 L286.9,104.6 C286.9,102.9 286.2,101.5 285.1,100.4 C284.3,99.5 283.2,99 281.9,98.7 C282.2,98.6 282.6,98.6 282.9,98.6 C284.5,98.6 286,99.3 287.1,100.3 C288.4,101.5 289,103 289,104.6 Z" id="Path" fill="#635652" fill-rule="nonzero" opacity="0.5"></path>
                            <g id="Group" transform="translate(252.300000, 111.800000)" fill="#E5E0D9" fill-rule="nonzero">
                                <path d="M0.5,0 L11.7,0 L11.7,1 L0.5,1 C0.2,1 -2.27373675e-13,0.8 -2.27373675e-13,0.5 C-2.27373675e-13,0.2 0.2,0 0.5,0 Z" id="Path"></path>
                                <rect id="Rectangle" x="13.5" y="0" width="21.2" height="1"></rect>
                                <rect id="Rectangle" x="36.7" y="0" width="20.5" height="1"></rect>
                            </g>
                            <path d="M322.5,90.8 L322.5,149.6 L243.7,149.6 L243.7,130.7 L278.3,118.1 C281.4,117 284.8,117 288,118.1 L315.2,128 L315.2,90.9 L322.5,90.9 L322.5,90.8 Z" id="Path" fill="#635652" fill-rule="nonzero" opacity="0.15"></path>
                            <path d="M312.2,104.6 L312.2,135.5 L309.5,135.5 L309.5,104.6 C309.5,101.8 307.5,99.4 304.9,98.8 C305.3,98.7 305.8,98.6 306.2,98.6 C309.5,98.7 312.2,101.3 312.2,104.6 Z" id="Path" fill="#635652" fill-rule="nonzero" opacity="0.5"></path>
                            <path d="M182.1,166.8 L182.1,166.8 C181.6,164 183.2,161.2 185.8,160.2 L280.5,124.8 C282.1,124.2 283.9,124.2 285.6,124.8 L380.3,160.2 C383,161.2 384.5,164 384,166.8 L384,166.8 C383.5,169.6 381.1,171.6 378.2,171.6 L187.9,171.6 C185.1,171.6 182.6,169.6 182.1,166.8 Z" id="Path" fill="#E5E0D9" fill-rule="nonzero"></path>
                            <g id="Group" opacity="0.2" transform="translate(188.300000, 130.700000)" fill="#868476" fill-rule="nonzero">
                                <polygon id="Path" points="94.8 0 0 35.5 189.5 35.5"></polygon>
                            </g>
                            <polygon id="Path" fill="#868476" fill-rule="nonzero" opacity="0.2" points="360.8 159.8 360.8 159.8 283.1 130.7 347 159.8 205.3 159.8 188.3 166.2 361 166.2 377.8 166.2"></polygon>
                            <rect id="Rectangle" fill="#E5E0D9" fill-rule="nonzero" x="185.4" y="163.9" width="194.4" height="5.8"></rect>
                            <path d="M261.1,308.1 L261.1,270.8 C261.1,258.7 271,248.8 283.1,248.8 C295.2,248.8 305.1,258.7 305.1,270.8 L305.1,308.1 L261.1,308.1 Z" id="Path" fill="#868476" fill-rule="nonzero" opacity="0.5"></path>
                            <path d="M303.1,270.8 L303.1,306.1 L263.1,306.1 L263.1,270.8 C263.1,259.7 272.1,250.8 283.1,250.8 L283.1,250.8 C294.1,250.8 303.1,259.8 303.1,270.8 Z" id="Path" fill="#635652" fill-rule="nonzero"></path>
                            <path d="M302.1,270.8 L302.1,306.1 L264.1,306.1 L264.1,270.8 C264.1,260.3 272.6,251.8 283.1,251.8 L283.1,251.8 C293.6,251.8 302.1,260.3 302.1,270.8 Z" id="Path" fill="#D3C29F" fill-rule="nonzero"></path>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" opacity="0.5" transform="translate(283.017900, 244.140300) rotate(90.000000) translate(-283.017900, -244.140300) " x="279.6679" y="229.2403" width="6.7" height="29.8"></rect>
                            <rect id="Rectangle" fill="#E5E0D9" fill-rule="nonzero" x="269.2" y="241.8" width="27.8" height="4.7"></rect>
                            <rect id="Rectangle" fill="#635652" fill-rule="nonzero" x="263.8" y="267.6" width="38.8" height="1.1"></rect>
                            <rect id="Rectangle" fill="#635652" fill-rule="nonzero" transform="translate(283.069700, 286.842000) rotate(90.000000) translate(-283.069700, -286.842000) " x="264.4197" y="286.292" width="37.3" height="1.1"></rect>
                            <path d="M301.8,267.6 L264.3,267.6 C265.8,258.6 273.6,251.8 283,251.8 C288.2,251.8 293,253.9 296.4,257.4 C299.2,260.1 301.1,263.7 301.8,267.6 Z" id="Path" fill="#D3C29F" fill-rule="nonzero"></path>
                            <path d="M266.9,265.6 C269.1,258.6 275.6,253.8 283.1,253.8 C287.6,253.8 291.9,255.6 295.1,258.8 C297,260.7 298.5,263.1 299.3,265.7 L266.9,265.7 L266.9,265.6 Z" id="Path" fill="#38312F" fill-rule="nonzero" opacity="0.3"></path>
                            <path d="M299.3,265.6 L294.3,265.6 C293.5,263 292.1,260.7 290.1,258.7 C287.5,256.1 284.2,254.4 280.6,253.9 C281.4,253.8 282.2,253.7 283,253.7 C287.5,253.7 291.8,255.5 295,258.7 C297,260.7 298.5,263.1 299.3,265.6 Z" id="Path" fill="#38312F" fill-rule="nonzero" opacity="0.3"></path>
                            <path d="M296.9,241.8 L296.9,246.5 L279.2,246.5 C280.9,245.1 282.8,243.3 284.5,241.8 L296.9,241.8 Z" id="Path" fill="#868476" fill-rule="nonzero" opacity="0.5"></path>
                            <rect id="Rectangle" fill="#D3C29F" fill-rule="nonzero" transform="translate(283.082300, 259.704700) rotate(90.000000) translate(-283.082300, -259.704700) " x="276.3823" y="259.1547" width="13.4" height="1.1"></rect>
                            <g id="Group" transform="translate(197.500000, 222.100000)" fill-rule="nonzero">
                                <rect id="Rectangle" fill="#E5E0D9" x="0" y="0" width="171.4" height="2.5"></rect>
                                <rect id="Rectangle" fill="#E5E0D9" x="0" y="11.3" width="171.4" height="2.8"></rect>
                                <g opacity="0.7" transform="translate(0.000000, 1.600000)" fill="#868476" id="Rectangle">
                                    <rect x="0" y="0" width="171.4" height="1"></rect>
                                </g>
                                <g transform="translate(6.100000, 0.900000)" fill="#E5E0D9" id="Rectangle">
                                    <rect x="27.8" y="0" width="4" height="10.8"></rect>
                                    <rect x="0" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="4.1" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="8.2" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="12.3" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="16.4" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="20.5" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="24.6" y="0" width="1.1" height="10.8"></rect>
                                </g>
                                <g transform="translate(39.500000, 0.900000)" fill="#E5E0D9" id="Rectangle">
                                    <rect x="27.8" y="0" width="4" height="10.8"></rect>
                                    <rect x="0" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="4.1" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="8.2" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="12.3" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="16.4" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="20.5" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="24.6" y="0" width="1.1" height="10.8"></rect>
                                </g>
                                <g transform="translate(73.700000, 0.900000)" fill="#E5E0D9" id="Rectangle">
                                    <rect x="27.9" y="0" width="4" height="10.8"></rect>
                                    <rect x="-2.27373675e-13" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="4.1" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="8.2" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="12.3" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="16.4" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="20.5" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="24.6" y="0" width="1.1" height="10.8"></rect>
                                </g>
                                <g transform="translate(108.000000, 0.900000)" fill="#E5E0D9" id="Rectangle">
                                    <rect x="27.8" y="0" width="4" height="10.8"></rect>
                                    <rect x="0" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="4.1" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="8.2" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="12.3" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="16.4" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="20.4" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="24.5" y="0" width="1.1" height="10.8"></rect>
                                </g>
                                <g transform="translate(142.200000, 0.900000)" fill="#E5E0D9" id="Rectangle">
                                    <rect x="27.8" y="0" width="4" height="10.8"></rect>
                                    <rect x="2.27373675e-13" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="4.1" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="8.2" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="12.3" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="16.4" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="20.5" y="0" width="1.1" height="10.8"></rect>
                                    <rect x="24.6" y="0" width="1.1" height="10.8"></rect>
                                </g>
                            </g>
                            <g id="Group" transform="translate(187.000000, 171.600000)" fill-rule="nonzero">
                                <g>
                                    <g>
                                        <g transform="translate(3.300000, 1.100000)">
                                            <rect id="Rectangle" fill="#FFFFFF" x="0" y="0" width="18.8" height="136.5"></rect>
                                            <g opacity="0.2" transform="translate(0.000000, 127.600000)" fill="#868476" id="Rectangle">
                                                <rect x="0" y="0" width="18.8" height="8.9"></rect>
                                            </g>
                                            <g opacity="0.08" transform="translate(6.000000, 1.000000)" fill="#868476" id="Rectangle">
                                                <rect x="2.27373675e-13" y="0" width="12.8" height="132.3"></rect>
                                            </g>
                                            <polygon id="Path" fill="#868476" opacity="0.2" points="18.8 0.5 18.8 133.4 13.7 133.4 13.7 15.1 0 14.4 0 0.5"></polygon>
                                        </g>
                                        <g id="Path">
                                            <path d="M24.4,0 L24.4,10.7 C24.4,12 23.3,13.1 22,13.1 L3.5,13.1 C2.2,13.1 1.1,12 1.1,10.7 L1.1,0 L24.4,0 Z" fill="#FFFFFF"></path>
                                            <polygon fill="#868476" opacity="0.3" points="24.4 0 24.4 4.1 1.1 3.9 1.1 0"></polygon>
                                            <path d="M24.4,0 L24.4,10.6 C24.4,11.9 23.4,13 22.1,13 L22.1,0 L24.4,0 Z" fill="#38312F" opacity="0.3"></path>
                                            <path d="M25.6,0 L25.6,2.1 C25.6,2.7 25.1,3.1 24.6,3.1 L1,3.1 C0.4,3.1 -1.13686838e-13,2.6 -1.13686838e-13,2.1 L-1.13686838e-13,0 L25.6,0 Z" fill="#FFFFFF"></path>
                                        </g>
                                    </g>
                                    <path d="M25.4,133.7 L25.4,150.2 L0.1,150.2 L0.1,133.7 C0.1,132.7 0.9,132 1.8,132 L23.6,132 C24.6,131.9 25.4,132.7 25.4,133.7 Z" id="Path" fill="#E5E0D9"></path>
                                </g>
                                <path d="M25.4,133.7 L25.4,150.2 L8.8,150.2 L20.6,132 L23.7,132 C24.6,131.9 25.4,132.7 25.4,133.7 Z" id="Path" fill="#868476" opacity="0.1"></path>
                            </g>
                            <g id="Group" transform="translate(227.200000, 171.600000)" fill-rule="nonzero">
                                <g transform="translate(0.000000, 0.000000)">
                                    <g transform="translate(3.400000, 1.100000)">
                                        <rect id="Rectangle" fill="#FFFFFF" x="0" y="0" width="18.8" height="136.5"></rect>
                                        <g opacity="0.2" transform="translate(0.000000, 127.600000)" fill="#868476" id="Rectangle">
                                            <rect x="0" y="-5.68434189e-14" width="18.8" height="5.8"></rect>
                                        </g>
                                        <g opacity="0.08" transform="translate(6.000000, 1.000000)" fill="#868476" id="Rectangle">
                                            <rect x="0" y="0" width="12.8" height="132.3"></rect>
                                        </g>
                                        <polygon id="Path" fill="#868476" opacity="0.2" points="18.8 0.5 18.8 133.4 13.7 133.4 13.7 17.4 0 15.7 0 0.5"></polygon>
                                    </g>
                                    <g id="Path">
                                        <path d="M24.5,0 L24.5,10.7 C24.5,12 23.4,13.1 22.1,13.1 L3.5,13.1 C2.2,13.1 1.1,12 1.1,10.7 L1.1,0 L24.5,0 Z" fill="#FFFFFF"></path>
                                        <polygon fill="#868476" opacity="0.3" points="24.5 0 24.5 5.8 1.1 3.9 1.1 0"></polygon>
                                        <path d="M24.4,0 L24.4,10.6 C24.4,11.9 23.4,13 22.1,13 L22.1,0 L24.4,0 Z" fill="#38312F" opacity="0.3"></path>
                                        <path d="M25.6,0 L25.6,2.1 C25.6,2.7 25.1,3.1 24.6,3.1 L1,3.1 C0.4,3.1 0,2.6 0,2.1 L0,0 L25.6,0 Z" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                                <g transform="translate(86.200000, 0.000000)">
                                    <g transform="translate(3.400000, 1.100000)">
                                        <rect id="Rectangle" fill="#FFFFFF" x="2.27373675e-13" y="0" width="18.8" height="136.5"></rect>
                                        <g opacity="0.2" transform="translate(0.000000, 127.600000)" fill="#868476" id="Rectangle">
                                            <rect x="2.27373675e-13" y="-5.68434189e-14" width="18.8" height="5.8"></rect>
                                        </g>
                                        <g opacity="0.08" transform="translate(6.000000, 1.000000)" fill="#868476" id="Rectangle">
                                            <rect x="2.27373675e-13" y="0" width="12.8" height="132.3"></rect>
                                        </g>
                                        <polygon id="Path" fill="#868476" opacity="0.2" points="18.8 0.5 18.8 133.4 13.7 133.4 13.7 20.2 2.27373675e-13 17.4 2.27373675e-13 0.5"></polygon>
                                    </g>
                                    <g id="Path">
                                        <path d="M24.5,0 L24.5,10.7 C24.5,12 23.4,13.1 22.1,13.1 L3.5,13.1 C2.2,13.1 1.1,12 1.1,10.7 L1.1,0 L24.5,0 Z" fill="#FFFFFF"></path>
                                        <polygon fill="#868476" opacity="0.3" points="24.5 0 24.5 6.4 1.1 5.1 1.1 0"></polygon>
                                        <path d="M24.4,0 L24.4,10.6 C24.4,11.9 23.4,13 22.1,13 L22.1,0 L24.4,0 Z" fill="#38312F" opacity="0.3"></path>
                                        <path d="M25.6,0 L25.6,2.1 C25.6,2.7 25.1,3.1 24.6,3.1 L1,3.1 C0.4,3.1 0,2.6 0,2.1 L0,0 L25.6,0 Z" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="Group" transform="translate(353.600000, 171.600000)" fill-rule="nonzero">
                                <g>
                                    <g transform="translate(3.400000, 0.900000)">
                                        <rect id="Rectangle" fill="#FFFFFF" x="0" y="0" width="18.8" height="136.8"></rect>
                                        <g opacity="0.2" transform="translate(0.000000, 127.800000)" fill="#868476" id="Rectangle">
                                            <rect x="0" y="0" width="18.8" height="8.9"></rect>
                                        </g>
                                        <g opacity="0.08" transform="translate(6.000000, 0.000000)" fill="#868476" id="Rectangle">
                                            <rect x="0" y="0" width="12.8" height="133.6"></rect>
                                        </g>
                                        <polygon id="Path" fill="#868476" opacity="0.2" points="18.8 3.1 18.8 133.6 13.7 133.6 13.7 24.1 0 21 0 3.1"></polygon>
                                    </g>
                                    <g id="Path">
                                        <path d="M24.5,0 L24.5,10.7 C24.5,12 23.4,13.1 22.1,13.1 L3.5,13.1 C2.2,13.1 1.1,12 1.1,10.7 L1.1,0 L24.5,0 Z" fill="#FFFFFF"></path>
                                        <polygon fill="#868476" opacity="0.3" points="24.5 0 24.5 6.8 1.1 5.3 1.1 0"></polygon>
                                        <path d="M24.5,0 L24.5,10.6 C24.5,11.9 23.4,13 22.1,13 L16.2,13 L16.2,0 L24.5,0 Z" fill="#38312F" opacity="0.3"></path>
                                        <path d="M25.6,0 L25.6,2.1 C25.6,2.7 25.1,3.1 24.6,3.1 L1,3.1 C0.4,3.1 0,2.6 0,2.1 L0,0 L25.6,0 Z" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                                <path d="M25.5,133.7 L25.5,150.2 L0.2,150.2 L0.2,133.7 C0.2,132.7 1,132 1.9,132 L23.7,132 C24.7,131.9 25.5,132.7 25.5,133.7 Z" id="Path" fill="#E5E0D9"></path>
                                <path d="M25.5,133.7 L25.5,150.2 L0.2,150.2 L0.2,133.7 C0.2,132.7 1,132 1.9,132 L23.7,132 C24.7,131.9 25.5,132.7 25.5,133.7 Z" id="Path" fill="#868476" opacity="0.2"></path>
                            </g>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" opacity="0.5" x="306.8" y="184.3" width="1.6" height="25.9"></rect>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" opacity="0.5" x="303.3" y="184.3" width="1.6" height="19.6"></rect>
                            <rect id="Rectangle" fill="#868476" fill-rule="nonzero" opacity="0.5" x="299.9" y="184.3" width="1.6" height="11"></rect>
                            <polygon id="Path" fill="#868476" fill-rule="nonzero" opacity="0.3" points="339.6 321.7 310.1 321.7 302.2 308.5 305.6 306.1"></polygon>
                            <g id="Group" transform="translate(247.700000, 306.100000)" fill-rule="nonzero">
                                <g transform="translate(12.800000, 0.000000)" id="Rectangle">
                                    <rect fill="#E5E0D9" x="0" y="0" width="45.1" height="3.2"></rect>
                                    <rect fill="#868476" opacity="0.2" x="0" y="2.6" width="45.1" height="1"></rect>
                                    <rect fill="#FFFAF3" x="0" y="0" width="45.1" height="1.2"></rect>
                                </g>
                                <g transform="translate(9.800000, 3.100000)" id="Rectangle">
                                    <rect fill="#E5E0D9" x="0" y="0" width="51.1" height="3.2"></rect>
                                    <rect fill="#868476" opacity="0.2" x="0" y="2.7" width="51.1" height="1"></rect>
                                    <rect fill="#FFFAF3" x="0" y="0" width="51.1" height="1.2"></rect>
                                </g>
                                <g transform="translate(6.600000, 6.200000)" id="Rectangle">
                                    <rect fill="#E5E0D9" x="0" y="5.68434189e-14" width="57.6" height="3.2"></rect>
                                    <rect fill="#868476" opacity="0.2" x="0" y="2.7" width="57.6" height="1"></rect>
                                    <rect fill="#FFFAF3" x="0" y="5.68434189e-14" width="57.6" height="1.2"></rect>
                                </g>
                                <g transform="translate(3.000000, 9.400000)" id="Rectangle">
                                    <rect fill="#E5E0D9" x="-2.27373675e-13" y="0" width="64.7" height="3.2"></rect>
                                    <rect fill="#868476" opacity="0.2" x="-2.27373675e-13" y="2.6" width="64.7" height="1"></rect>
                                    <rect fill="#FFFAF3" x="-2.27373675e-13" y="0" width="64.7" height="1.2"></rect>
                                </g>
                                <g transform="translate(0.000000, 12.500000)" id="Rectangle">
                                    <rect fill="#E5E0D9" x="2.27373675e-13" y="0" width="70.8" height="3.2"></rect>
                                    <rect fill="#868476" opacity="0.2" x="2.27373675e-13" y="2.7" width="70.8" height="1"></rect>
                                    <rect fill="#FFFAF3" x="2.27373675e-13" y="0" width="70.8" height="1.2"></rect>
                                </g>
                            </g>
                            <g id="Group" transform="translate(25.200000, 184.900000)" fill-rule="nonzero">
                                <g>
                                    <g>
                                        <g transform="translate(0.363300, 1.498800)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973200) rotate(90.000000) translate(-9.100000, -18.973200) " x="-9.85" y="9.8732" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.259800) rotate(90.000000) translate(-9.136700, -18.259800) " x="-9.0633" y="9.1598" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.142300) rotate(90.000000) translate(-9.119100, -36.142300) " x="8.8191" y="27.0423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2367" y="1.2012" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.4367" y="1.2012" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.2367 1.2012 1.2367 35.2012 3.3367 35.2012 3.3367 4.7012 17.0367 4.7012 17.0367 1.2012"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0367 11.5012 17.0367 13.8012 9.5367 19.0012 9.5367 16.7012"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0367 16.0012 17.0367 24.2012 9.5367 29.4012 9.5367 21.2012"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.850000) rotate(90.000000) translate(-9.077200, -17.850000) " x="-8.7728" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.627500) rotate(90.000000) translate(-8.723400, -17.627500) " x="-8.8766" y="17.3775" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.631500) rotate(90.000000) translate(-17.219400, -17.631500) " x="-0.3806" y="17.3815" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(33.000000, 0.000000)">
                                        <g transform="translate(0.394800, 1.490500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.950000) rotate(90.000000) translate(-9.100000, -18.950000) " x="-9.85" y="9.85" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136500, 18.236700) rotate(90.000000) translate(-9.136500, -18.236700) " x="-9.0635" y="9.1367" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119000, 36.119200) rotate(90.000000) translate(-9.119000, -36.119200) " x="8.819" y="27.0192" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2052" y="1.2095" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.4052" y="1.2095" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.2052 1.2095 1.2052 35.2095 3.3052 35.2095 3.3052 4.7095 17.0052 4.7095 17.0052 1.2095"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0052 29.6095 17.0052 35.2095 9.5052 35.2095 9.5052 34.8095"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0052 23.2095 17.0052 27.4095 9.5052 32.6095 9.5052 28.5095"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077000, 17.926800) rotate(90.000000) translate(-9.077000, -17.926800) " x="-8.773" y="17.3268" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.604300) rotate(90.000000) translate(-8.723400, -17.604300) " x="-8.8766" y="17.3543" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.608300) rotate(90.000000) translate(-17.219400, -17.608300) " x="-0.3806" y="17.3583" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(66.100000, 0.000000)">
                                        <g transform="translate(0.326100, 1.495800)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 19.013300) rotate(90.000000) translate(-9.100000, -19.013300) " x="-9.85" y="9.9133" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.200000) rotate(90.000000) translate(-9.136700, -18.200000) " x="-9.0633" y="9.1" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119200, 36.082400) rotate(90.000000) translate(-9.119200, -36.082400) " x="8.8192" y="26.9824" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.1739" y="1.2042" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.3739" y="1.2042" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.1739 1.2042 1.1739 35.2042 3.2739 35.2042 3.2739 4.7042 16.9739 4.7042 16.9739 1.2042"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9739 9.0042 16.9739 13.8042 9.4739 19.0042 9.4739 14.2042"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9739 16.0042 16.9739 17.7042 9.4739 22.9042 9.4739 21.2042"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9739 26.6042 16.9739 27.8042 9.4739 33.0042 9.4739 31.8042"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.890100) rotate(90.000000) translate(-9.077200, -17.890100) " x="-8.7728" y="17.2901" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723500, 17.667600) rotate(90.000000) translate(-8.723500, -17.667600) " x="-8.8765" y="17.4176" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.671600) rotate(90.000000) translate(-17.219400, -17.671600) " x="-0.3806" y="17.4216" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(99.100000, 0.000000)">
                                        <g transform="translate(0.357600, 1.504500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973100) rotate(90.000000) translate(-9.100000, -18.973100) " x="-9.85" y="9.8731" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.259800) rotate(90.000000) translate(-9.136700, -18.259800) " x="-9.0633" y="9.1598" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119000, 36.142300) rotate(90.000000) translate(-9.119000, -36.142300) " x="8.819" y="27.0423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2424" y="1.1955" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.3424" y="1.1955" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.2424 1.1955 1.2424 35.1955 3.3424 35.1955 3.3424 4.6955 17.0424 4.6955 17.0424 1.1955"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0424 6.7955 17.0424 9.0955 9.5424 14.2955 9.5424 11.9955"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0424 10.9955 17.0424 14.4955 9.5424 19.6955 9.5424 16.1955"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.850000) rotate(90.000000) translate(-9.077200, -17.850000) " x="-8.7728" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723500, 17.627400) rotate(90.000000) translate(-8.723500, -17.627400) " x="-8.8765" y="17.3774" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.631400) rotate(90.000000) translate(-17.219400, -17.631400) " x="-0.3806" y="17.3814" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(132.100000, 0.000000)">
                                        <g transform="translate(0.389000, 1.496200)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.950000) rotate(90.000000) translate(-9.100000, -18.950000) " x="-9.85" y="9.85" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.236700) rotate(90.000000) translate(-9.136700, -18.236700) " x="-9.0633" y="9.1367" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.119200) rotate(90.000000) translate(-9.119100, -36.119200) " x="8.8191" y="27.0192" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.211" y="1.2038" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="1.211" y="1.2038" width="15.8" height="4.2"></rect>
                                            <polygon id="Path" fill="#7B6C67" points="8.711 11.5038 8.711 13.8038 1.211 19.0038 1.211 16.7038"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="8.711 29.7038 8.711 24.2038 1.211 29.4038 1.211 34.9038"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.926800) rotate(90.000000) translate(-9.077200, -17.926800) " x="-8.7728" y="17.3268" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.604300) rotate(90.000000) translate(-8.723400, -17.604300) " x="-8.8766" y="17.3543" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.608300) rotate(90.000000) translate(-17.219400, -17.608300) " x="-0.3806" y="17.3583" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                </g>
                                <g transform="translate(0.000000, 59.700000)">
                                    <g>
                                        <g transform="translate(0.370300, 1.505800)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973200) rotate(90.000000) translate(-9.100000, -18.973200) " x="-9.85" y="9.8732" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.259900) rotate(90.000000) translate(-9.136700, -18.259900) " x="-9.0633" y="9.1599" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.142300) rotate(90.000000) translate(-9.119100, -36.142300) " x="8.8191" y="27.0423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2297" y="1.1942" width="15.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.2297 1.1942 1.2297 35.1942 8.9297 35.1942 8.9297 4.6942 17.0297 4.6942 17.0297 1.1942"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0297 11.4942 17.0297 13.7942 9.5297 18.9942 9.5297 16.6942"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0297 15.9942 17.0297 24.1942 9.5297 29.3942 9.5297 21.1942"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.850000) rotate(90.000000) translate(-9.077200, -17.850000) " x="-8.7728" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.627500) rotate(90.000000) translate(-8.723400, -17.627500) " x="-8.8766" y="17.3775" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.631500) rotate(90.000000) translate(-17.219400, -17.631500) " x="-0.3806" y="17.3815" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(33.000000, 0.000000)">
                                        <g transform="translate(0.401700, 1.497500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.950000) rotate(90.000000) translate(-9.100000, -18.950000) " x="-9.85" y="9.85" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.236700) rotate(90.000000) translate(-9.136700, -18.236700) " x="-9.0633" y="9.1367" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.119200) rotate(90.000000) translate(-9.119100, -36.119200) " x="8.8191" y="27.0192" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.1983" y="1.2025" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="7.3983" y="1.2025" width="1.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.1983 1.2025 1.1983 35.2025 4.7983 35.2025 4.7983 4.7025 16.9983 4.7025 16.9983 1.2025"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9983 29.6025 16.9983 35.2025 9.4983 35.2025 9.4983 34.8025"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9983 23.2025 16.9983 27.4025 9.4983 32.6025 9.4983 28.5025"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.926900) rotate(90.000000) translate(-9.077200, -17.926900) " x="-8.7728" y="17.3269" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723500, 17.604300) rotate(90.000000) translate(-8.723500, -17.604300) " x="-8.8765" y="17.3543" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219500, 17.608300) rotate(90.000000) translate(-17.219500, -17.608300) " x="-0.3805" y="17.3583" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(66.100000, 0.000000)">
                                        <g transform="translate(0.333200, 1.502800)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 19.013300) rotate(90.000000) translate(-9.100000, -19.013300) " x="-9.85" y="9.9133" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136600, 18.200000) rotate(90.000000) translate(-9.136600, -18.200000) " x="-9.0634" y="9.1" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119100, 36.082400) rotate(90.000000) translate(-9.119100, -36.082400) " x="8.8191" y="26.9824" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.1668" y="1.1972" width="15.8" height="34"></rect>
                                            <polygon id="Path" fill="#635652" points="1.1668 1.1972 1.1668 35.1972 3.2668 35.1972 3.2668 4.6972 16.9668 4.6972 16.9668 1.1972"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9668 8.9972 16.9668 13.7972 9.4668 18.9972 9.4668 14.2972"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9668 15.9972 16.9668 17.6972 9.4668 22.8972 9.4668 21.1972"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="16.9668 26.5972 16.9668 27.7972 9.4668 32.9972 9.4668 31.7972"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.890100) rotate(90.000000) translate(-9.077200, -17.890100) " x="-8.7728" y="17.2901" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723400, 17.667600) rotate(90.000000) translate(-8.723400, -17.667600) " x="-8.8766" y="17.4176" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.671600) rotate(90.000000) translate(-17.219400, -17.671600) " x="-0.3806" y="17.4216" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(99.100000, 0.000000)">
                                        <g transform="translate(0.364500, 1.511500)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.973200) rotate(90.000000) translate(-9.100000, -18.973200) " x="-9.85" y="9.8732" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.259900) rotate(90.000000) translate(-9.136700, -18.259900) " x="-9.0633" y="9.1599" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119200, 36.142300) rotate(90.000000) translate(-9.119200, -36.142300) " x="8.8192" y="27.0423" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.2355" y="1.1885" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="6.4355" y="1.1885" width="2.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" x="1.2355" y="1.1885" width="15.8" height="3.4"></rect>
                                            <polygon id="Path" fill="#7B6C67" points="17.0355 6.7885 17.0355 9.0885 9.5355 14.2885 9.5355 11.9885"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0355 10.9885 17.0355 14.4885 9.5355 19.6885 9.5355 16.1885"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="17.0355 16.3885 17.0355 17.8885 9.5355 23.1885 9.5355 21.5885"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.850000) rotate(90.000000) translate(-9.077200, -17.850000) " x="-8.7728" y="17.25" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723600, 17.627500) rotate(90.000000) translate(-8.723600, -17.627500) " x="-8.8764" y="17.3775" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219600, 17.631500) rotate(90.000000) translate(-17.219600, -17.631500) " x="-0.3804" y="17.3815" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                    <g transform="translate(132.100000, 0.000000)">
                                        <g transform="translate(0.396000, 1.503200)">
                                            <rect id="Rectangle" fill="#868476" transform="translate(9.100000, 18.950000) rotate(90.000000) translate(-9.100000, -18.950000) " x="-9.85" y="9.85" width="37.9" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.136700, 18.236700) rotate(90.000000) translate(-9.136700, -18.236700) " x="-9.0633" y="9.1367" width="36.4" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(9.119200, 36.119100) rotate(90.000000) translate(-9.119200, -36.119100) " x="8.8192" y="27.0191" width="1" height="18.2"></rect>
                                            <rect id="Rectangle" fill="#38312F" x="1.204" y="1.1968" width="15.8" height="34"></rect>
                                            <rect id="Rectangle" fill="#635652" transform="translate(10.693500, 18.268800) rotate(-180.000000) translate(-10.693500, -18.268800) " x="9.2435" y="1.2688" width="2.9" height="34"></rect>
                                            <polygon id="Path" fill="#7B6C67" points="8.704 11.4968 8.704 13.7968 1.204 18.9968 1.204 16.6968"></polygon>
                                            <polygon id="Path" fill="#7B6C67" points="8.704 29.6968 8.704 24.1968 1.204 29.3968 1.204 34.8968"></polygon>
                                            <rect id="Rectangle" fill="#FFFFFF" transform="translate(9.077200, 17.926900) rotate(90.000000) translate(-9.077200, -17.926900) " x="-8.7728" y="17.3269" width="35.7" height="1.2"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(8.723500, 17.604300) rotate(90.000000) translate(-8.723500, -17.604300) " x="-8.8765" y="17.3543" width="35.2" height="1"></rect>
                                            <rect id="Rectangle" fill="#868476" opacity="0.4" transform="translate(17.219400, 17.608300) rotate(90.000000) translate(-17.219400, -17.608300) " x="-0.3806" y="17.3583" width="35.2" height="1"></rect>
                                        </g>
                                        <rect id="Rectangle" fill="#868476" x="0" y="0" width="19" height="3.8"></rect>
                                        <rect id="Rectangle" fill="#68675C" x="0" y="2.8" width="19" height="1"></rect>
                                    </g>
                                </g>
                            </g>
                            <rect id="Rectangle" fill="#887772" fill-rule="nonzero" x="262.2" y="304.8" width="41.8" height="1.2"></rect>
                            <g id="Group" transform="translate(286.400000, 271.500000)" fill="#38312F" fill-rule="nonzero" opacity="0.3">
                                <rect id="Rectangle" x="0" y="0" width="13.5" height="9.8"></rect>
                                <rect id="Rectangle" transform="translate(6.828800, 4.848400) rotate(90.000000) translate(-6.828800, -4.848400) " x="2.9288" y="-0.9016" width="7.8" height="11.5"></rect>
                                <rect id="Rectangle" transform="translate(6.828800, 4.848400) rotate(90.000000) translate(-6.828800, -4.848400) " x="2.9288" y="-0.9016" width="7.8" height="11.5"></rect>
                                <rect id="Rectangle" x="0" y="11.1" width="13.5" height="19.8"></rect>
                                <rect id="Rectangle" transform="translate(6.791800, 21.011500) rotate(90.000000) translate(-6.791800, -21.011500) " x="-2.1082" y="15.2615" width="17.8" height="11.5"></rect>
                            </g>
                            <g id="Group" transform="translate(266.297300, 271.427500)" fill="#38312F" fill-rule="nonzero" opacity="0.3">
                                <rect id="Rectangle" transform="translate(6.750000, 4.900000) rotate(-180.000000) translate(-6.750000, -4.900000) " x="2.20552465e-10" y="3.03828074e-10" width="13.5" height="9.8"></rect>
                                <rect id="Rectangle" transform="translate(6.714700, 4.937700) rotate(90.000000) translate(-6.714700, -4.937700) " x="2.81469998" y="-0.81229995" width="7.8" height="11.5"></rect>
                                <rect id="Rectangle" transform="translate(6.750000, 21.126000) rotate(-180.000000) translate(-6.750000, -21.126000) " x="6.40511644e-10" y="11.226" width="13.5" height="19.8"></rect>
                                <rect id="Rectangle" transform="translate(6.677700, 21.100800) rotate(90.000000) translate(-6.677700, -21.100800) " x="-2.22230002" y="15.3508" width="17.8" height="11.5"></rect>
                            </g>
                            <circle id="Oval" fill="#E5E0D9" fill-rule="nonzero" cx="285.1" cy="285.1" r="1"></circle>
                            <circle id="Oval" fill="#E5E0D9" fill-rule="nonzero" cx="281.1" cy="285.1" r="1"></circle>
                            <polygon id="Path" fill="#38312F" fill-rule="nonzero" opacity="0.5" points="299 290 299 301.4 287.4 301.4 287.4 297"></polygon>
                            <polygon id="Path" fill="#38312F" fill-rule="nonzero" opacity="0.5" points="278.8 285.2 278.8 291.1 267.2 298 267.2 292.1"></polygon>
                            <polygon id="Path" fill="#38312F" fill-rule="nonzero" opacity="0.5" points="278.8 291.9 278.8 292.9 267.2 299.8 267.2 298.8"></polygon>
                            <polygon id="Path" fill="#38312F" fill-rule="nonzero" opacity="0.5" points="299 286 299 288 287.4 294.9 287.4 293"></polygon>
                            <circle id="Oval" fill="#FFFFFF" fill-rule="nonzero" cx="284.9" cy="285.1" r="1"></circle>
                            <circle id="Oval" fill="#FFFFFF" fill-rule="nonzero" cx="280.8" cy="285.1" r="1"></circle>
                            <g id="Group" transform="translate(255.600000, 38.700000)" stroke="#68675C" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75">
                                <path d="M27.5,0.9 C47.2,7.8 54.6,23.6 55,45.8" id="Path"></path>
                                <path d="M27.5,0.9 C7.8,7.8 0.4,23.6 0,45.8" id="Path"></path>
                                <line x1="27.5" y1="2.84217094e-14" x2="27.5" y2="46.7" id="Path"></line>
                            </g>
                            <polygon id="Path" fill="#635652" fill-rule="nonzero" points="324.4 88.1 241.7 88.1 242.7 82.7 323.4 82.7"></polygon>
                            <polygon id="Path" fill="#E5E0D9" fill-rule="nonzero" points="323.4 82.7 316.7 84.2 242.4 84.3 242.7 82.7"></polygon>
                            <path d="M285.7,40.7 L280.3,40.7 C279.3,40.7 278.4,39.9 278.4,38.8 L278.4,38.6 C278.4,37.6 279.2,36.7 280.3,36.7 L285.7,36.7 C286.7,36.7 287.6,37.5 287.6,38.6 L287.6,38.8 C287.6,39.8 286.8,40.7 285.7,40.7 Z" id="Path" fill="#868476" fill-rule="nonzero"></path>
                            <g id="Group" opacity="0.4" transform="translate(278.400000, 36.700000)" fill="#635652" fill-rule="nonzero">
                                <path d="M7.3,4 L1.9,4 C0.9,4 0,3.2 0,2.1 L0,1.9 C0,0.9 0.8,0 1.9,0 L7.3,0 C8.3,0 9.2,0.8 9.2,1.9 L9.2,2.1 C9.2,3.1 8.4,4 7.3,4 Z" id="Path"></path>
                            </g>
                            <polygon id="Path" fill="#38312F" fill-rule="nonzero" points="324.4 88.1 241.7 88.1 242.1 86.1 324 86.1"></polygon>
                            <path d="M307.8,7.6 C307.5,7.4 305.2,5.6 301.5,4.9 C297.6,4.2 296.1,6.2 292.4,6 C289.9,5.9 288.6,4.8 287.9,4.1 C289.1,4.6 290.5,5.2 292.6,5.3 C295.1,5.5 297.4,3.6 301,3.9 C304.7,4.3 306.5,6.4 307.8,7.6 Z" id="Path" fill="#D3C29F" fill-rule="nonzero"></path>
                            <g id="Group" transform="translate(321.900000, 78.100000)">
                                <line x1="1" y1="5.1" x2="1" y2="0" id="Path" stroke="#635652" stroke-linecap="round" stroke-linejoin="round"></line>
                                <circle id="Oval" fill="#635652" fill-rule="nonzero" cx="1" cy="1.5" r="1"></circle>
                            </g>
                            <path d="M286,156.7 L283.8,157.9 L281.7,156.7 C278.2,154.8 276.1,151.1 276.1,147.1 L276.1,141.4 C276.1,140 277.2,138.9 278.6,138.9 L289.1,138.9 C290.5,138.9 291.6,140 291.6,141.4 L291.6,147.1 C291.6,151.1 289.4,154.8 286,156.7 Z" id="Path" fill="#868476" fill-rule="nonzero" opacity="0.2"></path>
                            <path d="M285.2,156.2 L283.1,157.4 L281,156.2 C277.6,154.3 275.5,150.8 275.5,146.9 L275.5,141.4 C275.5,140 276.6,138.9 278,138.9 L288.2,138.9 C289.6,138.9 290.7,140 290.7,141.4 L290.7,146.9 C290.6,150.7 288.5,154.3 285.2,156.2 Z" id="Path" fill="#FFFFFF" fill-rule="nonzero"></path>
                            <path d="M281.5,155.3 C278.4,153.6 276.5,150.4 276.5,146.9 L276.5,141.4 C276.5,140.6 277.2,139.9 278,139.9 L288.2,139.9 C289,139.9 289.7,140.6 289.7,141.4 L289.7,146.9 C289.7,150.4 287.8,153.6 284.7,155.3 L283.1,156.2 L281.5,155.3 Z" id="Path" fill="#E5E0D9" fill-rule="nonzero"></path>
                            <polygon id="Path" fill="#FFFFFF" fill-rule="nonzero" points="283.1 151.7 286.9 148.9 285.5 144.3 280.7 144.3 279.2 148.9"></polygon>
                            <g id="Group" transform="translate(279.600000, 142.300000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g id="Oval">
                                    <circle cx="0.6" cy="0.6" r="1"></circle>
                                    <circle cx="6.3" cy="0.6" r="1"></circle>
                                </g>
                                <circle id="Oval" cx="3.5" cy="0.6" r="1"></circle>
                            </g>
                            <path d="M279.2,148.9 C279.2,148.9 284.9,148.6 285.5,144.3 L287,148.9 L283.1,151.7 L279.2,148.9 Z" id="Path" fill="#E5E0D9" fill-rule="nonzero" opacity="0.5"></path>
                            <path d="M282.4,124.4 L182,165.3 C182.2,163.1 183.6,161 185.8,160.2 L280.5,124.8 C281.1,124.6 281.8,124.4 282.4,124.4 Z" id="Path" fill="#FFFFFF" fill-rule="nonzero"></path>
                            <path d="M429.5,317.4 L422.4,317.9 C423.1,317.7 423.5,317.3 424.7,317.3 C426.4,317.3 426.4,316.9 428.1,316.9 C428.7,316.9 429.1,317.1 429.5,317.4 Z" id="Path" fill="#E6DDC9" fill-rule="nonzero"></path>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg>
</section>