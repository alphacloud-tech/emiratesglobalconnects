<div>
    <!-- Render the current comment -->
    <div>
        <p>{{ $comment->content }}</p>

        <!-- Add reply form -->
        @if ($showReplyForm)
            <div class="comment-note">
                <form id="contact-forms2" wire:submit.prevent="addReply">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-12 mb-35 col-md-12 col-sm-12">
                                <input wire:model="name" class="from-control" type="text" id="name" name="name"
                                    placeholder="Name*" required="">
                            </div>
                            <div class="col-lg-12 mb-30">
                                <textarea wire:model="newReplyContent" class="from-control" id="newReplyContent" name="newReplyContent"
                                    placeholder="Add a comment..." required=""></textarea>
                            </div>
                        </div>
                        <div class="btn-part">
                            <input class="readon learn-more submit" type="submit" value="Reply to Comment">
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="ltn__comment-reply-area ltn__form-box mb-60---">
                <h4 class="title-2">Leave a Comment</h4>
                <form id="contact-forms2" wire:submit.prevent="addReply">
                    @csrf
                    <div class="input-item input-item-textarea ltn__custom-icon">
                        <textarea placeholder="Type your comments...."></textarea>
                    </div>
                    <div class="input-item input-item-name ltn__custom-icon">
                        <input wire:model="name" type="text" placeholder="Type your name....">
                    </div>
                    {{-- <div class="input-item input-item-email ltn__custom-icon">
                        <input type="email" placeholder="Type your email....">
                    </div> --}}
                    {{-- <div class="input-item input-item-website ltn__custom-icon">
                        <input type="text" name="website" placeholder="Type your website....">
                    </div> --}}
                    <div class="btn-wrapper">
                        <input class="readon learn-more submit" type="submit" value="Reply to Comment">
                    </div>
                </form>
            </div>
        @else
            @if ($comment->isMainComment())
                {{-- <button class="readon reply" wire:click="toggleReplyForm">Reply</button> --}}
            @endif
        @endif

    </div>
</div>
