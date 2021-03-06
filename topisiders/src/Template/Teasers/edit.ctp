<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teaser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teaser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teasers'), ['controller' => 'Teasers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teaser'), ['controller' => 'Teasers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blocks Teasers Excludeds'), ['controller' => 'BlocksTeasersExcludeds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blocks Teasers Excluded'), ['controller' => 'BlocksTeasersExcludeds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teasers Views '), ['controller' => 'TeasersViews ', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teasers Views '), ['controller' => 'TeasersViews ', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teasers form large-9 medium-8 columns content">
    <?= $this->Form->create($teaser,['type' => 'file', 'id' => 'teaser-config']) ?>
    <fieldset>
        <legend><?= __('Редактировать тизер') ?></legend>
        <?php
            echo $this->Form->control('title', ['label' => ['text' => 'Заголовок']]  );
            echo $this->Form->control('text', ['label' => ['text' => 'Текст']]);
            echo $this->Form->control('price', ['label' => ['text' => 'Цена за клик']]);
            echo $this->Form->control('link', ['label' => ['text' => 'Ссылка']]);
            echo $this->Form->control('img_new', ['label' => 'Картинка', 'type' => 'file']);

            if (!is_null($teaser->img)) {
                echo $this->Form->hidden($teaser->img);
                echo $this->Html->image($teaser->img, [
                    'width' => '100',
                    'height' => '100',
                    'style' => 'width: 25%;'
                ]);
            }

            echo $this->Form->control('categories_id', ['label' => ['text' => 'Категории']]);
            echo $this->Form->control('post_id', ['label' => false, 'type' => 'hidden']);
            echo $this->Form->control('teaser_id', ['label' => ['text' => 'Тизер']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
