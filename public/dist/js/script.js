if (window.location.hostname == "localhost")
    var baseUrl = "http://" + window.location.hostname + ":8000";
else {
    var baseUrl =
        window.location.protocol + "//" + window.location.hostname + "";
}

var token = $("input[_token]").val();
// console.log(baseUrl);

document.addEventListener("DOMContentLoaded", function () {
    // JavaScript to add active class to navbar and dropdown based on current URL
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll(".navbar-nav .nav-link");
    const dropdownItem = document.querySelectorAll(
        ".dropdown-menu .dropdown-item"
    );
    const menuLength = menuItem.length;
    const dropdownLength = dropdownItem.length;

    // Add active class to main navbar links
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].classList.add("active");
        }
    }

    // Add active class to dropdown menu items
    for (let i = 0; i < dropdownLength; i++) {
        if (dropdownItem[i].href === currentLocation) {
            dropdownItem[i].classList.add("active");

            // Also add active class to the parent dropdown toggle
            dropdownItem[i]
                .closest(".nav-item")
                .querySelector(".nav-link")
                .classList.add("active");
        }
    }
});

// Counter
$(document).ready(function () {
    $(".counter").each(function () {
        var $this = $(this);
        var countTo = $this.text().replace(/\D/g, ""); // Extract numeric value (removes non-numeric characters like +)

        $this.prop("Counter", 0).animate(
            {
                Counter: countTo,
            },
            {
                duration: 4000,
                easing: "swing",
                step: function (now) {
                    var displayNumber = Math.ceil(now);
                    if ($this.text().includes("+")) {
                        $this.text(displayNumber + "+"); // Append '+' only if it was originally present
                    } else {
                        $this.text(displayNumber); // No '+' for others
                    }
                },
            }
        );
    });
});

function trainer_info_modal(id = 0) {
    $("#popupdiv").html("");
    $(".modal-backdrop").remove();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.post(
        baseUrl + "/trainer-info-modal",
        {
            id: id,
        },
        function (data) {
            // console.log(data);
            if ($.trim(data)) {
                $("#popupdiv").html(data);
                $("#trainerDetailModal").modal("show");
            }
        }
    );
}
