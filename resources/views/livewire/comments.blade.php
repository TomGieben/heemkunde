<div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="text-center mb-4 pb-2">Reacties</h4>

                    @if ($comments->isEmpty())
                        <p class="text-center">Er zijn nog geen reacties geplaatst.</p>
                    @else
                        @foreach ($comments as $comment)
                            <div class="mb-4 pb-2 border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-1">
                                        {{ $comment->author_name }} <span class="small">- {{ $comment->created_at->diffForHumans() }}</span>
                                    </p>
                                    @if (auth()->check())
                                        <button wire:click="destroy({{ $comment->id }})" class="btn btn-sm btn-danger">
                                            Verwijderen
                                        </button>
                                    @endif
                                </div>
                                <p class="small mb-0">
                                    {{ $comment->content }}
                                </p>
                            </div>
                        @endforeach
                    @endif

                    <form wire:submit.prevent="store" class="row">
                        <div class="mb-3 col-md-6 col-12">
                            <label for="author_name" class="form-label">Naam</label>
                            <input type="text" wire:model="authorName" class="form-control" id="author_name">
                            @error('author_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <label for="author_email" class="form-label">Email</label>
                            <input type="email" wire:model="authorEmail" class="form-control" id="author_email">
                            @error('author_email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label for="content" class="form-label">Reactie</label>
                            <textarea wire:model="content" class="form-control" id="content" rows="3"></textarea>
                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Plaatsen</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
