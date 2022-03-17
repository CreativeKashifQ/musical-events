<div class="text-{{$align}}">
    @if($show)
    <div>
        <form wire:submit.prevent="save" class="mb-2 rounded" style="">
            <h2 class="text-primary">{{$comment->component}} Comments</h2>

            <div class="form-group">
                <textarea type="text" class="form-control @error('comment.comments')  is-invalid @enderror " rows="10"
                    placeholder="Write your comments" wire:model.defer="comment.comments"></textarea>
                @error('comment.comments')
                {{$errors->first('comment.comments')}}
                @enderror
            </div>
            <button wire:loading.attr="disabled" wire:target="save" type="submit"
                class="btn btn-outline-primary btn-sm">
                <span class="spinner-border spinner-border-sm" wire:loading.delay wire:target="save"></span>
                Save and Close
            </button>
        </form>
    </div>
    @else
    <button type="button" class="btn btn-link text-muted px-0 text-uppercase pb-0 mb-0" wire:click="showForm">
        Leave Your Comments
    </button>
    @if($comment->unseen)
    <a wire:click="showUpdates" href="javascript:void(0)">
        <p class="mb-0 text-muted small">Unseen Updates!</p>
    </a>
    @endif
    @endif
</div>
