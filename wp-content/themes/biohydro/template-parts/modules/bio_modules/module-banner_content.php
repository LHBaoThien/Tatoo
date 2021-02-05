<?php
$items= get_sub_field('slides');

?>
<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <?php foreach ($items as $key => $item) {
                $image = $item['image']['url'];
                $design = $item['design'];
                $content = $item['content'];
                $sub = $item['sub_content'];
                ?>
                <?php if($design == '1'):?>
                <li data-transition="fade">
                    <img src="<?php echo $image?>"  alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    
                    <div class="tp-caption  tp-resizeme" 
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="138" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-start="700">
                        <div class="slide-content-box mar-lft lastslide">
                            <?php echo $content?>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme" 
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="280" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-start="1500">
                        <div class="slide-content-box middle-slide">
                            <?php echo $sub?>
                        </div>
                       
                    </div>
                    <div class="tp-caption tp-resizeme" 
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="378" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="2200">
                       
                    </div>
                </li>
                <?php endif;?>
                <?php if($design == '2'):?>
                <li data-transition="fade">
                    <img src="<?php echo $image?>" alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                    
                      <div class="tp-caption tp-resizeme"
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="-105" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"  
                        data-start="500">
                        <div class="slide-content-box middle-slide lastslide">
                            <?php echo $content?>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="2" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="1500">
                         <div class="slide-content-box middle-slide">
                            <?php echo $sub?>
                        </div>
                       
                    </div>
                    <div class="tp-caption tp-resizeme" 
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="87" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="2300">
                        
                    </div>
                </li>
                <?php endif;?>
                <?php if($design == '3'):?>
                  <li data-transition="fade">
                    <img src="<?php echo $image?>" alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                    
                      <div class="tp-caption tp-resizeme"
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="-105" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"  
                        data-start="500">
                        <div class="slide-content-box middle-slide lastslide">
                            <?php echo $content?>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="2" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="1500">
                        <div class="slide-content-box middle-slide">
                            <?php echo $sub?>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" 
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="87" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="2300">
                        
                    </div>
                </li>
                <?php endif;?>
                <?php if($design == '4'):?>
                <li data-transition="fade">
                    <img src="<?php echo $image?>" alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme"
                        data-x="right" data-hoffset="0" 
                        data-y="center" data-voffset="-20" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="700">
                        <div class="slide-content-box lastslide">
                            <?php echo $content?>
                            
                        </div>
                    </div>
                     <div class="tp-caption tp-resizeme"
                            data-x="center" data-hoffset="0" 
                            data-y="center" data-voffset="2" 
                            data-transform_idle="o:1;"                         
                            data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            data-start="1500">
                            <div class="slide-content-box middle-slide">
                                <?php echo $sub?>
                            </div>
                        </div>
                </li>
                
                
                <?php endif;?>
                <?php if($design == '5'):?>
                   <li data-transition="fade">
                        <img src="<?php echo $image?>" alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                        
                          <div class="tp-caption tp-resizeme"
                            data-x="center" data-hoffset="0" 
                            data-y="center" data-voffset="-105" 
                            data-transform_idle="o:1;"         
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                            data-splitin="none" 
                            data-splitout="none"  
                            data-start="500">
                            <div class="slide-content-box middle-slide lastslide">
                                <?php echo $content?>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme"
                            data-x="center" data-hoffset="0" 
                            data-y="center" data-voffset="2" 
                            data-transform_idle="o:1;"                         
                            data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            data-start="1500">
                            <div class="slide-content-box middle-slide">
                                <?php echo $sub?>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" 
                            data-x="center" data-hoffset="0" 
                            data-y="center" data-voffset="87" 
                            data-transform_idle="o:1;"                         
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            data-start="2300">
                            
                        </div>
                    </li>
                <?php endif;?>
                
            <?php }?>
        </ul>
    </div>
</section>
<!--End rev slider wrapper--> 