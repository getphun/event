<?php
/**
 * fire service
 * @package event
 * @version 0.0.1
 * @upgrade true
 */

namespace Event\Service;

class Event {
    
    private $events = [];
    
    public function __construct(){
        $this->events = \Phun::$config['events'] ?? [];
    }
    
    public function fire(){
        $args = func_get_args();
        $event = array_shift($args);
        $events = $this->events[$event] ?? null;
        
        if(!$events)
            return;
        
        foreach($events as $ev){
            $clss   = explode('::', $ev);
            call_user_func_array([$clss[0], $clss[1]], $args);
        }
    }
}