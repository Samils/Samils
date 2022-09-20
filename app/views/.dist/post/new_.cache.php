<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php Capsule::Def ('NewPost', function () {
?>
<h2>Novo Post</h1>
   <br />
   <form method="post" action="/posts">
      <label>title</label>
      <br />
      <input type="text" name="post[title]" />
      <br />
      <label>Body</label>
      <br />
      <textarea name="post[body]"></textarea>

      <br />
      <br />
      <input value="Salvar" type="submit" name="create_post" />
   </form>
<?php }); ?>
<?php Capsule::Export ('NewPost'); ?>

<?php $module->exports = Capsule::Element ('NewPost'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>