<?php

class MBN_Walker_Header_Menu extends Walker_Nav_Menu{
    function start_lvl(&$output, $depth = 0, $args = []){
        $output .= "<div class='sub-menu-wrap'><ul class='sub-menu'>";
    }

    function end_lvl(&$output, $depth = 0, $args = []){
        $output .= "</ul></div>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0){
        if($item->object == 'ivtherapy' && $depth == 1){
            $prepend = '<span class="ivtherapy-nav-item">';
            $prepend .= '<img src="'.get_field('icon', $item->object_id).'" alt="" class="icon">';
            $prepend .= '<span class="text" style="color:'.get_field('color', $item->object_id).'">
                    <img src="'.MBN_ASSETS_URI.'/img/icn-toka-label.svg" alt="">';

            $append = '</span></span>';

            $item->title = $prepend.$item->title.$append;
        }

        parent::start_el($output, $item, $depth, $args, $id);
    }
 
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output){
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}