<ul class="media-list">
    <li class="media well">
        <a class="pull-left" href="/user/<?php e($user['uuid']);?>">
            <img class="media-object" height="84" width="84" src="/img/eu.jpg">
        </a>
        <div class="media-body">
            <div class="media">
                <a href="/user/<?php e($user['uuid']); ?>">
                    <?php e($user['name']); ?>
                </a>
                <a class="linkToMsg" href="/image/<?php e($image['uuid']); ?>">
                    compartilhou essa imagem
                </a>
                <span class="date" x-date="<?php e($message['created_at']); ?>">
                </span>:
            </div>
            <p class="media-caption">
                <?php e($image['caption']); ?>
            </p>
            <a href="/image/<?php e($image['uuid']); ?>">
                <img class="media-image" src="<?php e($image['src']); ?>" alt="">
            </a>
        </div>
    </li>
</ul>
