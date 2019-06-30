<?php

function navmenusQ($id)
{
    global $db;
    $navmenusQ = $db->from("navmenus")
                    ->where("navmenu_id", $id)
                    ->first();

    if (isset($navmenusQ)) {

        $navmenusJ = json_decode($navmenusQ['navmenu_content'], true);
        return $navmenusJ;
    }
}