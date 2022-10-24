function deleteData(url) {
    Swal.fire({
        title: "Are you sure?",
        // text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "btn btn-warning mr-10",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: url,
                type: "DELETE",
                data: {
                    "_token": $('#csrfToken').val(),
                },
                success: function (result) {
                    toastr.info(
                        result,
                        'Deleted!',
                        {
                            positionClass: 'toast-top-right',
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                            timeOut: 2000
                        }
                    );
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: "Cancelled",
                text: "Your imaginary file is safe 🙂",
                type: "error",
                confirmButtonClass: "btn btn-success"
            })
            setTimeout(function () {
                location.reload();
            }, 1000);
        }
    });
}

function getSubCatAgainstCat(id, url, view) {
    $.ajax({
        url: url,
        type: "get",
        data: {
            "id": id,
        },
        contentType: "application/json;charset=UTF-8",
        dataType: "json",
        success: function (data) {
            if (data.length > 0) {
                var output = '<option value="">Select Sub Category</option>';
                $.each(data, function (index, value) {
                    output += '<option value="' + value['id'] + '">' + value['name'] + '</option>';
                });
            } else {
                var output = '<option value="">No Sub Category Found</option>';
            }
            $(view).html(output);
        },

        error: function (e) {
            console.log(e);
        }
    });
}
