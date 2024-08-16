<div class="card mb-4">
    <div class="card-body">
        <div class="row justify-content-between">
            <div class="col-auto">
                <strong class="card-title">
                    {{ $message->name }}
                </strong>
            </div>
            <div class="col-auto">
                <strong>E-mailadres:</strong>
                <p>
                    <a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                </p>
            </div>
            <div class="col-auto">
                <strong>Ontvangen op:</strong>
                <p>{{ $message->created_at->format('d-m-Y H:i') }}</p>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-dark me-2" onclick="viewMessages('{{ $message->name }}', '{{ $message->message }}')">
                    <i class="fas fa-eye"></i> Bekijken
                </button>
                <x-delete-button :route="route('admin.contact-messages.destroy', $message)" />
            </div>
        </div>
    </div>
</div>
@push('footer-scripts')
    <script>
        function viewMessages(title, content) {
           swal({
                title: title,
                text: content,
                confirmButtonText: 'Sluiten'
            });
        }
    </script>
@endpush
