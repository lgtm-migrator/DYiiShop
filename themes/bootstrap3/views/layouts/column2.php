<?php $this->beginContent('//layouts/main'); ?>	
<div class="row">
    <div class="col-md-12"><div id="notification"></div></div>
</div>
<div class="row">
    <?php echo $this->renderPartial('/common/leftMenu'); ?>
    <div class="col-md-9">
        <?php if (isset($this->breadcrumbs) && count($this->breadcrumbs)): ?>
            <ol class="breadcrumb">
                <li><a href="<?php echo $this->createUrl('/site/index'); ?>"><?php echo Yii::t('common', 'Home'); ?></a> </li>
                <?php foreach ($this->breadcrumbs as $breadcrumb): ?>
                    <?php if ($breadcrumb == end($this->breadcrumbs)): ?>
                        <li class="active"><?php echo $breadcrumb; ?></li>
                    <?php else: ?>
                        <li><a href="#"><?php echo $breadcrumb; ?></a> </li>
                    <?php endif; ?>
                <?php endforeach; ?><!-- breadcrumbs -->
            </ol>
        <?php endif ?>
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>