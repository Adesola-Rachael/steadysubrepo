<script>
    $(document).ready(function () {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#update_profile").on("submit", async function(e) {
            e.preventDefault();
             console.log('button clicked')

            new swal('Updating profile, please wait...')
            // var image = $('#image')[0].files;
            var fd = new FormData;
            fd.append('name', $("#name").val());
          
            fd.append('phone', $("#phone").val());
            
            // console.log(image[0],'tje image')
            // if(image[0] != undefined) {
            // fd.append('image', image[0]);
            // }
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "/updateprofile",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    swal.close()
                    new swal('success', 'Profile Updated successfully!', 'success')
                    window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    swal.close()
                    new swal('Opps!', 'Profile not updated, contact the administrator', 'error')
                }
            })

        })


})
</script>