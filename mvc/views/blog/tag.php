<h1><?= $params['tag']->name; ?></h1>

<?php
 foreach($params['tag']->getPost() as $post): ?>
   <div class="card mb-3">
      <div class="card-body">
        <h2> <?= $post->title ?></h2>
        <div>
        <a href="/mvc/post/<?= $post->id ?>"class="btn btn-primary">Lire l'article</a>
        </div>
      
      </div>
   </div>
<?php endforeach ?>