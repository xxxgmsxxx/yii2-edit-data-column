$(function(){

    var toggleView = function (id) {
        $('#js-data-column-edit-' + id).toggle();
        $('#js-data-column-txt-span-' + id).toggle();
    }

    var applyChanges = function (id) {
        var value = $('#js-data-column-input-' + id).val(),
            url = $('#js-data-column-input-' + id).data('url');

        $.post(url, {'id' : id, 'value' : value}, function(data) {
            if (data.result) {
                $('#js-data-column-txt-span-' + id).text(value);
                toggleView(id);
            } else {
                alert(typeof(data.message) == 'undefined' ? 'Unknown error' : data.message);
            }
        }, 'json').fail(function(xhr) {
            alert('Error on request: ' + xhr.responseText);
        });

    }

    $('.js-data-column-input').keyup(function(event) {
        if (event.keyCode == 13) {
            applyChanges($(this).data('id'));
        }
    })

    $('.js-data-column-txt-span').click(function() {
        toggleView($(this).data('id'));
    });

    $('.js-data-column-cancel').click(function() {
        toggleView($(this).data('id'));
    });

    $('.js-data-column-apply').click(function() {
        applyChanges($(this).data('id'));
    });

});

