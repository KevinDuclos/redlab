<?php

?>
<!-- Sidebar -->
<aside class="archive-single">
    <div class="card">
        <div class="card-header">
            <h4 class="card-header-title">Archives</h4>

        </div>
        <div class="card-content">
        <ol class="list-unstyled mb-0">
        <li>
            <?php wp_get_archives(); ?>
        </li>
        <li>
            <?php wp_list_categories(); ?>
        </li>
        </ol>
        </div>

    </div>
</aside>
