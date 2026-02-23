<div class="modal fade" id="one-inbox-new-message" tabindex="-1" role="dialog" aria-labelledby="one-inbox-new-message"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.contact.sendMessage') }}" method="POST">
                @csrf
                <div class="block block-rounded block-transparent mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <i class="fa fa-pencil-alt me-1"></i> New Message
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="mb-4 position-relative">
                            <label class="form-label" for="message-email">Email</label>
                            <input class="form-control form-control-alt" type="email" id="message-email"
                                name="email" autocomplete="off">

                            <!-- Suggestion Box -->
                            <div id="email-suggestions" class="list-group position-absolute w-100 shadow"
                                style="z-index: 1000;"></div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="message-subject">Subject</label>
                            <input class="form-control form-control-alt" type="text" id="message-subject"
                                name="subject">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="message-msg">Message</label>
                            <textarea class="form-control form-control-alt" id="message-msg" name="message" rows="6"></textarea>
                            <div class="form-text">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;,
                                &lt;em&gt;</div>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="fa fa-paper-plane me-1 opacity-50"></i> Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('footer_scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            let emailInput = document.getElementById('message-email');
            let suggestionBox = document.getElementById('email-suggestions');

            emailInput.addEventListener('keyup', function() {

                let query = this.value;

                if (query.length < 2) {
                    suggestionBox.innerHTML = '';
                    return;
                }

                fetch(`{{ route('admin.subscriber.search') }}?search=${query}`)
                    .then(response => response.json())
                    .then(data => {

                        suggestionBox.innerHTML = '';

                        data.forEach(email => {
                            let item = document.createElement('a');
                            item.href = "javascript:void(0)";
                            item.classList.add('list-group-item', 'list-group-item-action');
                            item.textContent = email;

                            item.addEventListener('click', function() {
                                emailInput.value = email;
                                suggestionBox.innerHTML = '';
                            });

                            suggestionBox.appendChild(item);
                        });

                    });
            });

            document.addEventListener('click', function(e) {
                if (!emailInput.contains(e.target)) {
                    suggestionBox.innerHTML = '';
                }
            });

        });
    </script>
@endpush
