<?php

// Register and load the widget
function mbn_widget_ivtherapy_nav_item(){
    register_widget('MBN_Widget_IVtherapy_Nav_Item');
}
add_action('widgets_init', 'mbn_widget_ivtherapy_nav_item');


 
// Creating the widget 
class MBN_Widget_IVtherapy_Nav_Item extends WP_Widget{
    function __construct() {
        parent::__construct(
            // Base ID of your widget
            'mbn_widget_ivtherapy_nav_item', 
            
            // Widget name will appear in UI
            'IV Therapy Nav Item', 
            
            // Widget description
            array('description' => 'IV Therapy Nav Item') 
        );
    }
 
    // Creating widget front-end
    public function widget($args, $instance){
        echo $args['before_widget'];

        $item = get_post($instance['item']);
  
        if($item){
        ?>
        <a class="ivtherapy-nav-item" href="<?php the_permalink(187); ?>#ivmenu-item-<?php echo $item->ID ?>">
            <!-- <img src="<?php echo get_field('icon', $item->ID) ?>" alt="" class="icon"> -->
            <span class="icon">
                <?php
                $colorId        = 'color-'.$item->ID;
                $color          = get_field('color', $item->ID);
                $color1         = $color['color'];
                $color2         = $color['color_2'];;
                $is_gradient    = $color['use_gradient'];

                //include(locate_template('template-parts/ivtherapy-icon.php', false, false));
                ?>
                <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="37.861"
   height="89.711"
   viewBox="0 0 37.861 89.711"
   version="1.1"
   id="svg1442"
   sodipodi:docname="icn-iv-platinum.svg"
   inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
  <metadata
     id="metadata1446">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="640"
     inkscape:window-height="480"
     id="namedview1444"
     showgrid="false"
     inkscape:zoom="2.6306696"
     inkscape:cx="18.9305"
     inkscape:cy="44.855499"
     inkscape:window-x="0"
     inkscape:window-y="0"
     inkscape:window-maximized="0"
     inkscape:current-layer="svg1442" />
  <defs
     id="defs16">
    <linearGradient
       id="<?php echo $colorId ?$colorId :'a' ?>"
       x1="0.5"
       x2="0.5"
       y2="1"
       gradientUnits="objectBoundingBox">
      <stop
         offset="0"
         stop-color="<?php echo $is_gradient ?$color2 :$color1 ?>"
         id="stop2" />
      <stop
         offset="1"
         stop-color="<?php echo $color1 ?>"
         id="stop4" />
    </linearGradient>
    <clipPath
       id="c">
      <path
         d="M41.413,121.361h0Z"
         transform="translate(-41.413 -121.361)"
         fill="#fff"
         id="path7" />
    </clipPath>
    <clipPath
       id="d">
      <path
         d="M41.345,124.077h0Z"
         transform="translate(-41.345 -124.077)"
         fill="#fff"
         id="path10" />
    </clipPath>
    <clipPath
       id="e">
      <path
         d="M41.345,126.793h0Z"
         transform="translate(-41.345 -126.793)"
         fill="#fff"
         id="path13" />
    </clipPath>
  </defs>
  <g
     transform="translate(-38.495 -90.994)"
     id="g1440">
    <g
       transform="translate(39.258 109.455)"
       id="g20">
      <path
         d="M65.875,135.223a9.139,9.139,0,0,1-6.255-2.875l-6.059-5.757c-3.519-3.339-7.392-3.339-10.909,0l-3.029,2.881-.8-5.66,3.029-2.875c4.033-3.834,8.476-3.834,12.51,0l6.059,5.757c3.519,3.333,7.39,3.333,10.907,0l3.031-2.881.8,5.66-3.031,2.875A9.138,9.138,0,0,1,65.875,135.223Z"
         transform="translate(-38.823 -118.062)"
         fill="url(#<?php echo $colorId ?$colorId :'a' ?>)"
         id="path18" />
    </g>
    <g
       transform="translate(39.258 104.455)"
       id="g24">
      <path
         d="M65.875,135.223a9.139,9.139,0,0,1-6.255-2.875l-6.059-5.757c-3.519-3.339-7.392-3.339-10.909,0l-3.029,2.881-.8-5.66,3.029-2.875c4.033-3.834,8.476-3.834,12.51,0l6.059,5.757c3.519,3.333,7.39,3.333,10.907,0l3.031-2.881.8,5.66-3.031,2.875A9.138,9.138,0,0,1,65.875,135.223Z"
         transform="translate(-38.823 -118.062)"
         fill="url(#<?php echo $colorId ?$colorId :'a' ?>)"
         id="path22" />
    </g>
    <g
       transform="translate(38.495 98.454)"
       id="g28">
      <path
         d="M68.4,162.966H46.455a7.968,7.968,0,0,1-7.96-7.96V118.713a7.969,7.969,0,0,1,7.96-7.96H68.4a7.969,7.969,0,0,1,7.96,7.96v36.294A7.969,7.969,0,0,1,68.4,162.966ZM46.455,113.079a5.64,5.64,0,0,0-5.634,5.634v36.294a5.642,5.642,0,0,0,5.634,5.634H68.4a5.642,5.642,0,0,0,5.634-5.634V118.713a5.64,5.64,0,0,0-5.634-5.634Z"
         transform="translate(-38.495 -110.753)"
         fill="#fff"
         id="path26" />
    </g>
    <g
       transform="translate(50.693 149.504)"
       id="g32">
      <path
         d="M50.471,140.376a6.741,6.741,0,0,1-6.732-6.734V132.7h2.326v.942a4.407,4.407,0,1,0,8.813,0V132.7H57.2v.942A6.74,6.74,0,0,1,50.471,140.376Z"
         transform="translate(-43.739 -132.7)"
         fill="#fff"
         id="path30" />
    </g>
    <g
       transform="translate(56.262 156.017)"
       id="g36">
      <rect
         width="2.326"
         height="8.768"
         fill="#fff"
         id="rect34" />
    </g>
    <g
       transform="translate(56.262 171.936)"
       id="g40">
      <rect
         width="2.326"
         height="8.768"
         fill="#fff"
         id="rect38" />
    </g>
    <g
       transform="translate(45.124 125.967)"
       id="g962">
      <g
         transform="translate(0.159)"
         id="g500">
        <g
           transform="translate(0 1.162)"
           id="g496">
          <g
             clip-path="url(#c)"
             id="g494">
            <path
               d="M41.413,121.361Z"
               transform="translate(-41.413 -121.361)"
               fill="#fff"
               id="path42" />
            <path
               d="M41.426,121.361Z"
               transform="translate(-41.396 -121.361)"
               fill="#fff"
               id="path44" />
            <path
               d="M41.44,121.361Z"
               transform="translate(-41.377 -121.361)"
               fill="#fff"
               id="path46" />
            <path
               d="M41.453,121.361Z"
               transform="translate(-41.36 -121.361)"
               fill="#fff"
               id="path48" />
            <path
               d="M41.466,121.361Z"
               transform="translate(-41.343 -121.361)"
               fill="#fff"
               id="path50" />
            <path
               d="M41.479,121.361Z"
               transform="translate(-41.325 -121.361)"
               fill="#fff"
               id="path52" />
            <path
               d="M41.493,121.361Z"
               transform="translate(-41.307 -121.361)"
               fill="#fff"
               id="path54" />
            <path
               d="M41.506,121.361Z"
               transform="translate(-41.29 -121.361)"
               fill="#fff"
               id="path56" />
            <path
               d="M41.519,121.361Z"
               transform="translate(-41.272 -121.361)"
               fill="#fff"
               id="path58" />
            <path
               d="M41.532,121.361Z"
               transform="translate(-41.255 -121.361)"
               fill="#fff"
               id="path60" />
            <path
               d="M41.546,121.361Z"
               transform="translate(-41.237 -121.361)"
               fill="#fff"
               id="path62" />
            <path
               d="M41.559,121.361Z"
               transform="translate(-41.219 -121.361)"
               fill="#fff"
               id="path64" />
            <path
               d="M41.572,121.361Z"
               transform="translate(-41.202 -121.361)"
               fill="#fff"
               id="path66" />
            <path
               d="M41.585,121.361Z"
               transform="translate(-41.185 -121.361)"
               fill="#fff"
               id="path68" />
            <path
               d="M41.6,121.361Z"
               transform="translate(-41.166 -121.361)"
               fill="#fff"
               id="path70" />
            <path
               d="M41.612,121.361Z"
               transform="translate(-41.149 -121.361)"
               fill="#fff"
               id="path72" />
            <path
               d="M41.625,121.361Z"
               transform="translate(-41.132 -121.361)"
               fill="#fff"
               id="path74" />
            <path
               d="M41.638,121.361Z"
               transform="translate(-41.115 -121.361)"
               fill="#fff"
               id="path76" />
            <path
               d="M41.651,121.361Z"
               transform="translate(-41.097 -121.361)"
               fill="#fff"
               id="path78" />
            <path
               d="M41.665,121.361Z"
               transform="translate(-41.079 -121.361)"
               fill="#fff"
               id="path80" />
            <path
               d="M41.678,121.361Z"
               transform="translate(-41.062 -121.361)"
               fill="#fff"
               id="path82" />
            <path
               d="M41.691,121.361Z"
               transform="translate(-41.044 -121.361)"
               fill="#fff"
               id="path84" />
            <path
               d="M41.7,121.361Z"
               transform="translate(-41.027 -121.361)"
               fill="#fff"
               id="path86" />
            <path
               d="M41.718,121.361Z"
               transform="translate(-41.009 -121.361)"
               fill="#fff"
               id="path88" />
            <path
               d="M41.731,121.361Z"
               transform="translate(-40.991 -121.361)"
               fill="#fff"
               id="path90" />
            <path
               d="M41.744,121.361Z"
               transform="translate(-40.974 -121.361)"
               fill="#fff"
               id="path92" />
            <path
               d="M41.757,121.361Z"
               transform="translate(-40.957 -121.361)"
               fill="#fff"
               id="path94" />
            <path
               d="M41.771,121.361Z"
               transform="translate(-40.938 -121.361)"
               fill="#fff"
               id="path96" />
            <path
               d="M41.784,121.361Z"
               transform="translate(-40.921 -121.361)"
               fill="#fff"
               id="path98" />
            <path
               d="M41.8,121.361Z"
               transform="translate(-40.904 -121.361)"
               fill="#fff"
               id="path100" />
            <path
               d="M41.81,121.361Z"
               transform="translate(-40.887 -121.361)"
               fill="#fff"
               id="path102" />
            <path
               d="M41.824,121.361Z"
               transform="translate(-40.868 -121.361)"
               fill="#fff"
               id="path104" />
            <path
               d="M41.837,121.361Z"
               transform="translate(-40.851 -121.361)"
               fill="#fff"
               id="path106" />
            <path
               d="M41.85,121.361Z"
               transform="translate(-40.834 -121.361)"
               fill="#fff"
               id="path108" />
            <path
               d="M41.863,121.361Z"
               transform="translate(-40.816 -121.361)"
               fill="#fff"
               id="path110" />
            <path
               d="M41.877,121.361Z"
               transform="translate(-40.798 -121.361)"
               fill="#fff"
               id="path112" />
            <path
               d="M41.89,121.361Z"
               transform="translate(-40.78 -121.361)"
               fill="#fff"
               id="path114" />
            <path
               d="M41.9,121.361Z"
               transform="translate(-40.763 -121.361)"
               fill="#fff"
               id="path116" />
            <path
               d="M41.916,121.361Z"
               transform="translate(-40.746 -121.361)"
               fill="#fff"
               id="path118" />
            <path
               d="M41.93,121.361Z"
               transform="translate(-40.727 -121.361)"
               fill="#fff"
               id="path120" />
            <path
               d="M41.943,121.361Z"
               transform="translate(-40.71 -121.361)"
               fill="#fff"
               id="path122" />
            <path
               d="M41.956,121.361Z"
               transform="translate(-40.693 -121.361)"
               fill="#fff"
               id="path124" />
            <path
               d="M41.969,121.361Z"
               transform="translate(-40.676 -121.361)"
               fill="#fff"
               id="path126" />
            <path
               d="M41.983,121.361Z"
               transform="translate(-40.657 -121.361)"
               fill="#fff"
               id="path128" />
            <path
               d="M42,121.361Z"
               transform="translate(-40.64 -121.361)"
               fill="#fff"
               id="path130" />
            <path
               d="M42.009,121.361Z"
               transform="translate(-40.623 -121.361)"
               fill="#fff"
               id="path132" />
            <path
               d="M42.022,121.361Z"
               transform="translate(-40.605 -121.361)"
               fill="#fff"
               id="path134" />
            <path
               d="M42.036,121.361Z"
               transform="translate(-40.587 -121.361)"
               fill="#fff"
               id="path136" />
            <path
               d="M42.049,121.361Z"
               transform="translate(-40.57 -121.361)"
               fill="#fff"
               id="path138" />
            <path
               d="M42.062,121.361Z"
               transform="translate(-40.552 -121.361)"
               fill="#fff"
               id="path140" />
            <path
               d="M42.075,121.361Z"
               transform="translate(-40.535 -121.361)"
               fill="#fff"
               id="path142" />
            <path
               d="M42.089,121.361Z"
               transform="translate(-40.517 -121.361)"
               fill="#fff"
               id="path144" />
            <path
               d="M42.1,121.361Z"
               transform="translate(-40.499 -121.361)"
               fill="#fff"
               id="path146" />
            <path
               d="M42.115,121.361Z"
               transform="translate(-40.482 -121.361)"
               fill="#fff"
               id="path148" />
            <path
               d="M42.128,121.361Z"
               transform="translate(-40.465 -121.361)"
               fill="#fff"
               id="path150" />
            <path
               d="M42.142,121.361Z"
               transform="translate(-40.446 -121.361)"
               fill="#fff"
               id="path152" />
            <path
               d="M42.155,121.361Z"
               transform="translate(-40.429 -121.361)"
               fill="#fff"
               id="path154" />
            <path
               d="M42.168,121.361Z"
               transform="translate(-40.412 -121.361)"
               fill="#fff"
               id="path156" />
            <path
               d="M42.181,121.361Z"
               transform="translate(-40.395 -121.361)"
               fill="#fff"
               id="path158" />
            <path
               d="M42.195,121.361Z"
               transform="translate(-40.376 -121.361)"
               fill="#fff"
               id="path160" />
            <path
               d="M42.208,121.361Z"
               transform="translate(-40.359 -121.361)"
               fill="#fff"
               id="path162" />
            <path
               d="M42.221,121.361Z"
               transform="translate(-40.342 -121.361)"
               fill="#fff"
               id="path164" />
            <path
               d="M42.234,121.361Z"
               transform="translate(-40.324 -121.361)"
               fill="#fff"
               id="path166" />
            <path
               d="M42.248,121.361Z"
               transform="translate(-40.306 -121.361)"
               fill="#fff"
               id="path168" />
            <path
               d="M42.261,121.361Z"
               transform="translate(-40.288 -121.361)"
               fill="#fff"
               id="path170" />
            <path
               d="M42.274,121.361Z"
               transform="translate(-40.271 -121.361)"
               fill="#fff"
               id="path172" />
            <path
               d="M42.287,121.361Z"
               transform="translate(-40.254 -121.361)"
               fill="#fff"
               id="path174" />
            <path
               d="M42.3,121.361Z"
               transform="translate(-40.235 -121.361)"
               fill="#fff"
               id="path176" />
            <path
               d="M42.314,121.361Z"
               transform="translate(-40.218 -121.361)"
               fill="#fff"
               id="path178" />
            <path
               d="M42.327,121.361Z"
               transform="translate(-40.201 -121.361)"
               fill="#fff"
               id="path180" />
            <path
               d="M42.34,121.361Z"
               transform="translate(-40.184 -121.361)"
               fill="#fff"
               id="path182" />
            <path
               d="M42.354,121.361Z"
               transform="translate(-40.165 -121.361)"
               fill="#fff"
               id="path184" />
            <path
               d="M42.367,121.361Z"
               transform="translate(-40.148 -121.361)"
               fill="#fff"
               id="path186" />
            <path
               d="M42.38,121.361Z"
               transform="translate(-40.131 -121.361)"
               fill="#fff"
               id="path188" />
            <path
               d="M42.393,121.361Z"
               transform="translate(-40.113 -121.361)"
               fill="#fff"
               id="path190" />
            <path
               d="M42.407,121.361Z"
               transform="translate(-40.095 -121.361)"
               fill="#fff"
               id="path192" />
            <path
               d="M42.42,121.361Z"
               transform="translate(-40.078 -121.361)"
               fill="#fff"
               id="path194" />
            <path
               d="M42.433,121.361Z"
               transform="translate(-40.06 -121.361)"
               fill="#fff"
               id="path196" />
            <path
               d="M42.446,121.361Z"
               transform="translate(-40.043 -121.361)"
               fill="#fff"
               id="path198" />
            <path
               d="M42.46,121.361Z"
               transform="translate(-40.025 -121.361)"
               fill="#fff"
               id="path200" />
            <path
               d="M42.473,121.361Z"
               transform="translate(-40.007 -121.361)"
               fill="#fff"
               id="path202" />
            <path
               d="M42.486,121.361Z"
               transform="translate(-39.99 -121.361)"
               fill="#fff"
               id="path204" />
            <path
               d="M42.5,121.361Z"
               transform="translate(-39.973 -121.361)"
               fill="#fff"
               id="path206" />
            <path
               d="M42.512,121.361Z"
               transform="translate(-39.956 -121.361)"
               fill="#fff"
               id="path208" />
            <path
               d="M42.526,121.361Z"
               transform="translate(-39.937 -121.361)"
               fill="#fff"
               id="path210" />
            <path
               d="M42.539,121.361Z"
               transform="translate(-39.92 -121.361)"
               fill="#fff"
               id="path212" />
            <path
               d="M42.552,121.361Z"
               transform="translate(-39.903 -121.361)"
               fill="#fff"
               id="path214" />
            <path
               d="M42.565,121.361Z"
               transform="translate(-39.885 -121.361)"
               fill="#fff"
               id="path216" />
            <path
               d="M42.579,121.361Z"
               transform="translate(-39.867 -121.361)"
               fill="#fff"
               id="path218" />
            <path
               d="M42.592,121.361Z"
               transform="translate(-39.85 -121.361)"
               fill="#fff"
               id="path220" />
            <path
               d="M42.6,121.361Z"
               transform="translate(-39.832 -121.361)"
               fill="#fff"
               id="path222" />
            <path
               d="M42.618,121.361Z"
               transform="translate(-39.815 -121.361)"
               fill="#fff"
               id="path224" />
            <path
               d="M42.632,121.361Z"
               transform="translate(-39.797 -121.361)"
               fill="#fff"
               id="path226" />
            <path
               d="M42.645,121.361Z"
               transform="translate(-39.779 -121.361)"
               fill="#fff"
               id="path228" />
            <path
               d="M42.658,121.361Z"
               transform="translate(-39.762 -121.361)"
               fill="#fff"
               id="path230" />
            <path
               d="M42.672,121.361Z"
               transform="translate(-39.743 -121.361)"
               fill="#fff"
               id="path232" />
            <path
               d="M42.685,121.361Z"
               transform="translate(-39.726 -121.361)"
               fill="#fff"
               id="path234" />
            <path
               d="M42.7,121.361Z"
               transform="translate(-39.709 -121.361)"
               fill="#fff"
               id="path236" />
            <path
               d="M42.711,121.361Z"
               transform="translate(-39.692 -121.361)"
               fill="#fff"
               id="path238" />
            <path
               d="M42.725,121.361Z"
               transform="translate(-39.673 -121.361)"
               fill="#fff"
               id="path240" />
            <path
               d="M42.738,121.361Z"
               transform="translate(-39.656 -121.361)"
               fill="#fff"
               id="path242" />
            <path
               d="M42.751,121.361Z"
               transform="translate(-39.639 -121.361)"
               fill="#fff"
               id="path244" />
            <path
               d="M42.764,121.361Z"
               transform="translate(-39.621 -121.361)"
               fill="#fff"
               id="path246" />
            <path
               d="M42.778,121.361Z"
               transform="translate(-39.603 -121.361)"
               fill="#fff"
               id="path248" />
            <path
               d="M42.791,121.361Z"
               transform="translate(-39.586 -121.361)"
               fill="#fff"
               id="path250" />
            <path
               d="M42.8,121.361Z"
               transform="translate(-39.568 -121.361)"
               fill="#fff"
               id="path252" />
            <path
               d="M42.817,121.361Z"
               transform="translate(-39.551 -121.361)"
               fill="#fff"
               id="path254" />
            <path
               d="M42.831,121.361Z"
               transform="translate(-39.533 -121.361)"
               fill="#fff"
               id="path256" />
            <path
               d="M42.844,121.361Z"
               transform="translate(-39.515 -121.361)"
               fill="#fff"
               id="path258" />
            <path
               d="M42.857,121.361Z"
               transform="translate(-39.498 -121.361)"
               fill="#fff"
               id="path260" />
            <path
               d="M42.87,121.361Z"
               transform="translate(-39.481 -121.361)"
               fill="#fff"
               id="path262" />
            <path
               d="M42.883,121.361Z"
               transform="translate(-39.464 -121.361)"
               fill="#fff"
               id="path264" />
            <path
               d="M42.9,121.361Z"
               transform="translate(-39.445 -121.361)"
               fill="#fff"
               id="path266" />
            <path
               d="M42.91,121.361Z"
               transform="translate(-39.428 -121.361)"
               fill="#fff"
               id="path268" />
            <path
               d="M42.923,121.361Z"
               transform="translate(-39.411 -121.361)"
               fill="#fff"
               id="path270" />
            <path
               d="M42.936,121.361Z"
               transform="translate(-39.393 -121.361)"
               fill="#fff"
               id="path272" />
            <path
               d="M42.95,121.361Z"
               transform="translate(-39.375 -121.361)"
               fill="#fff"
               id="path274" />
            <path
               d="M42.963,121.361Z"
               transform="translate(-39.358 -121.361)"
               fill="#fff"
               id="path276" />
            <path
               d="M42.976,121.361Z"
               transform="translate(-39.34 -121.361)"
               fill="#fff"
               id="path278" />
            <path
               d="M42.989,121.361Z"
               transform="translate(-39.323 -121.361)"
               fill="#fff"
               id="path280" />
            <path
               d="M43,121.361Z"
               transform="translate(-39.305 -121.361)"
               fill="#fff"
               id="path282" />
            <path
               d="M43.016,121.361Z"
               transform="translate(-39.287 -121.361)"
               fill="#fff"
               id="path284" />
            <path
               d="M43.029,121.361Z"
               transform="translate(-39.27 -121.361)"
               fill="#fff"
               id="path286" />
            <path
               d="M43.042,121.361Z"
               transform="translate(-39.253 -121.361)"
               fill="#fff"
               id="path288" />
            <path
               d="M43.056,121.361Z"
               transform="translate(-39.234 -121.361)"
               fill="#fff"
               id="path290" />
            <path
               d="M43.069,121.361Z"
               transform="translate(-39.217 -121.361)"
               fill="#fff"
               id="path292" />
            <path
               d="M43.082,121.361Z"
               transform="translate(-39.2 -121.361)"
               fill="#fff"
               id="path294" />
            <path
               d="M43.1,121.361Z"
               transform="translate(-39.183 -121.361)"
               fill="#fff"
               id="path296" />
            <path
               d="M43.109,121.361Z"
               transform="translate(-39.164 -121.361)"
               fill="#fff"
               id="path298" />
            <path
               d="M43.122,121.361Z"
               transform="translate(-39.147 -121.361)"
               fill="#fff"
               id="path300" />
            <path
               d="M43.135,121.361Z"
               transform="translate(-39.13 -121.361)"
               fill="#fff"
               id="path302" />
            <path
               d="M43.148,121.361Z"
               transform="translate(-39.112 -121.361)"
               fill="#fff"
               id="path304" />
            <path
               d="M43.162,121.361Z"
               transform="translate(-39.094 -121.361)"
               fill="#fff"
               id="path306" />
            <path
               d="M43.175,121.361Z"
               transform="translate(-39.076 -121.361)"
               fill="#fff"
               id="path308" />
            <path
               d="M43.188,121.361Z"
               transform="translate(-39.059 -121.361)"
               fill="#fff"
               id="path310" />
            <path
               d="M43.2,121.361Z"
               transform="translate(-39.042 -121.361)"
               fill="#fff"
               id="path312" />
            <path
               d="M43.215,121.361Z"
               transform="translate(-39.023 -121.361)"
               fill="#fff"
               id="path314" />
            <path
               d="M43.228,121.361Z"
               transform="translate(-39.006 -121.361)"
               fill="#fff"
               id="path316" />
            <path
               d="M43.241,121.361Z"
               transform="translate(-38.989 -121.361)"
               fill="#fff"
               id="path318" />
            <path
               d="M43.254,121.361Z"
               transform="translate(-38.972 -121.361)"
               fill="#fff"
               id="path320" />
            <path
               d="M43.268,121.361Z"
               transform="translate(-38.953 -121.361)"
               fill="#fff"
               id="path322" />
            <path
               d="M43.281,121.361Z"
               transform="translate(-38.936 -121.361)"
               fill="#fff"
               id="path324" />
            <path
               d="M43.294,121.361Z"
               transform="translate(-38.919 -121.361)"
               fill="#fff"
               id="path326" />
            <path
               d="M43.307,121.361Z"
               transform="translate(-38.901 -121.361)"
               fill="#fff"
               id="path328" />
            <path
               d="M43.321,121.361Z"
               transform="translate(-38.883 -121.361)"
               fill="#fff"
               id="path330" />
            <path
               d="M43.334,121.361Z"
               transform="translate(-38.866 -121.361)"
               fill="#fff"
               id="path332" />
            <path
               d="M43.347,121.361Z"
               transform="translate(-38.848 -121.361)"
               fill="#fff"
               id="path334" />
            <path
               d="M43.36,121.361Z"
               transform="translate(-38.831 -121.361)"
               fill="#fff"
               id="path336" />
            <path
               d="M43.374,121.361Z"
               transform="translate(-38.813 -121.361)"
               fill="#fff"
               id="path338" />
            <path
               d="M43.387,121.361Z"
               transform="translate(-38.795 -121.361)"
               fill="#fff"
               id="path340" />
            <path
               d="M43.4,121.361Z"
               transform="translate(-38.778 -121.361)"
               fill="#fff"
               id="path342" />
            <path
               d="M43.413,121.361Z"
               transform="translate(-38.761 -121.361)"
               fill="#fff"
               id="path344" />
            <path
               d="M43.427,121.361Z"
               transform="translate(-38.742 -121.361)"
               fill="#fff"
               id="path346" />
            <path
               d="M43.44,121.361Z"
               transform="translate(-38.725 -121.361)"
               fill="#fff"
               id="path348" />
            <path
               d="M43.453,121.361Z"
               transform="translate(-38.708 -121.361)"
               fill="#fff"
               id="path350" />
            <path
               d="M43.466,121.361Z"
               transform="translate(-38.691 -121.361)"
               fill="#fff"
               id="path352" />
            <path
               d="M43.48,121.361Z"
               transform="translate(-38.672 -121.361)"
               fill="#fff"
               id="path354" />
            <path
               d="M43.493,121.361Z"
               transform="translate(-38.655 -121.361)"
               fill="#fff"
               id="path356" />
            <path
               d="M43.506,121.361Z"
               transform="translate(-38.638 -121.361)"
               fill="#fff"
               id="path358" />
            <path
               d="M43.519,121.361Z"
               transform="translate(-38.62 -121.361)"
               fill="#fff"
               id="path360" />
            <path
               d="M43.533,121.361Z"
               transform="translate(-38.602 -121.361)"
               fill="#fff"
               id="path362" />
            <path
               d="M43.546,121.361Z"
               transform="translate(-38.585 -121.361)"
               fill="#fff"
               id="path364" />
            <path
               d="M43.559,121.361Z"
               transform="translate(-38.567 -121.361)"
               fill="#fff"
               id="path366" />
            <path
               d="M43.572,121.361Z"
               transform="translate(-38.55 -121.361)"
               fill="#fff"
               id="path368" />
            <path
               d="M43.586,121.361Z"
               transform="translate(-38.531 -121.361)"
               fill="#fff"
               id="path370" />
            <path
               d="M43.6,121.361Z"
               transform="translate(-38.514 -121.361)"
               fill="#fff"
               id="path372" />
            <path
               d="M43.612,121.361Z"
               transform="translate(-38.497 -121.361)"
               fill="#fff"
               id="path374" />
            <path
               d="M43.625,121.361Z"
               transform="translate(-38.48 -121.361)"
               fill="#fff"
               id="path376" />
            <path
               d="M43.639,121.361Z"
               transform="translate(-38.461 -121.361)"
               fill="#fff"
               id="path378" />
            <path
               d="M43.652,121.361Z"
               transform="translate(-38.444 -121.361)"
               fill="#fff"
               id="path380" />
            <path
               d="M43.665,121.361Z"
               transform="translate(-38.427 -121.361)"
               fill="#fff"
               id="path382" />
            <path
               d="M43.678,121.361Z"
               transform="translate(-38.409 -121.361)"
               fill="#fff"
               id="path384" />
            <path
               d="M43.692,121.361Z"
               transform="translate(-38.391 -121.361)"
               fill="#fff"
               id="path386" />
            <path
               d="M43.705,121.361Z"
               transform="translate(-38.374 -121.361)"
               fill="#fff"
               id="path388" />
            <path
               d="M43.718,121.361Z"
               transform="translate(-38.356 -121.361)"
               fill="#fff"
               id="path390" />
            <path
               d="M43.731,121.361Z"
               transform="translate(-38.339 -121.361)"
               fill="#fff"
               id="path392" />
            <path
               d="M43.744,121.361Z"
               transform="translate(-38.322 -121.361)"
               fill="#fff"
               id="path394" />
            <path
               d="M43.758,121.361Z"
               transform="translate(-38.303 -121.361)"
               fill="#fff"
               id="path396" />
            <path
               d="M43.771,121.361Z"
               transform="translate(-38.286 -121.361)"
               fill="#fff"
               id="path398" />
            <path
               d="M43.784,121.361Z"
               transform="translate(-38.269 -121.361)"
               fill="#fff"
               id="path400" />
            <path
               d="M43.8,121.361Z"
               transform="translate(-38.252 -121.361)"
               fill="#fff"
               id="path402" />
            <path
               d="M43.811,121.361Z"
               transform="translate(-38.233 -121.361)"
               fill="#fff"
               id="path404" />
            <path
               d="M43.824,121.361Z"
               transform="translate(-38.216 -121.361)"
               fill="#fff"
               id="path406" />
            <path
               d="M43.837,121.361Z"
               transform="translate(-38.199 -121.361)"
               fill="#fff"
               id="path408" />
            <path
               d="M43.85,121.361Z"
               transform="translate(-38.181 -121.361)"
               fill="#fff"
               id="path410" />
            <path
               d="M43.864,121.361Z"
               transform="translate(-38.163 -121.361)"
               fill="#fff"
               id="path412" />
            <path
               d="M43.877,121.361Z"
               transform="translate(-38.146 -121.361)"
               fill="#fff"
               id="path414" />
            <path
               d="M43.89,121.361Z"
               transform="translate(-38.128 -121.361)"
               fill="#fff"
               id="path416" />
            <path
               d="M43.9,121.361Z"
               transform="translate(-38.11 -121.361)"
               fill="#fff"
               id="path418" />
            <path
               d="M43.917,121.361Z"
               transform="translate(-38.093 -121.361)"
               fill="#fff"
               id="path420" />
            <path
               d="M43.93,121.361Z"
               transform="translate(-38.075 -121.361)"
               fill="#fff"
               id="path422" />
            <path
               d="M43.943,121.361Z"
               transform="translate(-38.058 -121.361)"
               fill="#fff"
               id="path424" />
            <path
               d="M43.957,121.361Z"
               transform="translate(-38.039 -121.361)"
               fill="#fff"
               id="path426" />
            <path
               d="M43.97,121.361Z"
               transform="translate(-38.022 -121.361)"
               fill="#fff"
               id="path428" />
            <path
               d="M43.983,121.361Z"
               transform="translate(-38.005 -121.361)"
               fill="#fff"
               id="path430" />
            <path
               d="M44,121.361Z"
               transform="translate(-37.988 -121.361)"
               fill="#fff"
               id="path432" />
            <path
               d="M44.01,121.361Z"
               transform="translate(-37.969 -121.361)"
               fill="#fff"
               id="path434" />
            <path
               d="M44.023,121.361Z"
               transform="translate(-37.952 -121.361)"
               fill="#fff"
               id="path436" />
            <path
               d="M44.036,121.361Z"
               transform="translate(-37.935 -121.361)"
               fill="#fff"
               id="path438" />
            <path
               d="M44.049,121.361Z"
               transform="translate(-37.917 -121.361)"
               fill="#fff"
               id="path440" />
            <path
               d="M44.063,121.361Z"
               transform="translate(-37.899 -121.361)"
               fill="#fff"
               id="path442" />
            <path
               d="M44.076,121.361Z"
               transform="translate(-37.882 -121.361)"
               fill="#fff"
               id="path444" />
            <path
               d="M44.089,121.361Z"
               transform="translate(-37.864 -121.361)"
               fill="#fff"
               id="path446" />
            <path
               d="M44.1,121.361Z"
               transform="translate(-37.847 -121.361)"
               fill="#fff"
               id="path448" />
            <path
               d="M44.115,121.361Z"
               transform="translate(-37.83 -121.361)"
               fill="#fff"
               id="path450" />
            <path
               d="M44.129,121.361Z"
               transform="translate(-37.811 -121.361)"
               fill="#fff"
               id="path452" />
            <path
               d="M44.142,121.361Z"
               transform="translate(-37.794 -121.361)"
               fill="#fff"
               id="path454" />
            <path
               d="M44.155,121.361Z"
               transform="translate(-37.777 -121.361)"
               fill="#fff"
               id="path456" />
            <path
               d="M44.168,121.361Z"
               transform="translate(-37.76 -121.361)"
               fill="#fff"
               id="path458" />
            <path
               d="M44.182,121.361Z"
               transform="translate(-37.741 -121.361)"
               fill="#fff"
               id="path460" />
            <path
               d="M44.195,121.361Z"
               transform="translate(-37.724 -121.361)"
               fill="#fff"
               id="path462" />
            <path
               d="M44.208,121.361Z"
               transform="translate(-37.707 -121.361)"
               fill="#fff"
               id="path464" />
            <path
               d="M44.221,121.361Z"
               transform="translate(-37.689 -121.361)"
               fill="#fff"
               id="path466" />
            <path
               d="M44.235,121.361Z"
               transform="translate(-37.671 -121.361)"
               fill="#fff"
               id="path468" />
            <path
               d="M44.248,121.361Z"
               transform="translate(-37.654 -121.361)"
               fill="#fff"
               id="path470" />
            <path
               d="M44.261,121.361Z"
               transform="translate(-37.636 -121.361)"
               fill="#fff"
               id="path472" />
            <path
               d="M44.274,121.361Z"
               transform="translate(-37.619 -121.361)"
               fill="#fff"
               id="path474" />
            <path
               d="M44.288,121.361Z"
               transform="translate(-37.601 -121.361)"
               fill="#fff"
               id="path476" />
            <path
               d="M44.3,121.361Z"
               transform="translate(-37.583 -121.361)"
               fill="#fff"
               id="path478" />
            <path
               d="M44.314,121.361Z"
               transform="translate(-37.566 -121.361)"
               fill="#fff"
               id="path480" />
            <path
               d="M44.327,121.361Z"
               transform="translate(-37.549 -121.361)"
               fill="#fff"
               id="path482" />
            <path
               d="M44.341,121.361Z"
               transform="translate(-37.53 -121.361)"
               fill="#fff"
               id="path484" />
            <path
               d="M44.354,121.361Z"
               transform="translate(-37.513 -121.361)"
               fill="#fff"
               id="path486" />
            <path
               d="M44.367,121.361Z"
               transform="translate(-37.496 -121.361)"
               fill="#fff"
               id="path488" />
            <path
               d="M44.38,121.361Z"
               transform="translate(-37.479 -121.361)"
               fill="#fff"
               id="path490" />
            <path
               d="M44.38,121.361Z"
               transform="translate(-37.479 -121.361)"
               fill="#fff"
               id="path492" />
          </g>
        </g>
        <rect
           width="6.902"
           height="2.326"
           transform="translate(0)"
           fill="#fff"
           id="rect498" />
      </g>
      <g
         transform="translate(0 6.317)"
         id="g960">
        <g
           transform="translate(0.001 1.163)"
           id="g956">
          <g
             clip-path="url(#d)"
             id="g954">
            <path
               d="M41.345,124.077Z"
               transform="translate(-41.345 -124.077)"
               fill="#fff"
               id="path502" />
            <path
               d="M41.358,124.077Z"
               transform="translate(-41.328 -124.077)"
               fill="#fff"
               id="path504" />
            <path
               d="M41.372,124.077Z"
               transform="translate(-41.309 -124.077)"
               fill="#fff"
               id="path506" />
            <path
               d="M41.386,124.077Z"
               transform="translate(-41.291 -124.077)"
               fill="#fff"
               id="path508" />
            <path
               d="M41.4,124.077Z"
               transform="translate(-41.273 -124.077)"
               fill="#fff"
               id="path510" />
            <path
               d="M41.413,124.077Z"
               transform="translate(-41.255 -124.077)"
               fill="#fff"
               id="path512" />
            <path
               d="M41.426,124.077Z"
               transform="translate(-41.238 -124.077)"
               fill="#fff"
               id="path514" />
            <path
               d="M41.44,124.077Z"
               transform="translate(-41.219 -124.077)"
               fill="#fff"
               id="path516" />
            <path
               d="M41.453,124.077Z"
               transform="translate(-41.202 -124.077)"
               fill="#fff"
               id="path518" />
            <path
               d="M41.467,124.077Z"
               transform="translate(-41.183 -124.077)"
               fill="#fff"
               id="path520" />
            <path
               d="M41.48,124.077Z"
               transform="translate(-41.166 -124.077)"
               fill="#fff"
               id="path522" />
            <path
               d="M41.494,124.077Z"
               transform="translate(-41.147 -124.077)"
               fill="#fff"
               id="path524" />
            <path
               d="M41.507,124.077Z"
               transform="translate(-41.13 -124.077)"
               fill="#fff"
               id="path526" />
            <path
               d="M41.521,124.077Z"
               transform="translate(-41.112 -124.077)"
               fill="#fff"
               id="path528" />
            <path
               d="M41.535,124.077Z"
               transform="translate(-41.093 -124.077)"
               fill="#fff"
               id="path530" />
            <path
               d="M41.548,124.077Z"
               transform="translate(-41.076 -124.077)"
               fill="#fff"
               id="path532" />
            <path
               d="M41.562,124.077Z"
               transform="translate(-41.057 -124.077)"
               fill="#fff"
               id="path534" />
            <path
               d="M41.575,124.077Z"
               transform="translate(-41.04 -124.077)"
               fill="#fff"
               id="path536" />
            <path
               d="M41.589,124.077Z"
               transform="translate(-41.021 -124.077)"
               fill="#fff"
               id="path538" />
            <path
               d="M41.6,124.077Z"
               transform="translate(-41.004 -124.077)"
               fill="#fff"
               id="path540" />
            <path
               d="M41.616,124.077Z"
               transform="translate(-40.986 -124.077)"
               fill="#fff"
               id="path542" />
            <path
               d="M41.629,124.077Z"
               transform="translate(-40.968 -124.077)"
               fill="#fff"
               id="path544" />
            <path
               d="M41.643,124.077Z"
               transform="translate(-40.95 -124.077)"
               fill="#fff"
               id="path546" />
            <path
               d="M41.657,124.077Z"
               transform="translate(-40.931 -124.077)"
               fill="#fff"
               id="path548" />
            <path
               d="M41.67,124.077Z"
               transform="translate(-40.914 -124.077)"
               fill="#fff"
               id="path550" />
            <path
               d="M41.684,124.077Z"
               transform="translate(-40.895 -124.077)"
               fill="#fff"
               id="path552" />
            <path
               d="M41.7,124.077Z"
               transform="translate(-40.878 -124.077)"
               fill="#fff"
               id="path554" />
            <path
               d="M41.711,124.077Z"
               transform="translate(-40.86 -124.077)"
               fill="#fff"
               id="path556" />
            <path
               d="M41.724,124.077Z"
               transform="translate(-40.842 -124.077)"
               fill="#fff"
               id="path558" />
            <path
               d="M41.738,124.077Z"
               transform="translate(-40.824 -124.077)"
               fill="#fff"
               id="path560" />
            <path
               d="M41.751,124.077Z"
               transform="translate(-40.807 -124.077)"
               fill="#fff"
               id="path562" />
            <path
               d="M41.765,124.077Z"
               transform="translate(-40.788 -124.077)"
               fill="#fff"
               id="path564" />
            <path
               d="M41.779,124.077Z"
               transform="translate(-40.769 -124.077)"
               fill="#fff"
               id="path566" />
            <path
               d="M41.792,124.077Z"
               transform="translate(-40.752 -124.077)"
               fill="#fff"
               id="path568" />
            <path
               d="M41.806,124.077Z"
               transform="translate(-40.734 -124.077)"
               fill="#fff"
               id="path570" />
            <path
               d="M41.819,124.077Z"
               transform="translate(-40.716 -124.077)"
               fill="#fff"
               id="path572" />
            <path
               d="M41.833,124.077Z"
               transform="translate(-40.698 -124.077)"
               fill="#fff"
               id="path574" />
            <path
               d="M41.846,124.077Z"
               transform="translate(-40.681 -124.077)"
               fill="#fff"
               id="path576" />
            <path
               d="M41.86,124.077Z"
               transform="translate(-40.662 -124.077)"
               fill="#fff"
               id="path578" />
            <path
               d="M41.873,124.077Z"
               transform="translate(-40.645 -124.077)"
               fill="#fff"
               id="path580" />
            <path
               d="M41.887,124.077Z"
               transform="translate(-40.626 -124.077)"
               fill="#fff"
               id="path582" />
            <path
               d="M41.9,124.077Z"
               transform="translate(-40.609 -124.077)"
               fill="#fff"
               id="path584" />
            <path
               d="M41.914,124.077Z"
               transform="translate(-40.59 -124.077)"
               fill="#fff"
               id="path586" />
            <path
               d="M41.928,124.077Z"
               transform="translate(-40.572 -124.077)"
               fill="#fff"
               id="path588" />
            <path
               d="M41.941,124.077Z"
               transform="translate(-40.555 -124.077)"
               fill="#fff"
               id="path590" />
            <path
               d="M41.955,124.077Z"
               transform="translate(-40.536 -124.077)"
               fill="#fff"
               id="path592" />
            <path
               d="M41.968,124.077Z"
               transform="translate(-40.519 -124.077)"
               fill="#fff"
               id="path594" />
            <path
               d="M41.982,124.077Z"
               transform="translate(-40.5 -124.077)"
               fill="#fff"
               id="path596" />
            <path
               d="M41.995,124.077Z"
               transform="translate(-40.483 -124.077)"
               fill="#fff"
               id="path598" />
            <path
               d="M42.009,124.077Z"
               transform="translate(-40.464 -124.077)"
               fill="#fff"
               id="path600" />
            <path
               d="M42.022,124.077Z"
               transform="translate(-40.447 -124.077)"
               fill="#fff"
               id="path602" />
            <path
               d="M42.036,124.077Z"
               transform="translate(-40.429 -124.077)"
               fill="#fff"
               id="path604" />
            <path
               d="M42.05,124.077Z"
               transform="translate(-40.41 -124.077)"
               fill="#fff"
               id="path606" />
            <path
               d="M42.063,124.077Z"
               transform="translate(-40.393 -124.077)"
               fill="#fff"
               id="path608" />
            <path
               d="M42.077,124.077Z"
               transform="translate(-40.374 -124.077)"
               fill="#fff"
               id="path610" />
            <path
               d="M42.09,124.077Z"
               transform="translate(-40.357 -124.077)"
               fill="#fff"
               id="path612" />
            <path
               d="M42.1,124.077Z"
               transform="translate(-40.339 -124.077)"
               fill="#fff"
               id="path614" />
            <path
               d="M42.117,124.077Z"
               transform="translate(-40.321 -124.077)"
               fill="#fff"
               id="path616" />
            <path
               d="M42.131,124.077Z"
               transform="translate(-40.303 -124.077)"
               fill="#fff"
               id="path618" />
            <path
               d="M42.144,124.077Z"
               transform="translate(-40.285 -124.077)"
               fill="#fff"
               id="path620" />
            <path
               d="M42.158,124.077Z"
               transform="translate(-40.267 -124.077)"
               fill="#fff"
               id="path622" />
            <path
               d="M42.172,124.077Z"
               transform="translate(-40.248 -124.077)"
               fill="#fff"
               id="path624" />
            <path
               d="M42.185,124.077Z"
               transform="translate(-40.231 -124.077)"
               fill="#fff"
               id="path626" />
            <path
               d="M42.2,124.077Z"
               transform="translate(-40.213 -124.077)"
               fill="#fff"
               id="path628" />
            <path
               d="M42.212,124.077Z"
               transform="translate(-40.195 -124.077)"
               fill="#fff"
               id="path630" />
            <path
               d="M42.226,124.077Z"
               transform="translate(-40.177 -124.077)"
               fill="#fff"
               id="path632" />
            <path
               d="M42.239,124.077Z"
               transform="translate(-40.16 -124.077)"
               fill="#fff"
               id="path634" />
            <path
               d="M42.253,124.077Z"
               transform="translate(-40.141 -124.077)"
               fill="#fff"
               id="path636" />
            <path
               d="M42.266,124.077Z"
               transform="translate(-40.124 -124.077)"
               fill="#fff"
               id="path638" />
            <path
               d="M42.28,124.077Z"
               transform="translate(-40.105 -124.077)"
               fill="#fff"
               id="path640" />
            <path
               d="M42.293,124.077Z"
               transform="translate(-40.088 -124.077)"
               fill="#fff"
               id="path642" />
            <path
               d="M42.307,124.077Z"
               transform="translate(-40.069 -124.077)"
               fill="#fff"
               id="path644" />
            <path
               d="M42.321,124.077Z"
               transform="translate(-40.051 -124.077)"
               fill="#fff"
               id="path646" />
            <path
               d="M42.334,124.077Z"
               transform="translate(-40.034 -124.077)"
               fill="#fff"
               id="path648" />
            <path
               d="M42.348,124.077Z"
               transform="translate(-40.015 -124.077)"
               fill="#fff"
               id="path650" />
            <path
               d="M42.361,124.077Z"
               transform="translate(-39.998 -124.077)"
               fill="#fff"
               id="path652" />
            <path
               d="M42.375,124.077Z"
               transform="translate(-39.979 -124.077)"
               fill="#fff"
               id="path654" />
            <path
               d="M42.388,124.077Z"
               transform="translate(-39.962 -124.077)"
               fill="#fff"
               id="path656" />
            <path
               d="M42.4,124.077Z"
               transform="translate(-39.943 -124.077)"
               fill="#fff"
               id="path658" />
            <path
               d="M42.415,124.077Z"
               transform="translate(-39.926 -124.077)"
               fill="#fff"
               id="path660" />
            <path
               d="M42.429,124.077Z"
               transform="translate(-39.908 -124.077)"
               fill="#fff"
               id="path662" />
            <path
               d="M42.443,124.077Z"
               transform="translate(-39.889 -124.077)"
               fill="#fff"
               id="path664" />
            <path
               d="M42.456,124.077Z"
               transform="translate(-39.872 -124.077)"
               fill="#fff"
               id="path666" />
            <path
               d="M42.47,124.077Z"
               transform="translate(-39.853 -124.077)"
               fill="#fff"
               id="path668" />
            <path
               d="M42.483,124.077Z"
               transform="translate(-39.836 -124.077)"
               fill="#fff"
               id="path670" />
            <path
               d="M42.5,124.077Z"
               transform="translate(-39.817 -124.077)"
               fill="#fff"
               id="path672" />
            <path
               d="M42.51,124.077Z"
               transform="translate(-39.8 -124.077)"
               fill="#fff"
               id="path674" />
            <path
               d="M42.524,124.077Z"
               transform="translate(-39.782 -124.077)"
               fill="#fff"
               id="path676" />
            <path
               d="M42.537,124.077Z"
               transform="translate(-39.764 -124.077)"
               fill="#fff"
               id="path678" />
            <path
               d="M42.551,124.077Z"
               transform="translate(-39.746 -124.077)"
               fill="#fff"
               id="path680" />
            <path
               d="M42.565,124.077Z"
               transform="translate(-39.727 -124.077)"
               fill="#fff"
               id="path682" />
            <path
               d="M42.578,124.077Z"
               transform="translate(-39.71 -124.077)"
               fill="#fff"
               id="path684" />
            <path
               d="M42.592,124.077Z"
               transform="translate(-39.691 -124.077)"
               fill="#fff"
               id="path686" />
            <path
               d="M42.6,124.077Z"
               transform="translate(-39.674 -124.077)"
               fill="#fff"
               id="path688" />
            <path
               d="M42.619,124.077Z"
               transform="translate(-39.656 -124.077)"
               fill="#fff"
               id="path690" />
            <path
               d="M42.632,124.077Z"
               transform="translate(-39.638 -124.077)"
               fill="#fff"
               id="path692" />
            <path
               d="M42.646,124.077Z"
               transform="translate(-39.62 -124.077)"
               fill="#fff"
               id="path694" />
            <path
               d="M42.659,124.077Z"
               transform="translate(-39.603 -124.077)"
               fill="#fff"
               id="path696" />
            <path
               d="M42.673,124.077Z"
               transform="translate(-39.584 -124.077)"
               fill="#fff"
               id="path698" />
            <path
               d="M42.686,124.077Z"
               transform="translate(-39.567 -124.077)"
               fill="#fff"
               id="path700" />
            <path
               d="M42.7,124.077Z"
               transform="translate(-39.548 -124.077)"
               fill="#fff"
               id="path702" />
            <path
               d="M42.714,124.077Z"
               transform="translate(-39.53 -124.077)"
               fill="#fff"
               id="path704" />
            <path
               d="M42.727,124.077Z"
               transform="translate(-39.512 -124.077)"
               fill="#fff"
               id="path706" />
            <path
               d="M42.741,124.077Z"
               transform="translate(-39.494 -124.077)"
               fill="#fff"
               id="path708" />
            <path
               d="M42.754,124.077Z"
               transform="translate(-39.477 -124.077)"
               fill="#fff"
               id="path710" />
            <path
               d="M42.768,124.077Z"
               transform="translate(-39.458 -124.077)"
               fill="#fff"
               id="path712" />
            <path
               d="M42.781,124.077Z"
               transform="translate(-39.441 -124.077)"
               fill="#fff"
               id="path714" />
            <path
               d="M42.795,124.077Z"
               transform="translate(-39.422 -124.077)"
               fill="#fff"
               id="path716" />
            <path
               d="M42.808,124.077Z"
               transform="translate(-39.405 -124.077)"
               fill="#fff"
               id="path718" />
            <path
               d="M42.822,124.077Z"
               transform="translate(-39.386 -124.077)"
               fill="#fff"
               id="path720" />
            <path
               d="M42.836,124.077Z"
               transform="translate(-39.368 -124.077)"
               fill="#fff"
               id="path722" />
            <path
               d="M42.849,124.077Z"
               transform="translate(-39.351 -124.077)"
               fill="#fff"
               id="path724" />
            <path
               d="M42.863,124.077Z"
               transform="translate(-39.332 -124.077)"
               fill="#fff"
               id="path726" />
            <path
               d="M42.876,124.077Z"
               transform="translate(-39.315 -124.077)"
               fill="#fff"
               id="path728" />
            <path
               d="M42.89,124.077Z"
               transform="translate(-39.296 -124.077)"
               fill="#fff"
               id="path730" />
            <path
               d="M42.9,124.077Z"
               transform="translate(-39.279 -124.077)"
               fill="#fff"
               id="path732" />
            <path
               d="M42.917,124.077Z"
               transform="translate(-39.26 -124.077)"
               fill="#fff"
               id="path734" />
            <path
               d="M42.93,124.077Z"
               transform="translate(-39.243 -124.077)"
               fill="#fff"
               id="path736" />
            <path
               d="M42.944,124.077Z"
               transform="translate(-39.225 -124.077)"
               fill="#fff"
               id="path738" />
            <path
               d="M42.958,124.077Z"
               transform="translate(-39.206 -124.077)"
               fill="#fff"
               id="path740" />
            <path
               d="M42.971,124.077Z"
               transform="translate(-39.189 -124.077)"
               fill="#fff"
               id="path742" />
            <path
               d="M42.985,124.077Z"
               transform="translate(-39.17 -124.077)"
               fill="#fff"
               id="path744" />
            <path
               d="M43,124.077Z"
               transform="translate(-39.153 -124.077)"
               fill="#fff"
               id="path746" />
            <path
               d="M43.012,124.077Z"
               transform="translate(-39.134 -124.077)"
               fill="#fff"
               id="path748" />
            <path
               d="M43.025,124.077Z"
               transform="translate(-39.117 -124.077)"
               fill="#fff"
               id="path750" />
            <path
               d="M43.039,124.077Z"
               transform="translate(-39.099 -124.077)"
               fill="#fff"
               id="path752" />
            <path
               d="M43.052,124.077Z"
               transform="translate(-39.081 -124.077)"
               fill="#fff"
               id="path754" />
            <path
               d="M43.066,124.077Z"
               transform="translate(-39.063 -124.077)"
               fill="#fff"
               id="path756" />
            <path
               d="M43.079,124.077Z"
               transform="translate(-39.046 -124.077)"
               fill="#fff"
               id="path758" />
            <path
               d="M43.093,124.077Z"
               transform="translate(-39.027 -124.077)"
               fill="#fff"
               id="path760" />
            <path
               d="M43.107,124.077Z"
               transform="translate(-39.008 -124.077)"
               fill="#fff"
               id="path762" />
            <path
               d="M43.12,124.077Z"
               transform="translate(-38.991 -124.077)"
               fill="#fff"
               id="path764" />
            <path
               d="M43.134,124.077Z"
               transform="translate(-38.973 -124.077)"
               fill="#fff"
               id="path766" />
            <path
               d="M43.147,124.077Z"
               transform="translate(-38.955 -124.077)"
               fill="#fff"
               id="path768" />
            <path
               d="M43.161,124.077Z"
               transform="translate(-38.937 -124.077)"
               fill="#fff"
               id="path770" />
            <path
               d="M43.174,124.077Z"
               transform="translate(-38.92 -124.077)"
               fill="#fff"
               id="path772" />
            <path
               d="M43.188,124.077Z"
               transform="translate(-38.901 -124.077)"
               fill="#fff"
               id="path774" />
            <path
               d="M43.2,124.077Z"
               transform="translate(-38.884 -124.077)"
               fill="#fff"
               id="path776" />
            <path
               d="M43.215,124.077Z"
               transform="translate(-38.865 -124.077)"
               fill="#fff"
               id="path778" />
            <path
               d="M43.229,124.077Z"
               transform="translate(-38.847 -124.077)"
               fill="#fff"
               id="path780" />
            <path
               d="M43.242,124.077Z"
               transform="translate(-38.829 -124.077)"
               fill="#fff"
               id="path782" />
            <path
               d="M43.256,124.077Z"
               transform="translate(-38.811 -124.077)"
               fill="#fff"
               id="path784" />
            <path
               d="M43.269,124.077Z"
               transform="translate(-38.794 -124.077)"
               fill="#fff"
               id="path786" />
            <path
               d="M43.283,124.077Z"
               transform="translate(-38.775 -124.077)"
               fill="#fff"
               id="path788" />
            <path
               d="M43.3,124.077Z"
               transform="translate(-38.758 -124.077)"
               fill="#fff"
               id="path790" />
            <path
               d="M43.31,124.077Z"
               transform="translate(-38.739 -124.077)"
               fill="#fff"
               id="path792" />
            <path
               d="M43.323,124.077Z"
               transform="translate(-38.722 -124.077)"
               fill="#fff"
               id="path794" />
            <path
               d="M43.337,124.077Z"
               transform="translate(-38.703 -124.077)"
               fill="#fff"
               id="path796" />
            <path
               d="M43.35,124.077Z"
               transform="translate(-38.686 -124.077)"
               fill="#fff"
               id="path798" />
            <path
               d="M43.364,124.077Z"
               transform="translate(-38.668 -124.077)"
               fill="#fff"
               id="path800" />
            <path
               d="M43.378,124.077Z"
               transform="translate(-38.649 -124.077)"
               fill="#fff"
               id="path802" />
            <path
               d="M43.391,124.077Z"
               transform="translate(-38.632 -124.077)"
               fill="#fff"
               id="path804" />
            <path
               d="M43.4,124.077Z"
               transform="translate(-38.613 -124.077)"
               fill="#fff"
               id="path806" />
            <path
               d="M43.418,124.077Z"
               transform="translate(-38.596 -124.077)"
               fill="#fff"
               id="path808" />
            <path
               d="M43.432,124.077Z"
               transform="translate(-38.578 -124.077)"
               fill="#fff"
               id="path810" />
            <path
               d="M43.445,124.077Z"
               transform="translate(-38.56 -124.077)"
               fill="#fff"
               id="path812" />
            <path
               d="M43.459,124.077Z"
               transform="translate(-38.542 -124.077)"
               fill="#fff"
               id="path814" />
            <path
               d="M43.472,124.077Z"
               transform="translate(-38.524 -124.077)"
               fill="#fff"
               id="path816" />
            <path
               d="M43.486,124.077Z"
               transform="translate(-38.506 -124.077)"
               fill="#fff"
               id="path818" />
            <path
               d="M43.5,124.077Z"
               transform="translate(-38.487 -124.077)"
               fill="#fff"
               id="path820" />
            <path
               d="M43.513,124.077Z"
               transform="translate(-38.47 -124.077)"
               fill="#fff"
               id="path822" />
            <path
               d="M43.527,124.077Z"
               transform="translate(-38.452 -124.077)"
               fill="#fff"
               id="path824" />
            <path
               d="M43.54,124.077Z"
               transform="translate(-38.434 -124.077)"
               fill="#fff"
               id="path826" />
            <path
               d="M43.554,124.077Z"
               transform="translate(-38.416 -124.077)"
               fill="#fff"
               id="path828" />
            <path
               d="M43.567,124.077Z"
               transform="translate(-38.398 -124.077)"
               fill="#fff"
               id="path830" />
            <path
               d="M43.581,124.077Z"
               transform="translate(-38.38 -124.077)"
               fill="#fff"
               id="path832" />
            <path
               d="M43.594,124.077Z"
               transform="translate(-38.363 -124.077)"
               fill="#fff"
               id="path834" />
            <path
               d="M43.608,124.077Z"
               transform="translate(-38.344 -124.077)"
               fill="#fff"
               id="path836" />
            <path
               d="M43.622,124.077Z"
               transform="translate(-38.326 -124.077)"
               fill="#fff"
               id="path838" />
            <path
               d="M43.635,124.077Z"
               transform="translate(-38.308 -124.077)"
               fill="#fff"
               id="path840" />
            <path
               d="M43.649,124.077Z"
               transform="translate(-38.29 -124.077)"
               fill="#fff"
               id="path842" />
            <path
               d="M43.662,124.077Z"
               transform="translate(-38.273 -124.077)"
               fill="#fff"
               id="path844" />
            <path
               d="M43.676,124.077Z"
               transform="translate(-38.254 -124.077)"
               fill="#fff"
               id="path846" />
            <path
               d="M43.689,124.077Z"
               transform="translate(-38.237 -124.077)"
               fill="#fff"
               id="path848" />
            <path
               d="M43.7,124.077Z"
               transform="translate(-38.218 -124.077)"
               fill="#fff"
               id="path850" />
            <path
               d="M43.716,124.077Z"
               transform="translate(-38.201 -124.077)"
               fill="#fff"
               id="path852" />
            <path
               d="M43.73,124.077Z"
               transform="translate(-38.182 -124.077)"
               fill="#fff"
               id="path854" />
            <path
               d="M43.743,124.077Z"
               transform="translate(-38.165 -124.077)"
               fill="#fff"
               id="path856" />
            <path
               d="M43.757,124.077Z"
               transform="translate(-38.147 -124.077)"
               fill="#fff"
               id="path858" />
            <path
               d="M43.771,124.077Z"
               transform="translate(-38.128 -124.077)"
               fill="#fff"
               id="path860" />
            <path
               d="M43.784,124.077Z"
               transform="translate(-38.111 -124.077)"
               fill="#fff"
               id="path862" />
            <path
               d="M43.8,124.077Z"
               transform="translate(-38.092 -124.077)"
               fill="#fff"
               id="path864" />
            <path
               d="M43.811,124.077Z"
               transform="translate(-38.075 -124.077)"
               fill="#fff"
               id="path866" />
            <path
               d="M43.825,124.077Z"
               transform="translate(-38.056 -124.077)"
               fill="#fff"
               id="path868" />
            <path
               d="M43.838,124.077Z"
               transform="translate(-38.039 -124.077)"
               fill="#fff"
               id="path870" />
            <path
               d="M43.852,124.077Z"
               transform="translate(-38.021 -124.077)"
               fill="#fff"
               id="path872" />
            <path
               d="M43.865,124.077Z"
               transform="translate(-38.003 -124.077)"
               fill="#fff"
               id="path874" />
            <path
               d="M43.879,124.077Z"
               transform="translate(-37.985 -124.077)"
               fill="#fff"
               id="path876" />
            <path
               d="M43.892,124.077Z"
               transform="translate(-37.968 -124.077)"
               fill="#fff"
               id="path878" />
            <path
               d="M43.906,124.077Z"
               transform="translate(-37.949 -124.077)"
               fill="#fff"
               id="path880" />
            <path
               d="M43.92,124.077Z"
               transform="translate(-37.93 -124.077)"
               fill="#fff"
               id="path882" />
            <path
               d="M43.933,124.077Z"
               transform="translate(-37.913 -124.077)"
               fill="#fff"
               id="path884" />
            <path
               d="M43.947,124.077Z"
               transform="translate(-37.895 -124.077)"
               fill="#fff"
               id="path886" />
            <path
               d="M43.96,124.077Z"
               transform="translate(-37.877 -124.077)"
               fill="#fff"
               id="path888" />
            <path
               d="M43.974,124.077Z"
               transform="translate(-37.859 -124.077)"
               fill="#fff"
               id="path890" />
            <path
               d="M43.987,124.077Z"
               transform="translate(-37.842 -124.077)"
               fill="#fff"
               id="path892" />
            <path
               d="M44,124.077Z"
               transform="translate(-37.823 -124.077)"
               fill="#fff"
               id="path894" />
            <path
               d="M44.015,124.077Z"
               transform="translate(-37.804 -124.077)"
               fill="#fff"
               id="path896" />
            <path
               d="M44.028,124.077Z"
               transform="translate(-37.787 -124.077)"
               fill="#fff"
               id="path898" />
            <path
               d="M44.042,124.077Z"
               transform="translate(-37.769 -124.077)"
               fill="#fff"
               id="path900" />
            <path
               d="M44.055,124.077Z"
               transform="translate(-37.751 -124.077)"
               fill="#fff"
               id="path902" />
            <path
               d="M44.069,124.077Z"
               transform="translate(-37.733 -124.077)"
               fill="#fff"
               id="path904" />
            <path
               d="M44.082,124.077Z"
               transform="translate(-37.716 -124.077)"
               fill="#fff"
               id="path906" />
            <path
               d="M44.1,124.077Z"
               transform="translate(-37.697 -124.077)"
               fill="#fff"
               id="path908" />
            <path
               d="M44.109,124.077Z"
               transform="translate(-37.68 -124.077)"
               fill="#fff"
               id="path910" />
            <path
               d="M44.123,124.077Z"
               transform="translate(-37.661 -124.077)"
               fill="#fff"
               id="path912" />
            <path
               d="M44.136,124.077Z"
               transform="translate(-37.644 -124.077)"
               fill="#fff"
               id="path914" />
            <path
               d="M44.15,124.077Z"
               transform="translate(-37.625 -124.077)"
               fill="#fff"
               id="path916" />
            <path
               d="M44.164,124.077Z"
               transform="translate(-37.607 -124.077)"
               fill="#fff"
               id="path918" />
            <path
               d="M44.177,124.077Z"
               transform="translate(-37.59 -124.077)"
               fill="#fff"
               id="path920" />
            <path
               d="M44.191,124.077Z"
               transform="translate(-37.571 -124.077)"
               fill="#fff"
               id="path922" />
            <path
               d="M44.2,124.077Z"
               transform="translate(-37.554 -124.077)"
               fill="#fff"
               id="path924" />
            <path
               d="M44.218,124.077Z"
               transform="translate(-37.535 -124.077)"
               fill="#fff"
               id="path926" />
            <path
               d="M44.231,124.077Z"
               transform="translate(-37.518 -124.077)"
               fill="#fff"
               id="path928" />
            <path
               d="M44.245,124.077Z"
               transform="translate(-37.499 -124.077)"
               fill="#fff"
               id="path930" />
            <path
               d="M44.258,124.077Z"
               transform="translate(-37.482 -124.077)"
               fill="#fff"
               id="path932" />
            <path
               d="M44.272,124.077Z"
               transform="translate(-37.464 -124.077)"
               fill="#fff"
               id="path934" />
            <path
               d="M44.285,124.077Z"
               transform="translate(-37.446 -124.077)"
               fill="#fff"
               id="path936" />
            <path
               d="M44.3,124.077Z"
               transform="translate(-37.428 -124.077)"
               fill="#fff"
               id="path938" />
            <path
               d="M44.313,124.077Z"
               transform="translate(-37.409 -124.077)"
               fill="#fff"
               id="path940" />
            <path
               d="M44.326,124.077Z"
               transform="translate(-37.392 -124.077)"
               fill="#fff"
               id="path942" />
            <path
               d="M44.34,124.077Z"
               transform="translate(-37.373 -124.077)"
               fill="#fff"
               id="path944" />
            <path
               d="M44.353,124.077Z"
               transform="translate(-37.356 -124.077)"
               fill="#fff"
               id="path946" />
            <path
               d="M44.367,124.077Z"
               transform="translate(-37.338 -124.077)"
               fill="#fff"
               id="path948" />
            <path
               d="M44.38,124.077Z"
               transform="translate(-37.32 -124.077)"
               fill="#fff"
               id="path950" />
            <path
               d="M44.38,124.077Z"
               transform="translate(-37.32 -124.077)"
               fill="#fff"
               id="path952" />
          </g>
        </g>
        <rect
           width="7.061"
           height="2.326"
           fill="#fff"
           id="rect958" />
      </g>
    </g>
    <g
       transform="translate(45.124 138.602)"
       id="g1422">
      <g
         transform="translate(0.001 1.162)"
         id="g1418">
        <g
           clip-path="url(#e)"
           id="g1416">
          <path
             d="M41.345,126.793Z"
             transform="translate(-41.345 -126.793)"
             fill="#fff"
             id="path964" />
          <path
             d="M41.358,126.793Z"
             transform="translate(-41.328 -126.793)"
             fill="#fff"
             id="path966" />
          <path
             d="M41.372,126.793Z"
             transform="translate(-41.309 -126.793)"
             fill="#fff"
             id="path968" />
          <path
             d="M41.386,126.793Z"
             transform="translate(-41.291 -126.793)"
             fill="#fff"
             id="path970" />
          <path
             d="M41.4,126.793Z"
             transform="translate(-41.273 -126.793)"
             fill="#fff"
             id="path972" />
          <path
             d="M41.413,126.793Z"
             transform="translate(-41.255 -126.793)"
             fill="#fff"
             id="path974" />
          <path
             d="M41.426,126.793Z"
             transform="translate(-41.238 -126.793)"
             fill="#fff"
             id="path976" />
          <path
             d="M41.44,126.793Z"
             transform="translate(-41.219 -126.793)"
             fill="#fff"
             id="path978" />
          <path
             d="M41.453,126.793Z"
             transform="translate(-41.202 -126.793)"
             fill="#fff"
             id="path980" />
          <path
             d="M41.467,126.793Z"
             transform="translate(-41.183 -126.793)"
             fill="#fff"
             id="path982" />
          <path
             d="M41.48,126.793Z"
             transform="translate(-41.166 -126.793)"
             fill="#fff"
             id="path984" />
          <path
             d="M41.494,126.793Z"
             transform="translate(-41.147 -126.793)"
             fill="#fff"
             id="path986" />
          <path
             d="M41.507,126.793Z"
             transform="translate(-41.13 -126.793)"
             fill="#fff"
             id="path988" />
          <path
             d="M41.521,126.793Z"
             transform="translate(-41.112 -126.793)"
             fill="#fff"
             id="path990" />
          <path
             d="M41.535,126.793Z"
             transform="translate(-41.093 -126.793)"
             fill="#fff"
             id="path992" />
          <path
             d="M41.548,126.793Z"
             transform="translate(-41.076 -126.793)"
             fill="#fff"
             id="path994" />
          <path
             d="M41.562,126.793Z"
             transform="translate(-41.057 -126.793)"
             fill="#fff"
             id="path996" />
          <path
             d="M41.575,126.793Z"
             transform="translate(-41.04 -126.793)"
             fill="#fff"
             id="path998" />
          <path
             d="M41.589,126.793Z"
             transform="translate(-41.021 -126.793)"
             fill="#fff"
             id="path1000" />
          <path
             d="M41.6,126.793Z"
             transform="translate(-41.004 -126.793)"
             fill="#fff"
             id="path1002" />
          <path
             d="M41.616,126.793Z"
             transform="translate(-40.986 -126.793)"
             fill="#fff"
             id="path1004" />
          <path
             d="M41.629,126.793Z"
             transform="translate(-40.968 -126.793)"
             fill="#fff"
             id="path1006" />
          <path
             d="M41.643,126.793Z"
             transform="translate(-40.95 -126.793)"
             fill="#fff"
             id="path1008" />
          <path
             d="M41.657,126.793Z"
             transform="translate(-40.931 -126.793)"
             fill="#fff"
             id="path1010" />
          <path
             d="M41.67,126.793Z"
             transform="translate(-40.914 -126.793)"
             fill="#fff"
             id="path1012" />
          <path
             d="M41.684,126.793Z"
             transform="translate(-40.895 -126.793)"
             fill="#fff"
             id="path1014" />
          <path
             d="M41.7,126.793Z"
             transform="translate(-40.878 -126.793)"
             fill="#fff"
             id="path1016" />
          <path
             d="M41.711,126.793Z"
             transform="translate(-40.86 -126.793)"
             fill="#fff"
             id="path1018" />
          <path
             d="M41.724,126.793Z"
             transform="translate(-40.842 -126.793)"
             fill="#fff"
             id="path1020" />
          <path
             d="M41.738,126.793Z"
             transform="translate(-40.824 -126.793)"
             fill="#fff"
             id="path1022" />
          <path
             d="M41.751,126.793Z"
             transform="translate(-40.807 -126.793)"
             fill="#fff"
             id="path1024" />
          <path
             d="M41.765,126.793Z"
             transform="translate(-40.788 -126.793)"
             fill="#fff"
             id="path1026" />
          <path
             d="M41.779,126.793Z"
             transform="translate(-40.769 -126.793)"
             fill="#fff"
             id="path1028" />
          <path
             d="M41.792,126.793Z"
             transform="translate(-40.752 -126.793)"
             fill="#fff"
             id="path1030" />
          <path
             d="M41.806,126.793Z"
             transform="translate(-40.734 -126.793)"
             fill="#fff"
             id="path1032" />
          <path
             d="M41.819,126.793Z"
             transform="translate(-40.716 -126.793)"
             fill="#fff"
             id="path1034" />
          <path
             d="M41.833,126.793Z"
             transform="translate(-40.698 -126.793)"
             fill="#fff"
             id="path1036" />
          <path
             d="M41.846,126.793Z"
             transform="translate(-40.681 -126.793)"
             fill="#fff"
             id="path1038" />
          <path
             d="M41.86,126.793Z"
             transform="translate(-40.662 -126.793)"
             fill="#fff"
             id="path1040" />
          <path
             d="M41.873,126.793Z"
             transform="translate(-40.645 -126.793)"
             fill="#fff"
             id="path1042" />
          <path
             d="M41.887,126.793Z"
             transform="translate(-40.626 -126.793)"
             fill="#fff"
             id="path1044" />
          <path
             d="M41.9,126.793Z"
             transform="translate(-40.609 -126.793)"
             fill="#fff"
             id="path1046" />
          <path
             d="M41.914,126.793Z"
             transform="translate(-40.59 -126.793)"
             fill="#fff"
             id="path1048" />
          <path
             d="M41.928,126.793Z"
             transform="translate(-40.572 -126.793)"
             fill="#fff"
             id="path1050" />
          <path
             d="M41.941,126.793Z"
             transform="translate(-40.555 -126.793)"
             fill="#fff"
             id="path1052" />
          <path
             d="M41.955,126.793Z"
             transform="translate(-40.536 -126.793)"
             fill="#fff"
             id="path1054" />
          <path
             d="M41.968,126.793Z"
             transform="translate(-40.519 -126.793)"
             fill="#fff"
             id="path1056" />
          <path
             d="M41.982,126.793Z"
             transform="translate(-40.5 -126.793)"
             fill="#fff"
             id="path1058" />
          <path
             d="M41.995,126.793Z"
             transform="translate(-40.483 -126.793)"
             fill="#fff"
             id="path1060" />
          <path
             d="M42.009,126.793Z"
             transform="translate(-40.464 -126.793)"
             fill="#fff"
             id="path1062" />
          <path
             d="M42.022,126.793Z"
             transform="translate(-40.447 -126.793)"
             fill="#fff"
             id="path1064" />
          <path
             d="M42.036,126.793Z"
             transform="translate(-40.429 -126.793)"
             fill="#fff"
             id="path1066" />
          <path
             d="M42.05,126.793Z"
             transform="translate(-40.41 -126.793)"
             fill="#fff"
             id="path1068" />
          <path
             d="M42.063,126.793Z"
             transform="translate(-40.393 -126.793)"
             fill="#fff"
             id="path1070" />
          <path
             d="M42.077,126.793Z"
             transform="translate(-40.374 -126.793)"
             fill="#fff"
             id="path1072" />
          <path
             d="M42.09,126.793Z"
             transform="translate(-40.357 -126.793)"
             fill="#fff"
             id="path1074" />
          <path
             d="M42.1,126.793Z"
             transform="translate(-40.339 -126.793)"
             fill="#fff"
             id="path1076" />
          <path
             d="M42.117,126.793Z"
             transform="translate(-40.321 -126.793)"
             fill="#fff"
             id="path1078" />
          <path
             d="M42.131,126.793Z"
             transform="translate(-40.303 -126.793)"
             fill="#fff"
             id="path1080" />
          <path
             d="M42.144,126.793Z"
             transform="translate(-40.285 -126.793)"
             fill="#fff"
             id="path1082" />
          <path
             d="M42.158,126.793Z"
             transform="translate(-40.267 -126.793)"
             fill="#fff"
             id="path1084" />
          <path
             d="M42.172,126.793Z"
             transform="translate(-40.248 -126.793)"
             fill="#fff"
             id="path1086" />
          <path
             d="M42.185,126.793Z"
             transform="translate(-40.231 -126.793)"
             fill="#fff"
             id="path1088" />
          <path
             d="M42.2,126.793Z"
             transform="translate(-40.213 -126.793)"
             fill="#fff"
             id="path1090" />
          <path
             d="M42.212,126.793Z"
             transform="translate(-40.195 -126.793)"
             fill="#fff"
             id="path1092" />
          <path
             d="M42.226,126.793Z"
             transform="translate(-40.177 -126.793)"
             fill="#fff"
             id="path1094" />
          <path
             d="M42.239,126.793Z"
             transform="translate(-40.16 -126.793)"
             fill="#fff"
             id="path1096" />
          <path
             d="M42.253,126.793Z"
             transform="translate(-40.141 -126.793)"
             fill="#fff"
             id="path1098" />
          <path
             d="M42.266,126.793Z"
             transform="translate(-40.124 -126.793)"
             fill="#fff"
             id="path1100" />
          <path
             d="M42.28,126.793Z"
             transform="translate(-40.105 -126.793)"
             fill="#fff"
             id="path1102" />
          <path
             d="M42.293,126.793Z"
             transform="translate(-40.088 -126.793)"
             fill="#fff"
             id="path1104" />
          <path
             d="M42.307,126.793Z"
             transform="translate(-40.069 -126.793)"
             fill="#fff"
             id="path1106" />
          <path
             d="M42.321,126.793Z"
             transform="translate(-40.051 -126.793)"
             fill="#fff"
             id="path1108" />
          <path
             d="M42.334,126.793Z"
             transform="translate(-40.034 -126.793)"
             fill="#fff"
             id="path1110" />
          <path
             d="M42.348,126.793Z"
             transform="translate(-40.015 -126.793)"
             fill="#fff"
             id="path1112" />
          <path
             d="M42.361,126.793Z"
             transform="translate(-39.998 -126.793)"
             fill="#fff"
             id="path1114" />
          <path
             d="M42.375,126.793Z"
             transform="translate(-39.979 -126.793)"
             fill="#fff"
             id="path1116" />
          <path
             d="M42.388,126.793Z"
             transform="translate(-39.962 -126.793)"
             fill="#fff"
             id="path1118" />
          <path
             d="M42.4,126.793Z"
             transform="translate(-39.943 -126.793)"
             fill="#fff"
             id="path1120" />
          <path
             d="M42.415,126.793Z"
             transform="translate(-39.926 -126.793)"
             fill="#fff"
             id="path1122" />
          <path
             d="M42.429,126.793Z"
             transform="translate(-39.908 -126.793)"
             fill="#fff"
             id="path1124" />
          <path
             d="M42.443,126.793Z"
             transform="translate(-39.889 -126.793)"
             fill="#fff"
             id="path1126" />
          <path
             d="M42.456,126.793Z"
             transform="translate(-39.872 -126.793)"
             fill="#fff"
             id="path1128" />
          <path
             d="M42.47,126.793Z"
             transform="translate(-39.853 -126.793)"
             fill="#fff"
             id="path1130" />
          <path
             d="M42.483,126.793Z"
             transform="translate(-39.836 -126.793)"
             fill="#fff"
             id="path1132" />
          <path
             d="M42.5,126.793Z"
             transform="translate(-39.817 -126.793)"
             fill="#fff"
             id="path1134" />
          <path
             d="M42.51,126.793Z"
             transform="translate(-39.8 -126.793)"
             fill="#fff"
             id="path1136" />
          <path
             d="M42.524,126.793Z"
             transform="translate(-39.782 -126.793)"
             fill="#fff"
             id="path1138" />
          <path
             d="M42.537,126.793Z"
             transform="translate(-39.764 -126.793)"
             fill="#fff"
             id="path1140" />
          <path
             d="M42.551,126.793Z"
             transform="translate(-39.746 -126.793)"
             fill="#fff"
             id="path1142" />
          <path
             d="M42.565,126.793Z"
             transform="translate(-39.727 -126.793)"
             fill="#fff"
             id="path1144" />
          <path
             d="M42.578,126.793Z"
             transform="translate(-39.71 -126.793)"
             fill="#fff"
             id="path1146" />
          <path
             d="M42.592,126.793Z"
             transform="translate(-39.691 -126.793)"
             fill="#fff"
             id="path1148" />
          <path
             d="M42.6,126.793Z"
             transform="translate(-39.674 -126.793)"
             fill="#fff"
             id="path1150" />
          <path
             d="M42.619,126.793Z"
             transform="translate(-39.656 -126.793)"
             fill="#fff"
             id="path1152" />
          <path
             d="M42.632,126.793Z"
             transform="translate(-39.638 -126.793)"
             fill="#fff"
             id="path1154" />
          <path
             d="M42.646,126.793Z"
             transform="translate(-39.62 -126.793)"
             fill="#fff"
             id="path1156" />
          <path
             d="M42.659,126.793Z"
             transform="translate(-39.603 -126.793)"
             fill="#fff"
             id="path1158" />
          <path
             d="M42.673,126.793Z"
             transform="translate(-39.584 -126.793)"
             fill="#fff"
             id="path1160" />
          <path
             d="M42.686,126.793Z"
             transform="translate(-39.567 -126.793)"
             fill="#fff"
             id="path1162" />
          <path
             d="M42.7,126.793Z"
             transform="translate(-39.548 -126.793)"
             fill="#fff"
             id="path1164" />
          <path
             d="M42.714,126.793Z"
             transform="translate(-39.53 -126.793)"
             fill="#fff"
             id="path1166" />
          <path
             d="M42.727,126.793Z"
             transform="translate(-39.512 -126.793)"
             fill="#fff"
             id="path1168" />
          <path
             d="M42.741,126.793Z"
             transform="translate(-39.494 -126.793)"
             fill="#fff"
             id="path1170" />
          <path
             d="M42.754,126.793Z"
             transform="translate(-39.477 -126.793)"
             fill="#fff"
             id="path1172" />
          <path
             d="M42.768,126.793Z"
             transform="translate(-39.458 -126.793)"
             fill="#fff"
             id="path1174" />
          <path
             d="M42.781,126.793Z"
             transform="translate(-39.441 -126.793)"
             fill="#fff"
             id="path1176" />
          <path
             d="M42.795,126.793Z"
             transform="translate(-39.422 -126.793)"
             fill="#fff"
             id="path1178" />
          <path
             d="M42.808,126.793Z"
             transform="translate(-39.405 -126.793)"
             fill="#fff"
             id="path1180" />
          <path
             d="M42.822,126.793Z"
             transform="translate(-39.386 -126.793)"
             fill="#fff"
             id="path1182" />
          <path
             d="M42.836,126.793Z"
             transform="translate(-39.368 -126.793)"
             fill="#fff"
             id="path1184" />
          <path
             d="M42.849,126.793Z"
             transform="translate(-39.351 -126.793)"
             fill="#fff"
             id="path1186" />
          <path
             d="M42.863,126.793Z"
             transform="translate(-39.332 -126.793)"
             fill="#fff"
             id="path1188" />
          <path
             d="M42.876,126.793Z"
             transform="translate(-39.315 -126.793)"
             fill="#fff"
             id="path1190" />
          <path
             d="M42.89,126.793Z"
             transform="translate(-39.296 -126.793)"
             fill="#fff"
             id="path1192" />
          <path
             d="M42.9,126.793Z"
             transform="translate(-39.279 -126.793)"
             fill="#fff"
             id="path1194" />
          <path
             d="M42.917,126.793Z"
             transform="translate(-39.26 -126.793)"
             fill="#fff"
             id="path1196" />
          <path
             d="M42.93,126.793Z"
             transform="translate(-39.243 -126.793)"
             fill="#fff"
             id="path1198" />
          <path
             d="M42.944,126.793Z"
             transform="translate(-39.225 -126.793)"
             fill="#fff"
             id="path1200" />
          <path
             d="M42.958,126.793Z"
             transform="translate(-39.206 -126.793)"
             fill="#fff"
             id="path1202" />
          <path
             d="M42.971,126.793Z"
             transform="translate(-39.189 -126.793)"
             fill="#fff"
             id="path1204" />
          <path
             d="M42.985,126.793Z"
             transform="translate(-39.17 -126.793)"
             fill="#fff"
             id="path1206" />
          <path
             d="M43,126.793Z"
             transform="translate(-39.153 -126.793)"
             fill="#fff"
             id="path1208" />
          <path
             d="M43.012,126.793Z"
             transform="translate(-39.134 -126.793)"
             fill="#fff"
             id="path1210" />
          <path
             d="M43.025,126.793Z"
             transform="translate(-39.117 -126.793)"
             fill="#fff"
             id="path1212" />
          <path
             d="M43.039,126.793Z"
             transform="translate(-39.099 -126.793)"
             fill="#fff"
             id="path1214" />
          <path
             d="M43.052,126.793Z"
             transform="translate(-39.081 -126.793)"
             fill="#fff"
             id="path1216" />
          <path
             d="M43.066,126.793Z"
             transform="translate(-39.063 -126.793)"
             fill="#fff"
             id="path1218" />
          <path
             d="M43.079,126.793Z"
             transform="translate(-39.046 -126.793)"
             fill="#fff"
             id="path1220" />
          <path
             d="M43.093,126.793Z"
             transform="translate(-39.027 -126.793)"
             fill="#fff"
             id="path1222" />
          <path
             d="M43.107,126.793Z"
             transform="translate(-39.008 -126.793)"
             fill="#fff"
             id="path1224" />
          <path
             d="M43.12,126.793Z"
             transform="translate(-38.991 -126.793)"
             fill="#fff"
             id="path1226" />
          <path
             d="M43.134,126.793Z"
             transform="translate(-38.973 -126.793)"
             fill="#fff"
             id="path1228" />
          <path
             d="M43.147,126.793Z"
             transform="translate(-38.955 -126.793)"
             fill="#fff"
             id="path1230" />
          <path
             d="M43.161,126.793Z"
             transform="translate(-38.937 -126.793)"
             fill="#fff"
             id="path1232" />
          <path
             d="M43.174,126.793Z"
             transform="translate(-38.92 -126.793)"
             fill="#fff"
             id="path1234" />
          <path
             d="M43.188,126.793Z"
             transform="translate(-38.901 -126.793)"
             fill="#fff"
             id="path1236" />
          <path
             d="M43.2,126.793Z"
             transform="translate(-38.884 -126.793)"
             fill="#fff"
             id="path1238" />
          <path
             d="M43.215,126.793Z"
             transform="translate(-38.865 -126.793)"
             fill="#fff"
             id="path1240" />
          <path
             d="M43.229,126.793Z"
             transform="translate(-38.847 -126.793)"
             fill="#fff"
             id="path1242" />
          <path
             d="M43.242,126.793Z"
             transform="translate(-38.829 -126.793)"
             fill="#fff"
             id="path1244" />
          <path
             d="M43.256,126.793Z"
             transform="translate(-38.811 -126.793)"
             fill="#fff"
             id="path1246" />
          <path
             d="M43.269,126.793Z"
             transform="translate(-38.794 -126.793)"
             fill="#fff"
             id="path1248" />
          <path
             d="M43.283,126.793Z"
             transform="translate(-38.775 -126.793)"
             fill="#fff"
             id="path1250" />
          <path
             d="M43.3,126.793Z"
             transform="translate(-38.758 -126.793)"
             fill="#fff"
             id="path1252" />
          <path
             d="M43.31,126.793Z"
             transform="translate(-38.739 -126.793)"
             fill="#fff"
             id="path1254" />
          <path
             d="M43.323,126.793Z"
             transform="translate(-38.722 -126.793)"
             fill="#fff"
             id="path1256" />
          <path
             d="M43.337,126.793Z"
             transform="translate(-38.703 -126.793)"
             fill="#fff"
             id="path1258" />
          <path
             d="M43.35,126.793Z"
             transform="translate(-38.686 -126.793)"
             fill="#fff"
             id="path1260" />
          <path
             d="M43.364,126.793Z"
             transform="translate(-38.668 -126.793)"
             fill="#fff"
             id="path1262" />
          <path
             d="M43.378,126.793Z"
             transform="translate(-38.649 -126.793)"
             fill="#fff"
             id="path1264" />
          <path
             d="M43.391,126.793Z"
             transform="translate(-38.632 -126.793)"
             fill="#fff"
             id="path1266" />
          <path
             d="M43.4,126.793Z"
             transform="translate(-38.613 -126.793)"
             fill="#fff"
             id="path1268" />
          <path
             d="M43.418,126.793Z"
             transform="translate(-38.596 -126.793)"
             fill="#fff"
             id="path1270" />
          <path
             d="M43.432,126.793Z"
             transform="translate(-38.578 -126.793)"
             fill="#fff"
             id="path1272" />
          <path
             d="M43.445,126.793Z"
             transform="translate(-38.56 -126.793)"
             fill="#fff"
             id="path1274" />
          <path
             d="M43.459,126.793Z"
             transform="translate(-38.542 -126.793)"
             fill="#fff"
             id="path1276" />
          <path
             d="M43.472,126.793Z"
             transform="translate(-38.524 -126.793)"
             fill="#fff"
             id="path1278" />
          <path
             d="M43.486,126.793Z"
             transform="translate(-38.506 -126.793)"
             fill="#fff"
             id="path1280" />
          <path
             d="M43.5,126.793Z"
             transform="translate(-38.487 -126.793)"
             fill="#fff"
             id="path1282" />
          <path
             d="M43.513,126.793Z"
             transform="translate(-38.47 -126.793)"
             fill="#fff"
             id="path1284" />
          <path
             d="M43.527,126.793Z"
             transform="translate(-38.452 -126.793)"
             fill="#fff"
             id="path1286" />
          <path
             d="M43.54,126.793Z"
             transform="translate(-38.434 -126.793)"
             fill="#fff"
             id="path1288" />
          <path
             d="M43.554,126.793Z"
             transform="translate(-38.416 -126.793)"
             fill="#fff"
             id="path1290" />
          <path
             d="M43.567,126.793Z"
             transform="translate(-38.398 -126.793)"
             fill="#fff"
             id="path1292" />
          <path
             d="M43.581,126.793Z"
             transform="translate(-38.38 -126.793)"
             fill="#fff"
             id="path1294" />
          <path
             d="M43.594,126.793Z"
             transform="translate(-38.363 -126.793)"
             fill="#fff"
             id="path1296" />
          <path
             d="M43.608,126.793Z"
             transform="translate(-38.344 -126.793)"
             fill="#fff"
             id="path1298" />
          <path
             d="M43.622,126.793Z"
             transform="translate(-38.326 -126.793)"
             fill="#fff"
             id="path1300" />
          <path
             d="M43.635,126.793Z"
             transform="translate(-38.308 -126.793)"
             fill="#fff"
             id="path1302" />
          <path
             d="M43.649,126.793Z"
             transform="translate(-38.29 -126.793)"
             fill="#fff"
             id="path1304" />
          <path
             d="M43.662,126.793Z"
             transform="translate(-38.273 -126.793)"
             fill="#fff"
             id="path1306" />
          <path
             d="M43.676,126.793Z"
             transform="translate(-38.254 -126.793)"
             fill="#fff"
             id="path1308" />
          <path
             d="M43.689,126.793Z"
             transform="translate(-38.237 -126.793)"
             fill="#fff"
             id="path1310" />
          <path
             d="M43.7,126.793Z"
             transform="translate(-38.218 -126.793)"
             fill="#fff"
             id="path1312" />
          <path
             d="M43.716,126.793Z"
             transform="translate(-38.201 -126.793)"
             fill="#fff"
             id="path1314" />
          <path
             d="M43.73,126.793Z"
             transform="translate(-38.182 -126.793)"
             fill="#fff"
             id="path1316" />
          <path
             d="M43.743,126.793Z"
             transform="translate(-38.165 -126.793)"
             fill="#fff"
             id="path1318" />
          <path
             d="M43.757,126.793Z"
             transform="translate(-38.147 -126.793)"
             fill="#fff"
             id="path1320" />
          <path
             d="M43.771,126.793Z"
             transform="translate(-38.128 -126.793)"
             fill="#fff"
             id="path1322" />
          <path
             d="M43.784,126.793Z"
             transform="translate(-38.111 -126.793)"
             fill="#fff"
             id="path1324" />
          <path
             d="M43.8,126.793Z"
             transform="translate(-38.092 -126.793)"
             fill="#fff"
             id="path1326" />
          <path
             d="M43.811,126.793Z"
             transform="translate(-38.075 -126.793)"
             fill="#fff"
             id="path1328" />
          <path
             d="M43.825,126.793Z"
             transform="translate(-38.056 -126.793)"
             fill="#fff"
             id="path1330" />
          <path
             d="M43.838,126.793Z"
             transform="translate(-38.039 -126.793)"
             fill="#fff"
             id="path1332" />
          <path
             d="M43.852,126.793Z"
             transform="translate(-38.021 -126.793)"
             fill="#fff"
             id="path1334" />
          <path
             d="M43.865,126.793Z"
             transform="translate(-38.003 -126.793)"
             fill="#fff"
             id="path1336" />
          <path
             d="M43.879,126.793Z"
             transform="translate(-37.985 -126.793)"
             fill="#fff"
             id="path1338" />
          <path
             d="M43.892,126.793Z"
             transform="translate(-37.968 -126.793)"
             fill="#fff"
             id="path1340" />
          <path
             d="M43.906,126.793Z"
             transform="translate(-37.949 -126.793)"
             fill="#fff"
             id="path1342" />
          <path
             d="M43.92,126.793Z"
             transform="translate(-37.93 -126.793)"
             fill="#fff"
             id="path1344" />
          <path
             d="M43.933,126.793Z"
             transform="translate(-37.913 -126.793)"
             fill="#fff"
             id="path1346" />
          <path
             d="M43.947,126.793Z"
             transform="translate(-37.895 -126.793)"
             fill="#fff"
             id="path1348" />
          <path
             d="M43.96,126.793Z"
             transform="translate(-37.877 -126.793)"
             fill="#fff"
             id="path1350" />
          <path
             d="M43.974,126.793Z"
             transform="translate(-37.859 -126.793)"
             fill="#fff"
             id="path1352" />
          <path
             d="M43.987,126.793Z"
             transform="translate(-37.842 -126.793)"
             fill="#fff"
             id="path1354" />
          <path
             d="M44,126.793Z"
             transform="translate(-37.823 -126.793)"
             fill="#fff"
             id="path1356" />
          <path
             d="M44.015,126.793Z"
             transform="translate(-37.804 -126.793)"
             fill="#fff"
             id="path1358" />
          <path
             d="M44.028,126.793Z"
             transform="translate(-37.787 -126.793)"
             fill="#fff"
             id="path1360" />
          <path
             d="M44.042,126.793Z"
             transform="translate(-37.769 -126.793)"
             fill="#fff"
             id="path1362" />
          <path
             d="M44.055,126.793Z"
             transform="translate(-37.751 -126.793)"
             fill="#fff"
             id="path1364" />
          <path
             d="M44.069,126.793Z"
             transform="translate(-37.733 -126.793)"
             fill="#fff"
             id="path1366" />
          <path
             d="M44.082,126.793Z"
             transform="translate(-37.716 -126.793)"
             fill="#fff"
             id="path1368" />
          <path
             d="M44.1,126.793Z"
             transform="translate(-37.697 -126.793)"
             fill="#fff"
             id="path1370" />
          <path
             d="M44.109,126.793Z"
             transform="translate(-37.68 -126.793)"
             fill="#fff"
             id="path1372" />
          <path
             d="M44.123,126.793Z"
             transform="translate(-37.661 -126.793)"
             fill="#fff"
             id="path1374" />
          <path
             d="M44.136,126.793Z"
             transform="translate(-37.644 -126.793)"
             fill="#fff"
             id="path1376" />
          <path
             d="M44.15,126.793Z"
             transform="translate(-37.625 -126.793)"
             fill="#fff"
             id="path1378" />
          <path
             d="M44.164,126.793Z"
             transform="translate(-37.607 -126.793)"
             fill="#fff"
             id="path1380" />
          <path
             d="M44.177,126.793Z"
             transform="translate(-37.59 -126.793)"
             fill="#fff"
             id="path1382" />
          <path
             d="M44.191,126.793Z"
             transform="translate(-37.571 -126.793)"
             fill="#fff"
             id="path1384" />
          <path
             d="M44.2,126.793Z"
             transform="translate(-37.554 -126.793)"
             fill="#fff"
             id="path1386" />
          <path
             d="M44.218,126.793Z"
             transform="translate(-37.535 -126.793)"
             fill="#fff"
             id="path1388" />
          <path
             d="M44.231,126.793Z"
             transform="translate(-37.518 -126.793)"
             fill="#fff"
             id="path1390" />
          <path
             d="M44.245,126.793Z"
             transform="translate(-37.499 -126.793)"
             fill="#fff"
             id="path1392" />
          <path
             d="M44.258,126.793Z"
             transform="translate(-37.482 -126.793)"
             fill="#fff"
             id="path1394" />
          <path
             d="M44.272,126.793Z"
             transform="translate(-37.464 -126.793)"
             fill="#fff"
             id="path1396" />
          <path
             d="M44.285,126.793Z"
             transform="translate(-37.446 -126.793)"
             fill="#fff"
             id="path1398" />
          <path
             d="M44.3,126.793Z"
             transform="translate(-37.428 -126.793)"
             fill="#fff"
             id="path1400" />
          <path
             d="M44.313,126.793Z"
             transform="translate(-37.409 -126.793)"
             fill="#fff"
             id="path1402" />
          <path
             d="M44.326,126.793Z"
             transform="translate(-37.392 -126.793)"
             fill="#fff"
             id="path1404" />
          <path
             d="M44.34,126.793Z"
             transform="translate(-37.373 -126.793)"
             fill="#fff"
             id="path1406" />
          <path
             d="M44.353,126.793Z"
             transform="translate(-37.356 -126.793)"
             fill="#fff"
             id="path1408" />
          <path
             d="M44.367,126.793Z"
             transform="translate(-37.338 -126.793)"
             fill="#fff"
             id="path1410" />
          <path
             d="M44.38,126.793Z"
             transform="translate(-37.32 -126.793)"
             fill="#fff"
             id="path1412" />
          <path
             d="M44.38,126.793Z"
             transform="translate(-37.32 -126.793)"
             fill="#fff"
             id="path1414" />
        </g>
      </g>
      <rect
         width="7.061"
         height="2.326"
         fill="#fff"
         id="rect1420" />
    </g>
    <g
       transform="translate(53.005 161.367)"
       id="g1426">
      <path
         d="M53.572,149.9H44.733V137.8h8.839Zm-6.513-2.326h4.187v-7.443H47.059Z"
         transform="translate(-44.733 -137.8)"
         fill="#fff"
         id="path1424" />
    </g>
    <g
       transform="translate(53.975 90.994)"
       fill="none"
       stroke="#fff"
       stroke-width="2"
       id="g1432">
      <circle
         cx="3.398"
         cy="3.398"
         r="3.398"
         stroke="none"
         id="circle1428" />
      <circle
         cx="3.398"
         cy="3.398"
         r="2.398"
         fill="none"
         id="circle1430" />
    </g>
    <g
       transform="translate(49.822 96.657)"
       fill="#fff"
       stroke="#fff"
       stroke-width="1"
       id="g1438">
      <rect
         width="15.103"
         height="3.398"
         rx="1.699"
         stroke="none"
         id="rect1434" />
      <rect
         x="0.5"
         y="0.5"
         width="14.103"
         height="2.398"
         rx="1.199"
         fill="none"
         id="rect1436" />
    </g>
  </g>
</svg>

            </span>
            <style>
            <?php echo '#text-'.$item->ID ?>{
                color:<?php echo $color1 ?$color1 :'#fff' ?>;
                <?php if($is_gradient): ?>
                background: -webkit-linear-gradient(<?php echo $color2.', '.$color1 ?>);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                <?php endif ?>
            }
            </style>
            <span id="text-<?php echo $item->ID ?>" class="text">
                <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-toka-label.svg" alt="">
                <?php echo $item->post_title ?>
            </span>
        </a>
        <?php
        }
   

        echo $args['after_widget'];
    }
            
    // Widget Backend 
    public function form($instance){
        $items = get_posts('post_type=ivtherapy&posts_per_page=-1');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('item') ?>"><?php _e('Choose:') ?></label>
            <select name="<?php echo $this->get_field_name('item') ?>" id="<?php echo $this->get_field_id('item') ?>" class="widefat">
                <option value="">-- SELECT --</option>

                <?php foreach($items as $item): ?>
                <option value="<?php echo $item->ID ?>" <?php echo $instance['item'] == $item->ID ?'selected' :'' ?>>
                    <?php echo $item->post_title ?>
                </option>
                <?php endforeach ?>
            </select>
        </p>
        <?php 
    }
     
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance){
        $instance = [];

        $instance['item']  = (!empty($new_instance['item'])) ?strip_tags($new_instance['item']) :'';

        return $instance;
    }
}