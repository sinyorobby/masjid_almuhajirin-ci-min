<?php

function is_logged_in()
{
    $lib_codeigniter = get_instance();
    if (!$lib_codeigniter->session->userdata('email')) {
        redirect('admin/auth');
    } else {
        $role_id = $lib_codeigniter->session->userdata('role_id');
        $menu = $lib_codeigniter->uri->segment(1);
        // var_dump($menu);
        // die;


        $querymenu = $lib_codeigniter->db->get_where('menu', ['menu' => $menu])->row_array();
        $menuid = $querymenu['id'];

        $UserAccess = $lib_codeigniter->db->get_where('useraccess_menu', [
            'role_id' => $role_id,
            'menu_id' => $menuid
        ]);

        // var_dump($lib_codeigniter->db->last_query());
        // die;
        // var_dump($queryMenu);
        // die;
        if ($UserAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
