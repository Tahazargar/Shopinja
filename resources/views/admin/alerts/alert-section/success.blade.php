@if(session('alert-section-success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading"> موفقیت </h4>
        <hr>
        <p class="mb-0">
            {{ session('alert-section-success') }}
        </p>
        <button type="button" class="btn-close" style="right: inherit !important; left: 0 !important;" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


