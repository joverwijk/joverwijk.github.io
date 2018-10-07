<?php
    // Categories
    function category_list_item($item) {
        echo '<li><a href="/blog/posts/categories.php?category=' . $item . '">' . ucfirst($item) . '</a></li>';
    }

    $query_categories = "SELECT DISTINCT category FROM posts ORDER BY category ASC";
    $query_categories_result = $connect->query($query_categories);

    echo '<p><a class="post_nav" onclick="category_opener()">Categories&nbsp;<i class="fa fa-caret-right" id="category_arrow"></i></a></p><ul class="horizontal_list" id="category_list" style="display:none;">';
    while ($category_links = $query_categories_result->fetch_assoc()) {
        category_list_item($category_links["category"]);
    }
    echo '</ul>';

    // Year and month
    $array_date = array(
        array( // 0
            "year" => 2018,
            "months" => array(9,10)
        ),
    );

    echo '<p><a class="post_nav" onclick=date_opener()>Date&nbsp;<i class="fa fa-caret-right" id="date_arrow"></i></a></p><ul class="horizontal_list" id="date_list" style="display:none;">';
    for ($i=0; $i < count($array_date); $i++) {
        echo '<li><a href="/blog/posts/date.php?year=' . $array_date[$i]['year'] . '">' . $array_date[$i]['year'] . '</a></br><ul class="horizontal_list">';
        for ($j=0; $j < count($array_date[$i]['months']); $j++) {
            include($root . '/blog/sources/month_switch.php');
            echo '<li><a href="/blog/posts/date.php?year=' . $array_date[$i]['year'] . '&month=' . $array_date[$i]['months'][$j] . '">' . $month . '</a></li>';
        }
        echo '</ul></li>';
    }
    echo '</ul>';
?>