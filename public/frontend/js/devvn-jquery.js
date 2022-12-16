/*
Author: Le Van Toan - levantoan.com
*/
(function ($) {
    $(document).ready(function(){
        function devvnGetParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }
        $('.devvn_album').on('click','.devvn_paginate_links a',function () {
            var thisParent = $(this).closest('.devvn_album');
            var numbers = thisParent.data('numbers');
            var column = thisParent.data('column');
            var nonce = thisParent.data('nonce');
            var paged = devvnGetParameterByName('album_paged',$(this).attr('href'));

            $.ajax({
                type : "post",
                dataType : "json",
                url : devvn_album.ajaxurl,
                data : {action: "load_devvn_album", numbers : numbers, column: column, paged: paged, nonce: nonce},
                context: this,
                beforeSend: function(){
                    console.log(paged);
                },
                success: function(response) {
                    console.log(response);
                    thisParent.html(response.data);
                }
            });

            return false;

        });
    })
})(jQuery)