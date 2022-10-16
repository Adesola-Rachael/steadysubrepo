
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS  -->
        <script src="{{ asset('adminasset/plugins/apex/apexcharts.min.js')}}"></script>
        <script src="{{ asset('adminasset/assets/js/dashboard/dash_1.js')}}"></script>

        <script>
            $(document).ready(function() { 
                  
        $.get('{{ route("checkpin") }}  ',function(data) {
            if(data == true) {
                $("#pinValidation").modal('show')
                }
            console.log(data)
        })

        $("#submitpin").on('submit',async function(e) {
            e.preventDefault();
            Swal.fire('Updating pin,please wait...')
            // var image = $('#image')[0].files;
            var fd = new FormData;
           
            fd.append('first', $("#pfirst").val());
            fd.append('second', $("#psecond").val());
            fd.append('third', $("#pthird").val());
            fd.append('fourth', $("#pfourth").val());
           
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('updatepin')}}",
                data: fd,
                cache: false,
                contentType: false,
                  headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    swal.close()
                    $("#pinValidation").modal('hide')
                    Swal.fire('success', 'Pin set successfully!', 'success')
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    swal.close()
                    Swal.fire('Opps!', 'Something went wrong, please try again later or contact the administrator', 'error')
                }
            })
        })
  


        });
        

        
        </script>

       


        




