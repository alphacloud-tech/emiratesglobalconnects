{{-- <div>
    <div class="ltn__comment-area mb-50">

        <h4 class="title-2">{{ count($comments) }} Comments</h4>
        <div class="ltn__comment-inner">
            <ul>

                @foreach ($comments as $comment)
                    <li>
                        <div class="ltn__comment-item clearfix">
                            <div class="ltn__commenter-comment">
                                <h6><a href="#">{{ $comment->name }}</a></h6>
                                <span class="comment-date">{{ $comment->created_at->format('F j, Y \a\t g:i a') }}</span>
                                <p>@livewire('comment', ['comment' => $comment], key($comment->id))</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
    <hr>
    <div class="ltn__comment-reply-area ltn__form-box mb-60---">
        <h4 class="title-2">Leave a Comment</h4>
        <form id="contact-forms2" wire:submit.prevent="addComment">
            @csrf

            <div class="input-item input-item-textarea ltn__custom-icon">
                <textarea wire:model="content" id="content" name="content" placeholder="Type your comments...."></textarea>
            </div>
            <div class="input-item input-item-name ltn__custom-icon">
                <input wire:model="name" type="text" placeholder="Type your name...." id="name" name="name">
            </div>

            <label class="mb-0 input-info-save"><input type="checkbox" name="agree"> Save my name,
                in this browser for the next time I comment.</label>
            <div class="btn-wrapper">
                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i
                        class="far fa-comments"></i> Post Comment</button>
            </div>
        </form>
    </div>
</div> --}}

<div class="ft-blog-comment headline">
    <h3>Comment ({{ count($comments) }})</h3>
    <div class="ft-blog-comment-block-wrapper">
        @foreach ($comments as $comment)
            <div class="ft-blog-comment-block">
                <div class="ft-blog-comment-img float-left">
                    <img src="assets/img/blog/blg-c1.jpg" alt="" />
                </div>
                <div class="ft-blog-comment-text headline pera-content position-relative">
                    <h4><a>{{ $comment->name }}</a></h4>
                    <span>{{ $comment->created_at->format('F j, Y \a\t g:i a') }} </span>
                    <p>@livewire('comment', ['comment' => $comment], key($comment->id))</p>

                    {{-- <a class="ftd-reply-btn text-center text-uppercase" href="#">Reply <i
                            class="fas fa-chevron-right"></i></a> --}}
                </div>
            </div>
        @endforeach
    </div>
    <h3>Post A Comment</h3>
    <div class="ftd-blog-comment-form">
        <form id="contact-forms2" wire:submit.prevent="addComment">
            @csrf
            <div class="ftd-comment-form-input">
                {{-- <label>Your email address will not be published *</label> --}}

                <div class="ftd-comment-input-wrap2 d-flex mb-4">
                    <input type="text" placeholder="Name" wire:model="name" id="name" name="name"
                        class="form-control" />
                </div>
                <textarea placeholder="Your Comment here..." wire:model="content" id="content" name="content" class="form-control"></textarea>

                <button type="submit">Post Comment</button>
            </div>
        </form>
    </div>
</div>
