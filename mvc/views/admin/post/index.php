<h1>Administration des articles !</h1>
<?php 
if(isset($_GET['success'])== true): ?>

<div class="alert alert-success">
  Vous êtes connecté !
</div>
<?php endif; ?>

<a class="btn btn-success mt-3" href="/mvc/admin/posts/create">Créer un nouvelle article</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>
      <th scope="col">publié le</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($params['posts'] as $post): ?>
        <tr>
            <th scope="row"> <?= $post->id; ?></th>
            <td><?= $post->title; ?></td>
            <td><?= $post->getCreatedAt(); ?></td>
            <td>
                <a class="btn btn-warning" href="/mvc/admin/posts/edit/<?= $post->id; ?>">Modifier l'article</a>
                <form style="display:inline"  action="/mvc/admin/posts/delete/<?= $post->id; ?>" method="POST">
                <input type="submit" class="btn btn-danger" value="supprimer"> 
                
                </form>
                
            </td>
        </tr>
     <?php endforeach;?>   
  </tbody>
</table>