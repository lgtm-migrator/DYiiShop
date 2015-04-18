<?php
$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('filters', 'Filters');
$this->breadcrumbs = array(
    Yii::t('filters', 'Filters'),
);
?>

<div class="row-fluid">
    <div class="col-md-9"><h1><i class="icon-sitemap"></i>&nbsp;<?php echo Yii::t('filters', 'Filters'); ?></h1></div>
    <div class="col-md-2">
        <div class="btn-group">
            <a href="<?php echo $this->createUrl('create'); ?>" class="btn btn-primary"><?php echo Yii::t('common', 'Insert'); ?></a>
            <a id="btnDeleteAll" class="btn btn-danger"><?php echo Yii::t('common', 'Delete'); ?></a>
        </div>
    </div>
</div>

<br />

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="width: 1px;"><?php echo CHtml::checkBox('checkall', false); ?></th>
            <th><?php echo Yii::t('reviews', 'Filter Group'); ?></th>
            <th style="width: 90px;"><?php echo Yii::t('reviews', 'Sort Order'); ?></th>
            <th style="width: 80px;"><?php echo Yii::t('reviews', 'Action'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($filterGroups as $group): ?>
        <tr>
            <td><?php echo CHtml::checkBox('selected[]', false, array('value'=>$group->filter_group_id)); ?></td>
            <td><?php echo $group->description->name; ?></td>
            <td><?php echo $group->sort_order; ?></td>
            <td><a class="btn btn-success btn-mini" href="<?php echo $this->createUrl('update', array('id'=>$group->filter_group_id)); ?>"><?php echo Yii::t('common', 'Edit'); ?></button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#btnDeleteAll').on('click', function(){   
            if(confirm('<?php echo Yii::t('common', 'Delete/Uninstall cannot be undone! Are you sure you want to do this?'); ?>')){
                var ids = $('input[name="selected[]"]').map(function(){
                    return this.checked ? this.value : null;
                }).get();

                document.location = '<?php echo $this->createUrl('delete'); ?>/?ids=' + ids;
            }
        });
    });
</script>