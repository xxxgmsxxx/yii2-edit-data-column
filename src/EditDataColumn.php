<?php

namespace xxxgmsxxx\editDataColumn;

use yii\helpers\Html;
use yii\web\View;
use xxxgmsxxx\editDataColumn\assets\EditDataColumnAsset;

class EditDataColumn extends \yii\grid\DataColumn
{
    public $ajaxUrl = '';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        EditDataColumnAsset::register($this->grid->view);

        if (empty($this->ajaxUrl)) {
            $this->ajaxUrl = '/ajax/edit-' . $this->attribute;
        }
    }


    /**
     * {@inheritdoc}
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        if ($this->content === null) {
            return \Yii::$app->view->renderFile(__DIR__ . '/views/edit-data-column.php', [
                'key'   => $key,
                'value' => $model->attributes[$this->attribute],
                'url'   => $this->ajaxUrl,
                'attr'  => $this->attribute,
            ]);
        }

        return parent::renderDataCellContent($model, $key, $index);
    }

}