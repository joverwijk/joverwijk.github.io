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
         
        default:
            $post_name_formatted = 'missingno';
            break;
    }
?>