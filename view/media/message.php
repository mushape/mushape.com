<ul class="media-list">
    <li class="media well">
        <a class="pull-left" href="<?php print $link ?>">
            <img class="media-object" height="84" width="84" src="/img/eu.jpg">
        </a>
        <div class="media-body">
            <div class="media">
                <a href="/user/<?php e($user['uuid']); ?>">
                    <?php e($user['name']); ?>
                </a> disse:
            </div>
            <h4><?php e($message['message']); ?></h4>
            <span class="date" x-date="<?php e($message['date']); ?>">

            </span>
        </div>
    </li>
</ul>
