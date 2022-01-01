$(function(){

    var toggleView = function (id, attr) {
        $('#js-data-column-edit-' + attr + '-' + id).toggle();
        $('#js-data-column-txt-span-' + attr + '-' + id).toggle();
    }

    var applyChanges = function (id, attr) {
        var value = $('#js-data-column-input-' + attr + '-' + id).val(),
            url = $('#js-data-column-input-' + attr + '-' + id).data('url');

        $.post(url, {'id' : id, 'attribute' : attr, 'value' : value}, function(data) {
            if (data.result) {
                $('#js-data-column-txt-span-' + attr + '-' + id).text(value);
                toggleView(id, attr);
            } else {
                alert(typeof(data.message) == 'undefined' ? 'Unknown error' : data.message);
            }
        }, 'json').fail(function(xhr) {
            alert('Error on request: ' + xhr.responseText);
        });

    }

    $('.js-data-column-input').keyup(function(event) {
        if (event.keyCode == 13) {
            applyChanges($(this).data('id'), $(this).data('attr'));
        }
    })

    $('.js-data-column-txt-span').click(function() {
        toggleView($(this).data('id'), $(this).data('attr'));
    });

    $('.js-data-column-cancel').click(function() {
        toggleView($(this).data('id'), $(this).data('attr'));
    });

    $('.js-data-column-apply').click(function() {
        applyChanges($(this).data('id'), $(this).data('attr'));
    });

});

