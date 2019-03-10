<?php

if (!function_exists('set_lang')) {
    function set_lang()
    {
        if (session('lang') == true) {
            return session('lang');
        } else {
            return 'en';
        }
    }
}


if (!function_exists('moduleState')) {
    function moduleState($module_name)
    {
        if (Module::has($module_name))
            return Module::get($module_name)['active'];
    }
}

if (!function_exists('create_box')) {
    function create_box($id)
    {
        if (moduleState('card') == 1)
            return \Modules\Card\Helper::create_box($id);
        else
            return "Card module is not installed";
    }
}

if (!function_exists('create_box_first')) {
    function create_box_first($id)
    {
        if (moduleState('card') == 1)
            return \Modules\Card\Helper::create_box_first($id);
        else
            return "Card module is not installed";
    }
}

if (!function_exists('create_box_second')) {
    function create_box_second($id)
    {
        if (moduleState('card') == 1)
            return \Modules\Card\Helper::create_box_second($id);
        else
            return "Card module is not installed";
    }
}

if (!function_exists('create_box_news')) {
    function create_box_news($id)
    {
        if (moduleState('card') == 1)
            return \Modules\Card\Helper::create_box_news($id);
        else
            return "Card module is not installed";
    }
}

if (!function_exists('create_box_luxtai_fa')) {
    function create_box_luxtai_fa($id)
    {
        if (moduleState('card') == 1)
            return \Modules\Card\Helper::create_box_luxtai_fa($id);
        else
            return "Card module is not installed";
    }
}


if (!function_exists('create_box_komtai_fa')) {
    function create_box_komtai_fa($id)
    {
        if (moduleState('card') == 1)
            return \Modules\Card\Helper::create_box_komtai_fa($id);
        else
            return "Card module is not installed";
    }
}

if (!function_exists('create_box_expanse_fa')) {
    function create_box_expanse_fa($id)
    {
        if (moduleState('card') == 1)
            return \Modules\Card\Helper::create_box_expanse_fa($id);
        else
            return "Card module is not installed";
    }
}


if (!function_exists('ckeditor')) {
    function ckeditor($module_name, $folder_name, $element_id = 'body')
    {
        return "<script src='/assets/ckeditor/ckeditor.js' type='text/javascript'></script>
                <script src='/assets/ckfinder/ckfinder.js' type='text/javascript'></script>
        <script>
        CKEDITOR.replace('$element_id',{
//            filebrowserUploadMethod : 'form',
//            filebrowserUploadUrl: '/backend/upload-image/{$module_name}/{$folder_name}/?',
//            filebrowserImageUploadUrl: '/backend/upload-image/{$module_name}/{$folder_name}/?',
        });
        
        CKFinder.setupCKEditor(null, '/assets/ckfinder/');
        </script>";
    }
}

if (!function_exists('active_nav')) {
    function active_nav($block_name = "/")
    {
        return ($_SERVER['REQUEST_URI'] == "$block_name") ? 'active' : '';
    }
}
