<h1>Liste de nos articles</h1>

<?php
 foreach($params['posts'] as $post): ?>
   <div class="card mb-3">
      <div class="card-body">
        <h2> <?= $post->title ?></h2>
        <?php foreach($post->getTags() as $tag): ?>
          <span><a href="/mvc/tags/<?= $tag->id ?>"><?= $tag->name  ?></a></span>
          <?php endforeach; ?> 
        <p class=""> publié le <?= $post->getCreatedAt();?></p>
        <p>
          <?= $post->getExcerpt();?>
        </p>
        <a href="/mvc/post/<?= $post->id ?>"class="btn btn-primary">Lire l'article</a>
      </div>
   </div>
<?php endforeach ?>
