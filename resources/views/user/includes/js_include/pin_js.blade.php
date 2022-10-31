
@push('script')

<script>


    $(document).ready(function() {  
        // set pin 

        $("#set_pin").on("submit",async function(e) {
            e.preventDefault()
          
            value = [$("#transaction_pin").val(), $("#confirm_pin").val() ]
            if($("#transaction_pin").val().length !== 4 ||  $("#confirm_pin").val().length !== 4 ) {
                Swal.fire('Opps','Pin must be four digit','error')
            }
            else if($("#transaction_pin").val() !== $("#confirm_pin").val() ) 
            {
                Swal.fire('Opps','Pin Must Be Equal')
            }
            else {
            $.get("{{ route('storepin') }}?value="+value, function(data) {
                if(data == 'not_set') {
                    Swal.fire("Pin Not Set",'Reach out to admin','error')
                }
               
                else {
                    Swal.fire('Pin Updated!','Pin Updated successfully','success')
                    window.location.reload()
                }
            })
            }
          
           
        })
        $("#forgot_pin").on('click',function() {
                Swal.fire("Confirm","Are you sure you want to reset pin",'info')
                $.get("{{ route('forgetpin') }}",function(data) {
                    console.log(data)
                })
        })
    })
</script>

<script>
    $(document).ready(function (){
        confirmpin();
        function confirmpin(){
            $('#confirm_transaction_pin').on("submit",async function(e) {
            e.preventDefault();     

                    console.log($('#first').val());
                    console.log($('#second').val());
                    console.log($('#third').val());
                    console.log($('#fourth').val());


            $.ajax({
            type: 'POST',
            data:{
                    'first':$('#first').val(),
                    'second':$('#second').val(),
                    'third':$('#third').val(),
                    'fourth':$('#fourth').val(),
                    "_token": "{{ csrf_token() }}",
                },
            url: '/confirmpin',
            }).done(function(data) {
                if(data==true){
                    $("#pinconfirm").modal('hide')
                    swal.showLoading()

                    buy()

                }
                else{
                    swal.fire('Error!', 'Your Pin Is Incorrect')
                    $("#pinconfirm").modal('hide')


                }
               
            })
        })
        }
        
    })
</script>
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
    
@endpush