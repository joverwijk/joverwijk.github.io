<?php
    /**
     * This file serves as list of posts where URL parameter 'post' is tested
     * against.
     */

    switch ($post_name) {
        case '09-01_september_surprises':
            $post_name_formatted = 'September in Review (so far)';
            break;

        case '09-02_why':
            $post_name_formatted = 'Why this blog?';
            break;

        case '09-03_updates_frustrations':
            $post_name_formatted = 'Updates and FRUSTRATIONS';
            break;

        case '09-04_plans_thoughts':
            $post_name_formatted = 'Plans and Thoughts';
            break;
        
        case '10-01_major_steps':
            $post_name_formatted = 'Major Steps Forward';
            break;
        
        case '10-02_its_here':
            $post_name_formatted = "It's Here!";
            break;
         
        default:
            $post_name_formatted = 'missingno';
            break;
    }
?>