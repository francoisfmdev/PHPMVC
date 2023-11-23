<h1> <?= $params['post']->title; ?></h1>
<?php 
foreach($params['post']->getTags() as $tag): ?>
<span><a href="/mvc/tags/<?= $tag->id ?>"><?= $tag->name  ?></a></span>
<?php endforeach; ?>
<p>
<?= $params['post']->content; ?> 
</p>
<a class="btn btn-primary" href="/mvc/posts">Retour en arriere </a>