  
    $(function() {

        var getPage = function() {
            var $a = $(this);

            var options = {
                url: $a.attr("href"),
                data: $("form").serialize(),
                type: "get"
            };

            $.ajax(options).done(function(data) {
                var target = $a.parents("div.pagedList").attr("data-scar-target");
                $(target).replaceWith(data);
            });
            return false;

        };


        $("#content").on("click", ".pagedList a", getPage);


    });

