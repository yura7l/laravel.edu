<!-- Callback Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callbackModalLabel">Request a call</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Leave your phone and we will call you in 5 minutes!</p>
                <div class="alert alert-danger mt-3 d-none" id="callback_errors"></div>
                <div class="alert alert-success mt-3 d-none" id="callback_success"></div>
                <form action="{{ route('callback-form') }}" method="post" name="callback" id="callback">
                    @csrf
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            {{--<div class="modal-footer">

            </div>--}}
        </div>
    </div>
</div>
