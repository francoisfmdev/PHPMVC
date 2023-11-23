<h1>  <?= $params['post']->title ?? 'créer un nouvelle article'; ?></h1>

<form class="mt-5" 
action="<?= isset($params['post']) ? "/mvc/admin/posts/edit/{$params['post']->id}" : "/mvc/admin/posts/create" ?>" method="POST">
    <div class="form-group mt-2">
        <label  for="title"> 
            Titre de l'article
        </label>
        <input class="form-control" type="text" id="title" name="title" value="<?= $params['post']->title  ?? '' ?>">
    </div>
    <div class="form-group mt-2">
        <label  for="content">
            Contenu de l'article
        </label> <br>
        <textarea class="form-control" style="height:450px;"  row="50" id="content" name="content">
                <?= $params["post"]->content ?? "" ?>
        </textarea>
    </div>
    <div class="form- mt-2">
    <label for="tags">tag de l'article</label>
    <select multiple class="form-control" name="tags[]" id="tags">
      <?php foreach($params['tags'] as $tag): ?>
          <option value="<?= $tag->id ?>"
            <?php if(isset($params['post'])): ?>
                <?php foreach($params['post']->getTags() as $postTag){
                echo ($tag->id === $postTag->id) ? 'selected': ' ';
                }?>
           <?php endif; ?>
          ><?= $tag->name ?></option>
        <?php endforeach; ?> 
    </select>
    </div>
    <div class="form-group mt-2">
        <input type="submit" class="btn btn-primary" value="<?= isset($params['post']) ?'enregistrer les modifications': 'Enregistrer un nouvelle article' ?> ">
    </div>
</form>


