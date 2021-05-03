<?php
/**
 * @var $listPost PostEntity[]
 */
?>
<div class="container">
    <form name="feedback" id="feedback" method="post" action="/feedback/save"onsubmit="return validateForm(event)">
        <label for="email">Tell me what do you think :)</label>
        <input type="text" placeholder="email" name="email" />
        <textarea name="message"></textarea>
        <input type="submit" value="send" />
    </form>

    <div class="posts">
        <?php foreach ($listPost as $post) { ?>
            <div class="post">
                <p><span class="email"><?=$post->email?>:</span> <?=date("F j, Y, g:i a", $post->created_at)?></p>
                <p><?=nl2br($post->message)?></p>
            </div>
        <?php } ?>
    </div>
</div> <!-- /.container -->
