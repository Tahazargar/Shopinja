<script>

    $(document).ready(function (){
        let className = '{{ $className }}';
        let element = $('.' + className);

        element.on('click', function (e){
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass:{
                    confirmButton: 'btn btn-success mx-2',
                    cancelButton: 'btn btn-danger mx-2'
                },

                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: "آیا مطمئن هستید؟",
                text: "این عملیات غیر قابل بازگشت است!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "بله حذف کن!",
                cancelButtonText: "نه، منصرف شدم",
                reverseButtons: true
            }).then((result) => {
                if(result.value == true){
                    $(this).parent().submit();
                }
                else if(result.dismiss === Swal.DismissReason.cancel){
                    swalWithBootstrapButtons.fire({
                        title: "عملیات متوقف شد",
                        text: "دسته بندی شما حذف نشد",
                        icon: "error"
                    });
                }
            });
        })
    })

</script>
