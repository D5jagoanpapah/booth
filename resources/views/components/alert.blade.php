<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
</script>

@if (session('success'))
<script>
    Toast.fire({
        icon: "success",
        title: "{{ session('success') }}"
    });
</script>
@endif

@if (session('error'))
<script>
    Toast.fire({
        icon: "error",
        title: "{{ session('error') }}"
    });
</script>
@endif