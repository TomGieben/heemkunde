<button type="button" class="btn btn-outline-danger  @if($small) btn-sm m-0 @endif" onclick="showConfirmationModal('{{ $route }}')">
    <i class="fas fa-trash"></i> @if(!$small) Verwijder @endif
</button>
@push('footer-scripts')
    <form method="POST" id="{{ $route }}-delete" action="{{ $route }}">
        @csrf
        @method('DELETE')
    </form>
    <script>
        function showConfirmationModal(route) {
            swal({
                title: "Weet je zeker dat je dit wilt verwijderen?",
                text: "Dit kan niet ongedaan worden gemaakt!",
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            }).then((confirmed) => {
                if (confirmed) {
                    const form = document.getElementById(route + '-delete');

                    form.submit();
                }
            });
        }
    </script>
@endpush