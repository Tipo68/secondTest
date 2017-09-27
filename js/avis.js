jQuery(document).ready(function () {
    $("#sendComment").click(function () {
        var empty = 0;
        $('.error').remove();
        $('.field').each(function () {
            if (!$(this).val()) {
                empty = 1;
                $(this).after("<div class='error'>Veuillez remplir ce champ</div>");
            }
        })

        if (empty == 0) {
            $.ajax({
                url: './controller/controller.php',
                type: 'POST',
                data: 'sendComment=1&pseudo=' + $('#pseudo').val() + '&mail=' + $('#mail').val() + '&commentaire=' + $('#commentaire').val() + '&note=' + $('#note').val(),
                dataType: 'json',
                success: function (response) {
                    if (!response['error']) {
                        window.location.href = response['redirect'];
                    }
                },
            });
        }
    });

    $("#triDate").click(function () {

        if ($(this).find('span').hasClass('asc')) {
            $(this).find('span').remove();
            $(this).prepend("<span class='desc'></span>");
            var data = 'triDate=1&sort=desc';
        } else if ($(this).find('span').hasClass('desc')) {
            $(this).find('span').remove();
            $(this).prepend("<span class='asc'></span>");
            var data = 'triDate=1&sort=asc';
        }

        $.ajax({
            url: './controller/controller.php',
            type: 'POST',
            data: data,
            dataType: 'html',
            success: function (response) {
                $(".avis").remove();
                $(".tri").after(response);
            },
        });
    });

    $("#triNote").click(function () {

        if ($(this).find('span').hasClass('asc')) {
            $(this).find('span').remove();
            $(this).prepend("<span class='desc'></span>");
            var data = 'triNote=1&sort=desc';
        } else if ($(this).find('span').hasClass('desc')) {
            $(this).find('span').remove();
            $(this).prepend("<span class='asc'></span>");
            var data = 'triNote=1&sort=asc';
        }

        $.ajax({
            url: './controller/controller.php',
            type: 'POST',
            data: data,
            dataType: 'html',
            success: function (response) {
                $(".avis").remove();
                $(".tri").after(response);
            },
        });
    });

    $('#noteSup').on('change', function () {
        $.ajax({
            url: './controller/controller.php',
            type: 'POST',
            data: 'noteSup=' + $('#noteSup').val(),
            dataType: 'html',
            success: function (response) {
                $(".avis").remove();
                $(".tri").after(response);
            },
        });
    });
});