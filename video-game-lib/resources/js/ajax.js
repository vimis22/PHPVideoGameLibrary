$('signUpForm').submit(function (e) {

    e.preventDefault(); // Prevent it from being sent along normally.

    const data = new FormData($('signUpForm'));

    $.ajax({
        type: 'POST',
        url: $('signUpForm').action,
        headers: {
            'X-CSRF-Token': '{{ csrf_token() }}' // Laravel logic that I hope works.
        },
        data: data,
        success: function (response) {
            alert("User succesfully created!");
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        } 
    });

});