<div class="col-4 comment border border-1 border-dark py-4 mb-5">

    <div>
        <form>
            <h1 class="text-center"><b></b></h1>
                {{-- $post->content --}}
                <h4>Add comment</h4>
                    <form {{--method="post" action="{{ route('comments.store')--}}>
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{-- $post->id --}}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment" />
                        </div>
            </form>
    </div>
</div>
