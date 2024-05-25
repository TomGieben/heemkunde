<div class="card mb-2">
    <div class="card-body p-3">
        <div class="row align-items-center m-0">
            <div class="col d-flex flex-column align-items-start">
                <strong class="text-secondary">Nieuws artikel</strong>
                <small>{{ $comment->newsArticle->title }}</small>
            </div>
            <div class="col d-flex flex-column align-items-start">
                <strong class="text-secondary">Auteur</strong>
                <small>{{ $comment->author_name }}</small>
            </div>
            <div class="col d-flex flex-column align-items-start">
                <strong class="text-secondary">E-mail</strong>
                <small>{{ $comment->author_email }}</small>
            </div>
            <div class="col-2 d-flex flex-column align-items-start me-4">
                <strong class="text-secondary">Aangemaakt op</strong>
                <small>{{ $comment->created_at->format('d-m-Y') }}</small>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-dark me-2" onclick="viewComments('{{ $comment->author_name }}', '{{ $comment->content }}')">
                    <i class="fas fa-eye"></i> Bekijken
                </button>
                <x-delete-button :route="route('admin.comments.destroy', $comment)" />
            </div>
        </div>
    </div>
</div>

@push('footer-scripts')
    <script>
        function viewComments(author, content) {
           swal({
                title: 'Reactie van ' + author,
                text: content,
                confirmButtonText: 'Sluiten'
            });
        }
    </script>
@endpush
