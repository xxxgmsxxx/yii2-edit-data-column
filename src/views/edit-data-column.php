<?php

/* @var $key string
 * @var $attr string
 * @var $value string
 * @var $url string
 */

?>

<span class="js-data-column-txt-span" id="js-data-column-txt-span-<?= $attr ?>-<?= $key ?>" data-id="<?= $key ?>" data-attr="<?= $attr ?>"><?= empty($value) ? '(null)' : $value ?></span>
<div class="input-group js-data-column-edit" id="js-data-column-edit-<?= $attr ?>-<?= $key ?>" style="display: none;">
    <input type="text" value="<?= $value ?>"
           data-id="<?= $key ?>" data-url="<?= $url ?>" data-attr="<?= $attr ?>"
           id="js-data-column-input-<?= $attr ?>-<?= $key ?>"
           class="form-control js-data-column-input"
           style="min-width: 100px;" >
    <span class="input-group-btn">
        <button class="btn btn-success js-data-column-apply" type="button" data-id="<?= $key ?>" data-attr="<?= $attr ?>">&#10004;</button>
        <button class="btn btn-danger js-data-column-cancel" type="button" data-id="<?= $key ?>" data-attr="<?= $attr ?>">&#10006;</button>
    </span>
</div>
