$(document).ready(function () {
    $('.deleteForm').click(function (env) {
        var name = $(this).data('name');
        var form = $(this).closest('form');
        env.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: `You won't be able to revert ${name} !`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                ).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            }
        })
    })

});