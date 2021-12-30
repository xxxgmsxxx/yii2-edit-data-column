<?php

/* @var $key string
 * @var $value string
 * @var $url string
 */

?>

<span class="js-data-column-txt-span" id="js-data-column-txt-span-<?= $key ?>" data-id="<?= $key ?>"><?= empty($value) ? '(null)' : $value ?></span>
<div class="input-group js-data-column-edit" id="js-data-column-edit-<?= $key ?>" style="display: none;">
    <input type="text" value="<?= $value ?>"
           data-id="<?= $key ?>" data-url="<?= $url ?>"
           id="js-data-column-input-<?= $key ?>"
           class="form-control js-data-column-input">
    <span class="input-group-btn">
        <button class="btn btn-success js-data-column-apply" type="button" data-id="<?= $key ?>">&#10004;</button>
        <button class="btn btn-danger js-data-column-cancel" type="button" data-id="<?= $key ?>">&#10006;</button>
    </span>
</div>
