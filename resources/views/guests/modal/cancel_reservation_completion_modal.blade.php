
<div class="modal fade" id="reservation-cancelation-id">
    <div class="modal-dialog" style="border:2px solid #981E1E; border-radius:13px;">
        <div class="modal-content" >
            <div class="modal-header justify-content-center" style="border-bottom : 1px solid #981E1E;">
                <p class="my-auto" style="color:#981E1E;">Cancel Confirmation</p>
            </div>
            <div class="modal-body fw-bold py-0">
                <div class="row justify-content-center align-items-center">
                    <div class="col-2 text-center">
                        <i class="fa-solid fa-triangle-exclamation fa-fw" style="color:#F4BB4B; font-size: 30px;"></i>
                    </div>
                    <div class="col-10 mt-4">
                        <p style="font-size: 24px; font-family: 'Bona Nova', sans-serif;">Are you sure you want to cancel this reservation?</p>
                    </div>
                </div>
            </div>
            <form action="{{route('guests.cancelReservation', ['id' => $reservation->reservation_number] )}}" method="put">
            <div class="modal-footer border-0 justify-content-center pt-0">
                @csrf
                @method('PUT')

                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn fw-bold mb-3" style="background-color:#448A47; color:#FFFFFF; width: 180px;">Back to the Page</button>
                <button type="submit" class="btn mb-3 fw-bold" style="background-color:#F4BB4B; color:#981E1E; width: 180px;">Yes</button>
            </div>
        </form>
        </div>
    </div>
</div>
