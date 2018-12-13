<ul class="media-list">
    <li class="media well">
        <a class="pull-left image" href="/message/<?php e($message['uuid']); ?>">
            <img style="margin:10px;" class="media-object" height="64" width="64" src="/img/link.svg">
        </a>
        <div class="media-body">
            <div class="media">
                <a href="/user/<?php e($user['uuid']); ?>">
                    <?php e($user['name']); ?>
                </a>
                <a class="linkToMsg" href="/message/<?php e($message['uuid']); ?>">
                    compartilhou o link do site
                </a>
                <a target="_blank" href="/site/<?php e($message['site']); ?>">
                    <?php e($message['site']); ?>
                </a>
            </div>
            <h4><a href="<?php e($message['link']); ?>"><?php e($message['title']); ?></a></h4>
            <span class="date" x-date="<?php e($message['date']); ?>"></span>
        </div>
    </li>
</ul>
