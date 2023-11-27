$("document").ready(function () {
    $('#feedBack').on("submit", function () {

        let dataForm = $(this).serialize();
        // let jsontr = JSON.stringify()

        $.ajax({
            url: '/send.php',         /* Куда отправить запрос */
            method: 'POST',             /* Метод запроса (post или get) */
            dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
            data: dataForm,     /* Данные передаваемые в массиве */
            success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */
                // alert(data); /* В переменной data содержится ответ от index.php. */
                console.log(data);
                $('#feedBack')
                    .css('display', 'none')
                    .animate({ opacity: 1 }, 1);
                $('#success')
                    .css('display', 'block')
                    .animate({ opacity: 1 }, 1);
            }
        });
    });
});

