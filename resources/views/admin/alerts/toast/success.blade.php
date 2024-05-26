@if(session('toast-success'))

    <section class="toast" data-delay="5000">
        <section class="toast-body py-3 d-flex bg-success text-white justify-content-between">
            <strong class="ml-auto">{{ session('toast-success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </section>
    </section>

    <script>
        $(document).ready(function () {
            $('.toast').toast('show');
        })
    </script>

@endif



