<?php
$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('errorLog', 'Error Log');
$this->breadcrumbs = array(
    Yii::t('errorLog', 'Error Log'),
);
?>

<div class="row-fluid">
    <div class="col-md-9"><h1><i class="icon-sitemap"></i>&nbsp;<?php echo Yii::t('errorLog', 'Error Log'); ?></h1></div>
    <div class="col-md-2">
        <div class="btn-group">
            <a id="btnDeleteAll" class="btn btn-danger"><?php echo Yii::t('errorLog', 'Clear Log'); ?></a>
        </div>
    </div>
</div>

<br />

<textarea rows="5" class="col-md-12"><?php echo $logs; ?></textarea>