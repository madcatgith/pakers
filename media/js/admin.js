$(function() {
    $(document).keydown(function(e) {
        if(e.ctrlKey && e.keyCode == 90) {
            $('#dictionaryList').toggleClass('active');
        }
    });
    
    $('#dictionaryList table a').on('click', function() {
        var ID = $(this).data('id'),
            LANG = $(this).data('lang'),
            TITLE = JSON.parse($(this).data('title')),
            newWord = prompt('Редактирование [ID: '+ ID +']', TITLE);
        
        if(newWord !== null && newWord !== TITLE) {
            var isSave = confirm('Сохранить "'+ newWord +'"?');
            if(isSave === true) {
                $.post('/request.php?fn=dictionary/edit', {
                    uri: location.pathname,
                    sessid: $('#sessid_request').val(),
                    data: {
                        id: ID,
                        lang: LANG,
                        title: newWord
                    }
                }, function(data) {
                    if(data.action) {
                        location.reload();
                    }
                }, 'json');
            }
        }
        
        delete ID; delete TITLE; delete newWord;
    });
});

