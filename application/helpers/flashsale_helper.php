<?php

function is_logged_in()
{
    $ci = get_instance();
    if ($ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->url->segment(1);
    }
}
