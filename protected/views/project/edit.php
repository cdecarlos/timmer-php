<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 col-sm-8">
      <h1>Edit project "<?php echo $model->name; ?>"</h1>

      <?php echo $this->renderPartial('_form', [
        'model' => $model
      ]); ?>
    </div>
  </div>
</div>
