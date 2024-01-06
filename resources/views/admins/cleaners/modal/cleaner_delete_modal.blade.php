<div class="modal fade" id="deleteModal-{{ $cleaner->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="border:2px solid #981E1E; border-radius:13px;">
        <div class="modal-content" >
            <div class="modal-header justify-content-center" style="border-bottom : 2px solid #981E1E;">
                <p class="my-auto" style="color:#981E1E;">Delete Confirmation</p>
            </div>
            <div class="modal-body custom-modal-body">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/caution.png') }}" alt="caution">
                    </div>
                    <div class="col-10 ">
                        <p style="font-size: 24px;">Are you sure you want to delete {{ $cleaner->profile->first_name }} {{ $cleaner->profile->last_name }}?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center pt-0">
                <button type="button" class="btn modal-cancel-btn fw-bold mx-auto px-4 mb-3" data-bs-dismiss="modal">Return to the Page</button>
                <form method="POST" action="{{ route('admin.cleaners.cleaner.destroy', $cleaner->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn modal-delete-btn w-25 mx-auto mb-3 fw-bold">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>



