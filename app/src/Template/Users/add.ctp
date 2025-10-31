<?= $this->Form->create($user); ?>
  <?= $this->Form->input('email'); ?>
  <?= $this->Form->input('password'); ?>
    <?= $this->Form->control('role', [
      'options' => ['author' => 'Author', 'admin' => 'Admin']
    ]) ?>
  <?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>
