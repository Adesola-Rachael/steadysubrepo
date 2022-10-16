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


    // $(document).ready(function() {
        
    // $("#set_pin").on("submit",async function(e) {
    //     e.preventDefault()
      
    //     value = [$("#current_pin").val(), $("#new_pin").val() ]
    //     if($("#current_pin").val().length !== 4 ||  $("#new_pin").val().length !== 4 ) {
    //         Swal.fire('Opps','Pin must be four digit','error')
    //     } 
    //     else {
    //     $.get("{{ route('changepin') }}?value="+value, function(data) {
    //         if(data == 'not_matched') {
    //             Swal.fire("Incorrect Pin",'Pin not correct','error')
    //         }
           
    //         else {
    //             Swal.fire('Pin changed!','Pin changed successfully','success')
    //             window.location.reload()
    //         }
    //     })
    //     }
      
       
    // })
    // $("#forgot_pin").on('click',function() {
    //         Swal.fire("Confirm","Are you sure you want to reset pin",'info')
    //         $.get("{{ route('forgetpin') }}",function(data) {
    //             console.log(data)
    //         })
    //     })
    //     })
</script>