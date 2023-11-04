<?php

function controller_users($act, $d) {
    if ($act == 'edit_window') return Users::user_edit_window($d);
    if ($act == 'edit_update') return Users::user_edit_update($d);
    if ($act == 'user_delete') return Users::user_delete($d);
    return '';
}
