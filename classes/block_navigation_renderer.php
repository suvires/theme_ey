<?php
 
 namespace theme_ey;

 defined('MOODLE_INTERNAL') || die;
 
class block_navigation_renderer extends block_navigation_renderer {
 
    public function navigation_node($items, $attrs=array(), $expansionlimit=null, array $options = array(), $depth=1) {      
      global $USER, $CFG;
        
        // remove the 'Site home' link from the list
        foreach ($items as $item) {
          if ($item->type == navigation_node::TYPE_SETTING && $item->title == get_string('sitehome')) {
            $item->remove();
          }
        }
        return parent::navigation_node($items, $attrs, $expansionlimit, $options, $depth);
      }

}