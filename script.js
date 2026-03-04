$(document).ready(function() {

    function initSelect(selector) {
        $(selector).select2({
            placeholder: "Select options",
            maximumSelectionLength: 5,
            width: '100%'
        });
    }

    initSelect('#locationsSelect');
    initSelect('#rolesSelect');


    $('#locationsSelect').on('change', function () {

    var selectedValues = $(this).val(); // array in multi-select

    if (selectedValues && selectedValues.includes("All Kerala")) {

        // Keep only "All Kerala" selected
        $(this).val(["All Kerala"]);

        // Disable all other options
        $('#locationsSelect option')
            .not('[value="All Kerala"]')
            .prop('disabled', true);

    } else {

        // Enable all options
        $('#locationsSelect option').prop('disabled', false);
    }

    // Refresh Select2 UI
    $('#locationsSelect').trigger('change.select2');

});
    $('#districtSelect').select2({
        placeholder: "Search District",
        width: '100%'
    });

    $('#leadForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function(){
                $('.btn-submit').text('Submitting...').prop('disabled', true);
                $('#formMessage').hide().removeClass('success error');

            },
            success: function(response){

                if(response.status === "success"){
                    $('#formMessage')
                        .addClass('success')
                        .text(response.message)
                        .fadeIn();
                    $('#leadForm')[0].reset();
                    $('#locationsSelect').val(null).trigger('change');
                    $('#districtSelect').val(null).trigger('change');
                    $('#rolesSelect').val(null).trigger('change');
                    setTimeout(function(){
                        $('#formMessage').fadeOut();
                    }, 4000);
                } else {
                     $('#formMessage')
                        .addClass('error')
                        .text(response.message)
                        .fadeIn();
                        setTimeout(function(){
                            $('#formMessage').fadeOut();
                        }, 4000);
                }

            },
            error: function(){
                $('#formMessage')
                    .addClass('error')
                    .text("Server error. Please try again.")
                    .fadeIn();
            },
            complete: function(){
                $('.btn-submit').text('Submit Application').prop('disabled', false);
            }
        });

    });


    // Allow only numbers in phone field
    $('#phone').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');

        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });

    // Allow only numbers and one decimal
    $('#total_experience').on('input', function () {

        let value = this.value;

        // Remove invalid characters
        value = value.replace(/[^0-9.]/g, '');

        // Allow only one decimal point
        const parts = value.split('.');
        if (parts.length > 2) {
            value = parts[0] + '.' + parts.slice(1).join('');
        }

        this.value = value;
    });

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        return regex.test(email);
    }

    $('#email').on('blur', function () {
        let email = $(this).val().trim();

        if (!validateEmail(email)) {
            $(this).css("border-color", "#f04438");
        } else {
            $(this).css("border-color", "#00b2a8");
        }
    });

    // Fix scroll position glitch after viewport resize
    let lastHeight = window.innerHeight;

    window.addEventListener('resize', function() {
        if (window.innerHeight !== lastHeight) {
            lastHeight = window.innerHeight;
            window.scrollTo(0, Math.min(window.scrollY, document.body.scrollHeight - window.innerHeight));
        }
    });



});

